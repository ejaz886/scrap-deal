<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="row">
          <div class="col-sm-12">
            <?php $this->db->where("User_Id",$this->session->userdata("user")->User_Id);
                $t = $this->db->get("user")->row();
            ?>
          <form action="<?php echo base_url()?>profile/update" method='post' class='center-screen'>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Company Name</label>
                  <input type="text" name="Company_Name" class="form-control form-control-sm" value="<?php echo $t->Company_Name?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control form-control-sm" value="<?php echo $t->Username?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="Password" class="form-control form-control-sm" value="<?php echo $t->Password?>">
                </div>
              </div>
              <div class="col-sm-12">
                <button class="btn btn-success float-right btn-xs"><i class='fa fa-save'></i> Save</button>
              </div>
            </div>
            
        </form>
          </div>
        </div>
      </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<script>
  $("#top_heading").html("Dashboard")

  function show_edit(a)
  {

 $.ajax({
            type:"post",
            url:"<?php echo base_url()?>category/edit",
            data:{"Item_Category_Id":a},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                  $("#Item_Category_Id").val(json_d.Item_Category_Id);
                  $("#Item_Category_Name").val(json_d.Item_Category_Name);
                  $("#update_model").modal("show");


            }
        })
  } 

  function delete_item(a)
  {
    let check = confirm("Are You Sure ....?")
    if(check){
 $.ajax({
            type:"post",
            url:"<?php echo base_url()?>category/delete",
            data:{"Item_Category_Id":a},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);

               if(json_d.response)
                     {
                      
                        Toast.fire({
                            type: "success",
                            title: json_d.msg
                        })
                        setTimeout(function(){
                         location.reload();
                     },3000);
                    }
                    else{
                        Toast.fire({
                            type: "error",
                            title: json_d.msg
                        })
                    }
                    $(".loader").hide();
            }
        })
      }
  }

  $("#save_form").submit(function(e) {
         $(".loader").show();

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url  = form.attr("action");
        
        $.ajax({
               type: "POST",
               url: url,
               data: new FormData(this),
               processData: false,
               contentType: false,
               success: function(resultData)
               {
          var json_d = JSON.parse(resultData);

               if(json_d.response)
                     {
                      
                        Toast.fire({
                            type: "success",
                            title: json_d.msg
                        })
                        setTimeout(function(){
                         location.reload();
                     },3000);
                    }
                    else{
                        Toast.fire({
                            type: "error",
                            title: json_d.msg
                        })
                    }
                    $(".loader").hide();
               }
             });  
    }); 


  $("#update_form").submit(function(e) {
         $(".loader").show();

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url  = form.attr("action");
        
        $.ajax({
               type: "POST",
               url: url,
               data: new FormData(this),
               processData: false,
               contentType: false,
               success: function(resultData)
               {
          var json_d = JSON.parse(resultData);

               if(json_d.response)
                     {
                      
                        Toast.fire({
                            type: "success",
                            title: json_d.msg
                        })
                        setTimeout(function(){
                         location.reload();
                     },3000);
                    }
                    else{
                        Toast.fire({
                            type: "error",
                            title: json_d.msg
                        })
                    }
                    $(".loader").hide();
               }
             });  
    }); 

  </script>