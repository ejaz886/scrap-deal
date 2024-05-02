
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Purchase Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase List</li>
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
    <form id="update_form" action="<?php echo base_url()?>purchase/add_new_item_qty" method="post"> 
  <table>
    <tr>
      <td colspan="2">
        <div><b>Purchase No</b></div>
        <div><b>Purchase Bill No</b></div>
      </td>
      <td>
      <div><?php if(!empty($_GET["Purchase_Head_Id"])){echo $_GET['Purchase_Head_Id'];}?></div>
      <div><?php echo $purchase_head->Purchase_Bill_No?></div>
      <input type="hidden" name="Purchase_Head_Id" id="Purchase_Head_Id" value="<?php if(!empty($_GET["Purchase_Head_Id"])){echo $_GET['Purchase_Head_Id'];}?>" readonly>
      </td> 


      
      <td colspan="2">
        <div><b>Vendor Name</b></div>
        <div><b>Mobile</b></div>
</td>
<td colspan="3">
        <div><?php echo $purchase_head->Vendor_Name?></div>
        <div><?php echo $purchase_head->Vendor_Mobile?></div>

      </td>
      
      <td>
        <div><b>Bill Date</b></div>
</td>
<td style="width: 90px;">
        <div><?php echo date("d-m-Y",strtotime($purchase_head->Purchase_Head_Date))?></div>
      </td>
    </tr>
    <tr>
    
      <td colspan="2">
        Item Category
        <select  style="width: 100%;" id="item_category_id" class="form-control form-control-sm">
          <option value="">Select Item Category Name</option>
          <?php foreach($item_category as $c){?>
          <option value="<?php echo $c->Item_Category_Id?>"><?php echo $c->Item_Category_Name?></option>
        <?php } ?>
        </select>
      </td>
      <td colspan="3">
         Item
        <select class="form-control form-control-sm" name="Item_Id" style="width: 100%;" id="item_id">
          <option value="">Select Item Name</option>
        </select>
      </td>
      <td  style='width:100px' >
        <div>Rate</div>
        <input type="text" name="Purchase_Rate" class="form-control form-control-sm" id="rates" value="0">
      </td>
      <td style='width:100px' >
        <div>Qty</div>
        <input type="text" name="Purchase_Qty" class="form-control form-control-sm" value="1">
      </td>
       <td  style='width:100px'  >
        <div>Discount</div>
        <input type="text" name="Purchase_Discount" class="form-control form-control-sm" value="0">
      </td>
      <td style='width:100px'  >
        <div>Tax</div>
        <input type="text" name="Purchase_Tax" class="form-control form-control-sm" value="0">
      </td>
      <td align="center">
        <button class="btn btn-xs btn-success"><i class='fa fa-plus'></i></button>
      </td>
    </tr>
    <tr>
      <th>Sr No</th>
      <th align="left">Category Name</th>
      <th align="left">Item Desc</th>
      <th>Item Unit</th>
      <th style="text-align:center"> Rate</th>
      <th style="text-align:center"> Qty</th>
      <th style="text-align:center"> Discount</th>
      <th style="text-align:center">Tax</th>
      <th style="text-align:right">Value</th>
      <th style="text-align:center">Action</th>
    </tr>

    <?php $i=1; 
    $total = 0;
    $item_discount_total = 0;
    $item_tax_total = 0;
    foreach($purchase_item as $si){
$item_value = ($si->Purchase_Rate * $si->Purchase_Qty);
$item_discount_total +=(($item_value * $si->Purchase_Discount)/100);
$item_tax_total += (($item_value * $si->Purchase_Tax)/100);
$total += ($item_value);


?>
<tr>
      <td align="center"><?php echo $i?></td>
      <td align="left"><?php echo $si->Item_Category_Name?></td>
      <td align="left"><?php echo $si->Item_Description?></td>
      <td align="center"><?php echo $si->Item_Unit?></td>
      <td align="center"><?php echo $si->Purchase_Rate?></td>
      <td align="center"><?php echo $si->Purchase_Qty?></td>
      <td align="center"><?php echo $si->Purchase_Discount?></td>
      <td align="center"> <?php echo $si->Purchase_Tax?></td>
      <td align="right"><?php echo $si->Purchase_Rate * $si->Purchase_Qty;?></td>
      <td align="center"><button type='button' class="btn btn-xs btn-danger" onclick="delete_items(<?php echo $si->Purchase_Item_Id?>)"><i class='fa fa-trash'></i></button></td>
    </tr>

    <?php $i++; } ?>
    <tr style="font-weight: bold;">
      <td colspan="8" align="right">Sub Total</td>
      <td align="right"><?php echo $total?></td>
      <td></td>

    </tr> 

    <tr style="font-weight: bold;">
      <td colspan="8" align="right">Item Discount</td>
      <td align="right"><?php echo $item_discount_total?></td>
      <td></td>

    </tr> 
    <tr style="font-weight: bold;">
      <td colspan="8" align="right">Tax</td>
      <td align="right"><?php echo $item_tax_total?></td>
      <td></td>

    </tr>
    <tr style="font-weight: bold;">
      <td colspan="8" align="right">Grand Total</td>
      <td align="right">
        <?php 
        $grand = (($total+$item_tax_total)-$item_discount_total);
        echo $grand ;?>
      </td>
      <td></td>
    </tr>

    <tr style="font-weight: bold;">
    <td colspan="9" align="right"> <button type="button" class="btn btn-xs btn-success float-right" onclick="save_print()"><i class="fa fa-trash"></i> Save/Print</button></td>
   
    <td colspan="2" align="center">
   
    <button class="btn btn-xs btn-danger " type="button" onclick="delete_sale()"><i class="fa fa-trash"></i> Cancel</button>
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


function delete_items(a)
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>purchase/delete_item_sale",
            data:{"Purchase_Item_Id":a},
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
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/get_item",
            data:{"Item_Category_Id":$("#item_category_id").val()},
            dataType:"text",
            success:function(resultData)
            {
              $("#item_id").append($("<option></option>").attr("value","").text("Select Item"));
                var json_d = JSON.parse(resultData);
                for(var i = 0 ; json_d.length > i; i++)
                {
                    $("#item_id").append($("<option></option>").attr("value",json_d[i].Item_Id).text(json_d[i].Item_Description));
                } 
                 
            }
                })
        })

 $("#item_id").on("change",function(){
     $("#rates").val("0")
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/get_item_price",
            data:{"Item_Id":$("#item_id").val()},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                
                    $("#rates").val(json_d.Item_Rate);
               
                 
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
            url:"<?php echo base_url()?>purchase/delete_sale_head",
            data:{"Purchase_Head_Id":$("#Purchase_Head_Id").val()},
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
                         window.open("<?php echo base_url()?>purchase","_self");
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
  function save_print()
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>purchase/save_print_sale_head",
            data:{"Purchase_Head_Id":$("#Purchase_Head_Id").val()},
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
                         window.open("<?php echo base_url()?>purchase/print_purchase_bill?id="+json_d.bill_id,"_blank");
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

</script>