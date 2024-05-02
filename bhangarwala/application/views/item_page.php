<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Item </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item</li>
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
              <thead>
              <tr>
                <th style="width: 80px;text-align: center;">Sr No</th>
                <th style="width: 100px;text-align: left;">Code</th>
                <th style="width: 200px;text-align: left;">Category</th>
                <th style="width: 300px;text-align: left;">Desc</th>
                <th style="width: 150px;text-align: left;">Unit</th>
                <th style="width: 150px;text-align: left;">Rate</th>
                <th style="width: 100px;text-align: left;">Discount</th>
                <th style="width: 100px;text-align: left;">Tax</th>
              
                <th style="width: 30px;text-align: center;">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                
    <form id="save_form" action="<?php echo base_url()?>item/add" method='post' class='center-screen'>
            <input type="hidden" name="Item_Code" value="Code">
                <td style="text-align: center;">1</td>
                <td></td>
                <td>
                  <select name="Item_Category_Id" class="form-control form-control-sm" required>
                    <option value="">Category</option>
                      <?php foreach($category as $t){?>
                        <option value="<?php echo $t->Item_Category_Id?>"><?php echo $t->Item_Category_Name?></option>
                      <?php } ?>
                  </select>
                </td>
                <td>
                  <input type="text" name="Item_Description" class="form-control form-control-sm" placeholder="Enter Item Description" required>
                </td>
               
            <td>
              <select name="Item_Unit"  class="form-control form-control-sm" required>
                <option value="">Unit</option>
                  <?php foreach($unit_master as $t){?>
                    <option value="<?php echo $t->Unit_Name?>"><?php echo $t->Unit_Name?></option>
                  <?php } ?>
              </select>
      </td>
            <td><input type="text" name="Item_Rate" class="form-control form-control-sm"></td>
            <td><input type="text" name="Item_Discount" class="form-control form-control-sm"></td>
            <td><input type="text" name="Item_Tax" class="form-control form-control-sm"></td>
            

                <td class="text-center">
                <button class="btn btn-xs btn-success"><i class='fa fa-plus'></i></button>
                </td>
            </form>
              </tr>
              <?php 
              $i = 2;
               $i = 2; foreach($item as $c){?>

              <tr>
                <td class="text-center"><?php echo $i?></td>
                <td><?php echo $c->Item_Code.$c->Item_Id?></td>
                <td><?php echo $c->Item_Category_Name?></td>
                <td><?php echo $c->Item_Description?></td>
                <td><?php echo $c->Item_Unit?></td>
                <td class="text-center"><?php echo $c->Item_Rate?></td>
                <td class="text-center"><?php echo $c->Item_Discount?></td>
                <td class="text-center"><?php echo $c->Item_Tax?></td>
               
                <td>
                  <button onclick="show_edit(<?php echo $c->Item_Id?>)" class="btn btn-xs btn-success"><i class='fa fa-edit'></i></button>
                  <button onclick="delete_item(<?php echo $c->Item_Id?>)" class="btn btn-xs btn-danger"><i class='fa fa-trash'></i></button>
                </td>
              </tr>
              <?php $i++; } ?>
               </tbody>
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
          <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="update_form" action="<?php echo base_url()?>item/update" method='post' class='center-screen'>
        <input type="hidden" name="Item_Id" id="Item_Id">


      <div class="row">
        <div class="col-sm-12">
          <label>Category Name</label>
              <select name="Item_Category_Id" id="Item_Category_Id" class="form-control form-control-sm">
                <option value="">Select Item Category</option>
                  <?php foreach($category as $t){?>
                    <option value="<?php echo $t->Item_Category_Id?>"><?php echo $t->Item_Category_Name?></option>
                  <?php } ?>
              </select>
        </div>  
        <div class="col-sm-12">
            <label>Item Name</label>
            <input type="text" name="Item_Description" id="Item_Description" class="form-control form-control-sm">
        </div>
        <div class="col-sm-12">
            <label>Unit Name</label>
              <select name="Item_Unit" id="Item_Unit" class="form-control form-control-sm">
                <option value="">Select Unit</option>
                  <?php foreach($unit_master as $t){?>
                    <option value="<?php echo $t->Unit_Name?>"><?php echo $t->Unit_Name?></option>
                  <?php } ?>
              </select>
        </div>
        <div class="col-sm-12">
          <label> Rate</label>
          <input type="text" name="Item_Rate" id="Item_Rate" class="form-control form-control-sm">
        </div>
        <div class="col-sm-12">
          <label> Discount</label>
          <input type="text" name="Item_Discount" id="Item_Discount" class="form-control form-control-sm">
        </div>
        <div class="col-sm-12">
          <label> Tax</label>
          <input type="text" name="Item_Tax" id="Item_Tax" class="form-control form-control-sm">
        </div>
        
        <div class="col-sm-12">
          <button class="btn btn-xs btn-success float-right mt-1"><i class='fa fa-save'></i> Save</button>
        </div>
      </div>

    </form>
        </div>
      </div>
    </div>
  </div>



<script>
  $("#top_heading").html("Item Master")
  function show_edit(a)
  {

 $.ajax({
            type:"post",
            url:"<?php echo base_url()?>item/edit",
            data:{"Item_Id":a},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                  $("#Item_Id").val(json_d.Item_Id);
                  $("#Item_Category_Id").val(json_d.Item_Category_Id);
                  $("#Item_Description").val(json_d.Item_Description);
                  $("#Item_Rate").val(json_d.Item_Rate);
                  $("#Item_Discount").val(json_d.Item_Discount);
                  $("#Item_Tax").val(json_d.Item_Tax);
                  $("#Item_Unit").val(json_d.Item_Unit);
                  $("#Item_Barcode").attr("src",'<?php echo base_url()?>'+json_d.Item_Barcode);
                  $("#update_model").modal("show");
            }
        })
  } 

  function delete_item(a)
  {
    let check = confirm("Are you Sure...?")
    if(check){
 $.ajax({
            type:"post",
            url:"<?php echo base_url()?>item/delete",
            data:{"Item_Id":a},
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