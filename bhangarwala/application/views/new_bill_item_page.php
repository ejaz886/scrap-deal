<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sale  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sale</li>
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

<style>
   .dashboard_table th, .dashboard_table td{
    border: 1px solid;
    padding: 5px;
  }
  .dashboard_table table{
    border: 1px solid;
    border-collapse: collapse;
    width: 100%;
  }
  .form-group{
    display: block;
  }
  .center-screen {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
} 

</style>
<div>
  <div class="dashboard_table">
    <form id="update_form" action="<?php echo base_url()?>new_bill/add_new_item_qty" method="post"> 
  <table>
    <tr>
      <td colspan="2">
        <div><b>Temp Bill No :  <?php if(!empty($_GET["Sale_Id"])){echo $_GET['Sale_Id'];}?></b></div>
       
        <input type="hidden" name="Sale_Id" id="Sale_Id" value="<?php if(!empty($_GET["Sale_Id"])){echo $_GET['Sale_Id'];}?>" readonly>
      </td>
      
      <td colspan="3">
        <div><b>Customer Name : <?php echo $sale_head->Customer_Name?></b></div>

      </td>
      <td colspan="4">
        <div>
          <b>Customer Mobile : <?php echo $sale_head->Customer_Mobile?></b>s
        </div>
      </td>
      <td colspan="2">
        <div><b>Bill Date : <?php echo date("d-m-Y",strtotime($sale_head->Sale_Date))?></b></div>
      </td>
    </tr>
    <tr>
      
      <th colspan="2">Item Category</th>
      <th colspan="6">Item</th>
      <th >Rate</th>
      <th >Qty</th>

    </tr>
    <tr>
     
      <td colspan="2">
        
        <select class="form-control form-control-sm" style="width: 100%;" id="item_category_id">
          <option value="">Select Item Category Name</option>
          <?php foreach($item_category as $c){?>
          <option value="<?php echo $c->Item_Category_Id?>"><?php echo $c->Item_Category_Name?></option>
        <?php } ?>
        </select>
      </td>
      <td colspan="6">
         
        <select class="form-control form-control-sm" name="Item_Id"  style="width: 100%;" id="item_id">
          <option value="">Select Item Name</option>
        </select>
      </td>
      <td  align="center" style="width:90px">
        <input type="text" name="Item_Rate" id="Rate" class="form-control form-control-sm" value="0">
      </td>
      </td>
      <td align="center" style="width:90px">
        <input type="text" name="Item_Qty" class="form-control form-control-sm" value="1">
      </td>
      <td align="center">
        <button class="btn btn-xs btn-success"><i class='fa fa-plus'></i></button>
      </td>
    </tr>
    <tr>
      <th style="width:60px;" class="text-center">Sr No</th>
      
      <th align="left" colspan="2">Category Name</th>
      <th align="left" colspan="3">Material</th>
      <th> Unit</th>
      <th> Rate</th>
      <th> Qty</th>
      
      <th>Value</th>
      <th>Action</th>
    </tr>

    <?php $i=1; 
    $total = 0;
    $item_discount_total = 0;
    $item_tax_total = 0;
    foreach($sale_item as $si){
$item_value = ($si->Item_Rate * $si->Item_Qty);
$item_discount_total +=(($item_value * $si->Item_Discount)/100);
$item_tax_total += (($item_value * $si->Item_Tax)/100);
$total += ($item_value);


?>
<tr>
      <td align="center"><?php echo $i?></td>
     
      <td align="left" colspan="2"><?php echo $si->Item_Category_Name?></td>
      <td align="left" colspan="3"><?php echo $si->Item_Discription?></td>
      <td align="center"><?php echo $si->Item_Unit?></td>
      <td align="center"><?php echo $si->Item_Rate?></td>
      <td align="center"><?php echo $si->Item_Qty?></td>
      <td align="right"><?php echo $si->Item_Rate * $si->Item_Qty;?></td>
      <td align="center"><button type='button' class="btn btn-xs btn-danger" onclick="delete_items(<?php echo $si->Sale_Item_Id?>)"><i class='fa fa-trash'></i></button></td>
    </tr>

    <?php $i++; } ?>
    
     
    <tr style="font-weight: bold;">
      <td colspan="9" align="right">Grand Total</td>
      <td align="right">
        <?php $grand = (($total+$item_tax_total)-$item_discount_total);
      $temp_x_dis =  (($grand * $sale_head->Sale_Overall_Discount)/100);
      
    ?>
        <?php echo ($grand - $temp_x_dis);?>
        <input type="hidden" name="grand_total" value="<?php echo ($grand - $temp_x_dis);?>">
      </td>
      <td></td>
    </tr>

    <tr style="font-weight: bold;">
    <td colspan="9" align="right"></td>
    <td class="text-center">
    <button class="btn btn-xs btn-success" onclick="save_bill()"><i class="fa fa-save"></i> Save</button></td>
    <td class="text-center">
    <button class="btn btn-xs btn-danger" onclick="delete_sale()"><i class="fa fa-trash"></i> Cancel</button>
    </td>
    </tr>
    
</table>
</form>
</div>    
</div>
    
</div>
</div>
</div>
    </section>
<script>
  $("#top_button").hide();
  $("#top_heading").html("New Bill Items");

  $("#barcode_scan").on("change",function(){
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/add_by_barcode",
            data:{"Sale_Id":$("#Sale_Id").val(),"Item_Id":$("#barcode_scan").val(),"Item_Qty":'1'},
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
                     },1000);
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
  })

  $("#Sale_Overall_Discount").on("change",function(){
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/update_overall_discount",
            data:{"Sale_Id":$("#Sale_Id").val(),"Sale_Overall_Discount":$("#Sale_Overall_Discount").val()},
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
                     },1000);
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
  })
function delete_items(a)
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/delete_item_sale",
            data:{"Sale_Item_Id":a},
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
                     },1000);
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

  $("#item_category_id").on("change",function(){
     $("#item_id").empty()
     $("#item_id").append($("<option></option>").attr("value","").text("Select Name"));

     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/get_item",
            data:{"Item_Category_Id":$("#item_category_id").val()},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                for(var i = 0 ; json_d.length > i; i++)
                {
                    $("#item_id").append($("<option></option>").attr("value",json_d[i].Item_Id).text(json_d[i].Item_Description));
                } 
            }
                })
        })


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
                     },1000);
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


  function delete_sale()
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/delete_sale_head",
            data:{"Sale_Id":$("#Sale_Id").val()},
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
                         window.open("<?php echo base_url()?>new_bill","_self");
                     },1000);
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


function save_bill()
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/save_bill_final",
            data:{"Sale_Id":$("#Sale_Id").val(),"final_amount":<?php echo ($grand - $temp_x_dis);?>},
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
                         window.open("<?php echo base_url()?>old_bill/print_old_bill?Sale_Id="+json_d.Sale_Id+"&final_amount="+json_d.Grand_total,"_blank");
                         window.open("<?php echo base_url()?>new_bill?Sale_Id=0&page_name=sale_page","_self");

                     },1000);
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

$("#item_id").on("change",function(){
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/get_item_price",
            data:{"Item_Id":$("#item_id").val()},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                $("#Rate").val(json_d.Item_Rate);  
            }
          })

})
</script>