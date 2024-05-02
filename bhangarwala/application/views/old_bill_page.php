<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sale List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sale List</li>
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
  <th style="width: 100px;text-align: center;">Bill No</th>
  <th>Customer Name</th>
  <th style="width: 150px;text-align: left;">Mobile</th>
  <th style="width: 80px;text-align: center;">Discount</th>
  <th style="width: 150px;text-align: left;">Date</th>
  <th style="width: 80px;text-align: center;">Action</th>
</tr>
</thead>
<tbody>
<?php $i=1; foreach($sale_head as $sh){?>

<tr>
  <th style="text-align: center;"><?php echo $i?></th>
  <th style="text-align: center;"><?php echo $sh->Sale_Id?></th>
  <th><?php echo $sh->Customer_Name?></th>
  <th><?php echo $sh->Customer_Mobile?></th>
  <th><?php echo $sh->Sale_Overall_Discount?></th>
  <th><?php echo date("d-m-Y",strtotime($sh->Sale_Date))?></th>
  <th style="text-align: center;">
    <a href="<?php echo base_url()."old_bill/add_new_item?page_name=sale_old_page&Sale_Id=".$sh->Sale_Id?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
  </th>
</tr>
  <?php $i++; } ?>
</tbody>
</table>
  

</div>
</div>
</div>
</section>
<script>
  $("#top_heading").html("Old Bill");
  $("#top_button").hide();
  

  function delete_sale(a)
{
  var check = confirm("Are You Sure....??")
  if(check){
  $.ajax({
            type:"post",
            url:"<?php echo base_url()?>old_bill/delete_sale_head",
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