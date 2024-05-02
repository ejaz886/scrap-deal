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
            <table class="table table-bordered table-hover">
              <tr>
                <th style="width: 80px;text-align: center;">Sr No</th>
                <th style="width: 80px;text-align: center;">Temp Bill</th>
                <th>Customer Name</th>
                <th style="width: 180px;text-align: left;">Mobile</th>
                <th style="width: 60px;text-align: left;">Discount</th>
                <th style="width: 120px;text-align: left;">Date</th>
                <th style="width: 100px;text-align: center;">Action</th>
              </tr>
              <tr>
                <form id="save_form" action="<?php echo base_url()?>new_bill/set_bill_temp" method='post' class='center-screen'>
                <td style="text-align: center;">1</td>
                <td></td>
                <td>
                <select class="select2 form-control form-control-sm" name="Customer_Id"  id="customer_id">
                  <option value="">Select Customer Name</option>
                  <?php foreach($customer as $c){?>
                  <option value="<?php echo $c->Customer_Id?>"><?php echo $c->Customer_Name?></option>
                <?php } ?>
              </select>
                </td>
                <td>
                <input type="text" id="Customer_Name" name="Customer_Name" class="form-control form-control-sm" readonly>
              </td>
                <td colspan="2">
                  <input type="text" id="Customer_Mobile" name="Customer_Mobile" class="form-control form-control-sm" readonly>
                </td>
                <td class="text-center">
                <button class="btn btn-xs btn-success"><i class='fa fa-plus'></i></button>
                </td>
              </tr>
              <?php 
              $i = 2;
              foreach($sale_head as $sh){?>

                <tr>
                  <th><?php echo $i?></th>
                  <th><?php echo $sh->Sale_Id?></th>
                  <th><?php echo $sh->Customer_Name?></th>
                  <th><?php echo $sh->Customer_Mobile?></th>
                  <th><?php echo $sh->Sale_Overall_Discount?></th>
                  <th><?php echo date("d-m-Y",strtotime($sh->Sale_Date))?></th>
                  <th>
                    <a href="<?php echo base_url()."new_bill/add_new_item?Sale_Id=".$sh->Sale_Id?>" class='btn btn-xs btn-success'><i class="fa fa-edit"></i></a>
                    <button class='btn btn-xs btn-danger' onclick="delete_sale(<?php echo $sh->Sale_Id?>)"><i class="fa fa-trash"></i></button>
                
                  </th>
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


 
<script>
  $("#top_heading").html("New Bill");
  $("#top_button").hide();
  $("#customer_id").on("change",function(){
     $.ajax({
            type:"post",
            url:"<?php echo base_url()?>customer/edit",
            data:{"Customer_Id":$("#customer_id").val()},
            dataType:"text",
            success:function(resultData)
            {
                var json_d = JSON.parse(resultData);
                  $("#Customer_Name").val(json_d.Customer_Name);
                  $("#Customer_Mobile").val(json_d.Customer_Mobile);
            }
        })
  })

  function delete_sale(a)
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>new_bill/delete_sale_head",
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