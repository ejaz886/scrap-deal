<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
            <table class="table table-bordered table-hover">
              <tr>
                <th style="width: 80px;text-align: center;">Sr No</th>
                <th>Category Name</th>
                <th style="width: 100px;text-align: center;">Action</th>
              </tr>
              <tr>
                <form id="save_form" action="<?php echo base_url()?>category/add_new_category" method='post' class='center-screen'>

                <td style="text-align: center;">1</td>
                <td>
                  <input type="text" name="Item_Category_Name" class="form-control form-control-sm" placeholder="Enter New Category Name">
                </td>
                <td class="text-center">
                <button class="btn btn-xs btn-success"><i class='fa fa-plus'></i></button>
                </td>
              </tr>
              <?php 
              $i = 2;
              foreach($category as $c){ ?>
              <tr>
                <td class="text-center"><?php echo $i?></td>
                <td><?php echo $c->Item_Category_Name?></td>
                <td class="text-center">
                  <button class='btn btn-xs btn-success' type="button" onclick="show_edit(<?php echo $c->Item_Category_Id?>)"><i class='fa fa-edit'></i></button>
                  <button class='btn btn-xs btn-danger' type="button" onclick="delete_item(<?php echo $c->Item_Category_Id?>)"><i class='fa fa-trash'></i></button>
                </td>
              </tr>
              <?php $i++; } ?>
             
            </form>
            </table>
          </div>
        </div>
      </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <div class="modal fade" id="update_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_form" action="<?php echo base_url()?>category/update" method='post' class='center-screen'>
            <input type="hidden" name="Item_Category_Id" id="Item_Category_Id">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="Item_Category_Name" id="Item_Category_Name" class="form-control form-control-sm">
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
  </div>



<div id="delete_modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="$('#delete_modal').hide()">&times;</span>
    <p>Are You Sure ??</p>
    <input type='hidden' id="Delete_Id">
    <button onclick="delete_item($('#Delete_Id').val())">Yes</button>
    <button onclick="$('#delete_modal').hide();$('#Delete_Id').val('');">No</button>
  </div>

</div>

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