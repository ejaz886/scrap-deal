<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Purchase List</h1>
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
  

<div>
  <div class="dashboard_table">
    <form action="<?php echo base_url()?>purchase/set_bill_temp" method="post"> 
      <input type="hidden" name="Purchase_Bill_No" class="form-control form-control-sm"  value="-">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Vendor</th>
          <th> Name</th>
          <th> Mobile</th>
          <th> Date</th>
          <th> Action</th>
        </tr>  
    </thead>
    <tbody>
    <tr>
      <td >
        <select name="Vendor_Id" class="form-control form-control-sm" id="Vendor_Id"  required>
          <option value="">Select Vendor Name</option>
          <?php foreach($vendor as $c){?>
          <option value="<?php echo $c->Vendor_Id?>"><?php echo $c->Vendor_Name?></option>
        <?php } ?>

        </select>
      </td>
      <td >
        <input type="text" id="Vendor_Name" name="Vendor_Name" class="form-control form-control-sm" readonly>

      </td>
      <td >
        <input type="text" id="Vendor_Mobile" name="Vendor_Mobile" class="form-control form-control-sm"  readonly>
      </td>
     
      <td  align="center">
        <input type="date" name="Purchase_Head_Date" class="form-control form-control-sm"  value="<?php echo date("Y-m-d")?>" required >

      <td  align="center">
        <button class="btn btn-success btn-xs"><i class='fa fa-plus'></i></button>
      </td>
    </tr>
    
</table>
</form>

<table class="table table-bordered table-hover">
<tr>
  <th>Sr No</th>
  <th style="width:140px">Purchase No</th>
  <th style="width:140px">Purchase Bill No</th>
  <th>Vendor Name</th>
  <th style="width:140px">Vendor Mobile</th>
  <th style="width:140px">Date</th>
  <th style="width:80px">Action</th>
</tr>
<?php $i=1; foreach($purchase_head as $sh){?>

<tr>
  <td><?php echo $i?></td>
  <td><?php echo $sh->Purchase_Head_Id?></td>
  <td><?php echo $sh->Purchase_Bill_No?></td>
  <td><?php echo $sh->Vendor_Name?></td>
  <td><?php echo $sh->Vendor_Mobile?></td>
  <td><?php echo $sh->Purchase_Head_Date?></td>
  <td>
    <a href="<?php echo base_url()."purchase/add_new_item?Purchase_Head_Id=".$sh->Purchase_Head_Id?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
    <button onclick="delete_sale(<?php echo $sh->Purchase_Head_Id?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>

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
<script>
  $("#top_heading").html("New Purchase");
  $("#top_button").hide();
  $("#Vendor_Id").on("change",function(){
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>vendor/edit",
            data:{"Vendor_Id":$("#Vendor_Id").val()},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                  $("#Vendor_Name").val(json_d.Vendor_Name);
                  $("#Vendor_Mobile").val(json_d.Vendor_Mobile);
            }
        })
  })

  function delete_sale(a)
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>purchase/delete_sale_head",
            data:{"Sale_Id":a},
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
</script>