<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Account Ledger List</h1>  
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ledger List</li>
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
    <form id="save_form" action="<?php echo base_url()?>accounting/add" method="post"> 
  <table>
    <tr>
      <th>Customer</th>
      <th style="width:140px">Payment Type</th>
      <th style="width:140px">Particuler</th>
      <th style="width:80px">Debit</th>
      <th style="width:80px">credit</th>
      <th style="width:100px">Date</th>
      <th style="width:70px">Action</th>
    </tr>
    <tr>
      
      <td >
        
        <select  class="form-control form-control-sm"  name="Customer_Id" id="select_customer" style="width: 100%;" id="Vendor_Id" required>
          <option value="">Select Customer Name</option>
          <?php foreach($vendor as $c){?>
          <option value="<?php echo $c->Vendor_Id?>"><?php echo $c->Vendor_Name?></option>
        <?php } ?>

        </select>
      </td> 
      <td >
        <select name="Accounting_Type" required  class="form-control form-control-sm" >
          <option value="">Select Type</option>
          <option value="BANK">BANK</option>
          <option value="CASH">CASH</option>
          <option value="SALE">SALE</option>
          <option value="PURCHASE">PURCHASE</option>
          <option value="EXTRA">EXTRA</option>
          <option value="SALARY">SALARY</option>
        </select>

      </td>
      <td >
        <input type="text" name="Accounting_Particular" class="form-control form-control-sm" required>
      </td>
      <td >
        <input type="text" name="Debit"   class="form-control form-control-sm" >
      </td>
      <td >
        <input type="text" name="Credit"   class="form-control form-control-sm" >
      </td>
      <td  >
        <input type="date" name="Date" value="<?php echo date("Y-m-d")?>" required   class="form-control form-control-sm" >

      <td  align="center">
        <button class="btn btn-xs btn-success"><i class='fa fa-plus' ></i></button>
      </td>
    </tr>
    <tr>
        <td colspan="6">
            <div class="row">
                <div class="col-sm-6">
                                <input type="date" id="start_date" class="form-control form-control-sm" value="<?php echo date("Y-m-d")?>">
                </div>
                <div class="col-sm-6">
                                <input type="date" id="end_date" class="form-control form-control-sm"  value="<?php echo date("Y-m-d")?>">
                </div>
            </div>


        </td>
        <td>
            <button type="button" class="btn btn-xs btn-primary" onclick="get_search_date()">Search</button>
        </td>
        
    </tr>
</table>
</form>
</div>
          <div class="dashboard_table mt-1">
<table width="100%"> 
<tr>
  <th>Sr No</th>
  <th>Date</th>
  <th>Type Pay</th>
  <th>Customer Name</th>
  <th>Customer Mobile</th>
  <th>Note / Particular</th>
  <th>Debit</th>
  <th>Credit</th>
  <th>Balance</th>
 <!--  <th>Action</th> -->
</tr>
<tbody id="t_body">
<?php $balance = 0;
 $t_debit = 0;
 $t_credit = 0;
$i=1; foreach($accounting as $sh){
$balance += $sh->Credit;
$balance -= $sh->Debit;


$t_debit += $sh->Debit;
$t_credit += $sh->Credit;
  ?>

<tr>
  <td><?php echo $i?></td>
  <td><?php echo date("d-m-Y",strtotime($sh->Date))?></td>
  <td><?php echo $sh->Accounting_Type?></td>
  <td><?php echo $sh->Vendor_Name?></td>
  <td><?php echo $sh->Vendor_Mobile?></td>
  <td><?php echo $sh->Accounting_Particular?></td>
  <td><?php echo $sh->Debit?></td>
  <td><?php echo $sh->Credit?></td>
  <td><?php echo $balance?></td>
  
  <!-- <td style="text-align:center">
    <button onclick="delete_sale(<?php echo $sh->Accouting_Id?>)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>

  </th> -->
</tr>
  <?php $i++; } ?>
  <tr>
    <th colspan="6"></th>
    <th align="center"><?php echo $t_debit?></th>
    <th align="center"><?php echo $t_credit?></th>
    <th align="center"><?php echo $t_credit - $t_debit?></th>
  </tr>
</tbody>
</table>
</div>    
</div>

</div>
</div>
</div>
</section>
<script>
  $("#top_heading").html("Accounting");
  $("#top_button").hide();
  

  function delete_sale(a)
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>accounting/delete",
            data:{"Accouting_Id":a},
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

$("#select_customer").on("change",function(){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>accounting/get_details",
            data:{"Customer_Id":$("#select_customer").val()},
            dataType:"text",
            success:function(resultData)
            {

              $("#t_body").empty();
              $("#t_body").html(resultData);



                 $(".loader").hide();
            }
        })
})

function get_search_date()
{
    $.ajax({
            type:"post",
            url:"<?php echo base_url()?>accounting/get_details",
            data:{"Customer_Id":$("#select_customer").val(),"start_date":$("#start_date").val(),"end_date":$("#end_date").val()},
            dataType:"text",
            success:function(resultData)
            {

              $("#t_body").empty();
              $("#t_body").html(resultData);



                 $(".loader").hide();
            }
        })
}
</script>