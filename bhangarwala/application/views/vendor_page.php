<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Party List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Party List</li>
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
  

<div>
  <div class="dashboard_table">
  <table class="table table-hover table-bordered">
    <tr>
      <th>Sr No</th>
      <th>Party Name</th>
      <th>Party Mobile</th>
      <th>Party Address</th>
      <th style="width:100px;text-align:center">Action</th>
    </tr>
    <tr>
    <form id="save_form" action="<?php echo base_url()?>vendor/add" method='post' class='center-screen'>
 
            
                
                <td>1</td>
                <td><input type="text" name="Vendor_Name" class="form-control form-control-sm" required placeholder="Enter Party Name"></td>
           
                <td><input type="text" name="Vendor_Mobile"  class="form-control form-control-sm" placeholder="Enter Party Mobile No"></td>
           
                <td><input type="text" name="Vendor_Address"  class="form-control form-control-sm" placeholder="Enter Party Address"></td>
            
                <td style="text-align:center"> <button class="btn btn-success btn-xs"><i class='fa fa-save'></i> Save</button></td>
            
    </form>

    </tr>
    <?php $i = 2; foreach($vendor as $c){?>
       <tr>
      <td><?php echo $i?></td>
      <td><?php echo $c->Vendor_Name?></td>
      <td><?php echo $c->Vendor_Mobile?></td>
      <td><?php echo $c->Vendor_Address?></td>
      <td>
        <button class="btn btn-xs btn-success" onclick="show_edit(<?php echo $c->Vendor_Id?>)"><i class='fa fa-edit'></i></button>
        <button class="btn btn-xs btn-danger" onclick="delete_item(<?php echo $c->Vendor_Id?>)"><i class='fa fa-trash'></i></button>
      </td>
    </tr>
    <?php $i++; } ?>
</table>
</div>    
</div>
    </div>
    </div>
    </div>
    </section>

    <div class="modal fade" id="update_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Update Party Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
    <form id="update_form" action="<?php echo base_url()?>vendor/update" method='post' class='center-screen'>
        <input type="hidden" name="Vendor_Id" id="Vendor_Id">
 <div class="row">
            <div class="col-sm-12 form-group">
              
              <label>Party Name</label>
              <input type="text" name="Vendor_Name" id="Vendor_Name" class="form-control form-control-sm">
    </div>
    <div class="col-sm-12 form-group">

                <label>Party Mobile</label>
                <input type="text" name="Vendor_Mobile" id="Vendor_Mobile" class="form-control form-control-sm">
            </div> 
            <div class="col-sm-12 form-group">

                <label>Party Address</label>
                <input type="text" name="Vendor_Address" id="Vendor_Address" class="form-control form-control-sm">
            </div>
            <div class="col-sm-12 form-group">
                 <button class="btn btn-xs btn-success float-right"><i class='fa fa-save'></i> Save</button>
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
  $("#top_heading").html("Vendor")
  function show_edit(a)
  {

 $.ajax({
            type:"post",
            url:"<?php echo base_url()?>vendor/edit",
            data:{"Vendor_Id":a},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                  $("#Vendor_Id").val(json_d.Vendor_Id);
                  $("#Vendor_Name").val(json_d.Vendor_Name);
                  $("#Vendor_Mobile").val(json_d.Vendor_Mobile);
                  $("#Vendor_Address").val(json_d.Vendor_Address);
                  $("#update_model").modal("show");
            }
        })
  } 

  function delete_item(a)
  {
    var check =  confirm("Are You Sure ..?")
    if(check){
    $.ajax({
            type:"post",
            url:"<?php echo base_url()?>vendor/delete",
            data:{"Vendor_Id":a},
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