<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
<div class="row">
	<div class="col-sm-12">
		<div class="float-left">
			<div style="border-radius: 20px;" class="bg-info p-2"><b>Voucher Expense</b></div>
		</div>
			<?php
 		$voucher_expences_write = "Yes";
// if(check_module_write($user_permission,19))
// {
//     $voucher_expences_write = "Yes";
//     }
?>
<?php if($voucher_expences_write == "Yes"){?>
		<button class="float-right btn btn-primary ml-1" data-toggle="modal" data-target="#expence_excel_upload"><i class="fa fa-add"></i> Upload Excel</button>
		<button class="float-right btn btn-success" data-toggle="modal" data-target="#add_modal"><i class="fa fa-add"></i> Create New Voucher Expences</button>
		<?php }?>
	</div>
</div>

<div class="row mt-2">
	<div class="col-sm-12">
		<div class="card p-2 table-responsive">
		 <table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th></th>      
					<th>Sr No</th>     
				  
        <th>Voucher Expense No</th>
        <th>Voucher Name</th>   
		<th>Voucher Expense File</th>
        <th>Voucher Date</th>
        <th>Voucher Amount</th>
        <th>Voucher Particular or details</th>
        <th>Voucher Pay To (user or bus no)</th>
        <th>Voucher Passed User</th>
        <th>Voucher Debit Credit</th>
        <th>Voucher Mode</th>
        <th>Voucher Ac No</th>
        <th>Voucher Transaction No</th>
        <th>Voucher From</th>

        
       
      </tr>
					
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=1;
					$this->db->where("a.Voucher_Status != 'deleted'");
					$this->db->join("tbl_voucher b","a.Voucher_Id = b.Voucher_Id");
					$company = $this->db->get("tbl_voucher_expences a")->result();
					foreach($company as $t){
				?>
				<tr>
					<td>
					    <?php if($voucher_expences_write == "Yes"){?>
						<i class="fa fa-edit text-success" onclick="edit_entry(<?php echo $t->Voucher_Expences_Sr_Id?>)"></i>
						<i class="fa fa-trash text-danger" onclick="delete_entry(<?php echo $t->Voucher_Expences_Sr_Id?>)"></i>
						<?php }?>
					</td>
					<td><?php echo $i?></td>
					<td><?php echo $t->Voucher_Expences_Sr_Id ?></td>
					<td><?php echo $t->Voucher_Name ?></td>
					<td>
					    <?php if(!empty($t->Voucher_Expences_File)){?>
					    <a href="<?php echo base_url()?>assets/voucher/<?php echo $t->Voucher_Expences_File?>"><i class="fa fa-eye"></i></a></td>
					<?php }?>
					<td><?php echo $t->Voucher_Expences_Date?></td>
					<td><?php echo $t->Voucher_Expences_Amount?></td>
					<td><?php echo $t->Voucher_Particular_or_details?></td>
					<td><?php echo $t->Voucher_Expences_Pay_To?></td>
					<td><?php echo $t->Voucher_Expences_Passed_User?></td>
					<td><?php echo $t->Voucher_Expences_Debit_Credit?></td>
					<td><?php echo $t->Voucher_Expences_Mode?></td>
					<td><?php echo $t->Voucher_Ac_No?></td>
					<td><?php echo $t->Voucher_Expences_Transaction_No?></td>
					<td><?php echo $t->Voucher_From?></td>
					
					
				</tr>
				<?php $i++; } ?>
			</tbody>
		</table>
	</div>
	</div>
</div>

</div>
</div>
</div>
</section>
</div>
<?php if($voucher_expences_write == "Yes"){?>
<div class="modal fade" id="expence_excel_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add Expences </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_departmenttt" action="<?php echo base_url()?>Voucher_expences/expence_excel_upload"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          	    <div class="col-sm-12" style="margin-left:300px;">
          		    <a href="<?php echo base_url()?>assets/uploads/expence.xlsx"><i class="fa fa-download"></i>Download Excel Sample</a>
          		</div>

          		<div class="col-sm-12">
          			<label>Excel </label>
          			<input type="file" name="file"  class="form-control" required>
          		</div>

          		
          	</div>
            
           
            <div class="form-group pull-right"><br>
              <button class="btn btn-success btn-xs float-right"><i class="fas fa-save"></i> Save </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Voucher Expense</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_department" action="<?php echo base_url()?>Voucher_expences/add_table"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          		<div class="col-sm-4">
          			<label>Voucher Name</label>
          			<select name="Voucher_Id" class="form-control" required>
          			<?php 
          			    $this->db->where("Voucher_Status != 'deleted'");
          			    $voucher = $this->db->get("tbl_voucher")->result();
          			    foreach($voucher as $t){
          			?>
          			<option value="<?php echo $t->Voucher_Id?>"><?php echo $t->Voucher_Name?></option>
          			<?php } ?>
          			    </select>
          			   
          		</div>
          		
          		<div class="col-sm-4">
          			<label>Expense Date</label>
          			<input type="date" name="Voucher_Expences_Date"  class="form-control" placeholder="Enter Voucher Expense Date" value="<?php echo date("Y-m-d")?>" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expense Amount</label>
          			<input type="number" name="Voucher_Expences_Amount"  class="form-control" placeholder="Enter Voucher_Expense_Amount" required>
          		</div>	

          		<div class="col-sm-4">
          			<label>Voucher Particular or details</label>
          			<input type="text" name="Voucher_Particular_or_details"  class="form-control" placeholder="Voucher_Particular_or_details" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expense Pay To</label>
          			<input type="text" name="Voucher_Expences_Pay_To"  class="form-control" placeholder="Voucher_Expense_Pay_To" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Voucher Expense Passed User</label>
          			<input type="text" name="Voucher_Expences_Passed_User"  class="form-control" placeholder="Voucher_Expense_Passed_User" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expense Type</label>
          			<select class="form-control" name="Voucher_Expences_Debit_Credit" required> 
          			<option value="">Select Type</option>
          			<option value="Debit">Debit</option>
          			<option value="Credit">Credit</option>
          			</select>
          		
          		</div>

          		<div class="col-sm-4">
          			<label>Expense Mode</label>
          		
          			<select class="form-control" name="Voucher_Expences_Mode" required> 
          			<option value="">Select Type</option>
          			<option value="Cash">Cash</option>
          			<option value="Online">Online</option>
          			</select>
          		</div>

          		

          		<div class="col-sm-4">
          			<label>Account No</label>
          			<input type="text" name="Voucher_Ac_No"  class="form-control" placeholder="Voucher_Ac_No" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expense Transaction No</label>
          			<input type="text" name="Voucher_Expences_Transaction_No"  class="form-control" placeholder="Voucher_Expense_Transaction_No" required>
          		</div>

          		<div class="col-sm-4">
          			<label>From</label>
          			<input type="text" name="Voucher_From"  class="form-control" placeholder="Voucher_From" required>
          		</div>


          		<div class="col-sm-4">
          			<label>Expense File</label>
          			<input type="file" name="Voucher_Expences_File"  class="form-control" required>
          		</div>
          		
          	</div>
            

					
					
					
           
            <div class="form-group pull-right"><br>
              <button class="btn btn-success btn-xs float-right"><i class="fas fa-save"></i> Save </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Edit Voucher expences </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_form" action="<?php echo base_url()?>voucher_expences/update_table"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<input type="hidden" name="Voucher_Expences_Sr_Id" id="Voucher_Expences_Sr_Id" class="form-control" placeholder="Enter Driver Name" required>
          	<div class="row">
          			
          	
          		
          			<div class="col-sm-4">
          			<label>Voucher Name</label>
          			<select name="Voucher_Id" id="Voucher_Id" class="form-control" required>
          			<?php 
          			    foreach($voucher as $t){
          			?>
          			<option value="<?php echo $t->Voucher_Id?>"><?php echo $t->Voucher_Name?></option>
          			<?php } ?>
          			</select>
          			   
          		</div>
          		
          		
          		<div class="col-sm-4">
          			<label>Expences Date</label>
          			<input type="date" name="Voucher_Expences_Date" id="Voucher_Expences_Date" class="form-control" placeholder="Enter Expences date" value="<?php echo date("Y-m-d")?>" required>
          		</div>

          	

          		<div class="col-sm-4">
          			<label>Expences Amount</label>
          			<input type="number" name="Voucher_Expences_Amount" id="Voucher_Expences_Amount" class="form-control" placeholder="Enter Voucher_Expences_Amount" required>
          		</div>	

          		<div class="col-sm-4">
          			<label>Particular or details</label>
          			<input type="text" name="Voucher_Particular_or_details"  id="Voucher_Particular_or_details" class="form-control" placeholder="Voucher_Particular_or_details" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expences Pay To</label>
          			<input type="text" name="Voucher_Expences_Pay_To" id="Voucher_Expences_Pay_To" class="form-control" placeholder="Voucher_Expences_Pay_To" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expences Passed User</label>
          			<input type="text" name="Voucher_Expences_Passed_User" id="Voucher_Expences_Passed_User"  class="form-control" placeholder="Voucher_Expences_Passed_User" required>
          		</div>

          		          		<div class="col-sm-4">
          			<label>Expense Type</label>
          			<select class="form-control" name="Voucher_Expences_Debit_Credit" id="Voucher_Expences_Debit_Credit" required> 
          			<option value="">Select Type</option>
          			<option value="Debit">Debit</option>
          			<option value="Credit">Credit</option>
          			</select>
          		
          		</div>

          		<div class="col-sm-4">
          			<label>Expences Mode</label>
          			<select class="form-control" name="Voucher_Expences_Mode" id="Voucher_Expences_Mode" required> 
          			<option value="">Select Type</option>
          			<option value="Cash">Cash</option>
          			<option value="Online">Online</option>
          			</select>
          		</div>

          		

          		<div class="col-sm-4">
          			<label>Account No</label>
          			<input type="text" name="Voucher_Ac_No" id="Voucher_Ac_No" class="form-control" placeholder="Voucher_Ac_No" required>
          		</div>

          		<div class="col-sm-4">
          			<label>Expences Transaction NoStudent Location</label>
          			<input type="text" name="Voucher_Expences_Transaction_No" id="Voucher_Expences_Transaction_No" class="form-control" placeholder="Voucher_Expences_Transaction_No" required>
          		</div>

          		<div class="col-sm-4">
          			<label>From</label>
          			<input type="text" name="Voucher_From" id="Voucher_From"  class="form-control" placeholder="Voucher_From" required>
          		</div>

						

          		<div class="col-sm-4">
          			<label>Expences File</label>
          			<input type="file" name="Voucher_Expences_File" id="Voucher_Expences_File" class="form-control">
          		</div>
          	</div>
            
           
            <div class="form-group pull-right"><br>
              <button class="btn btn-success btn-xs float-right"><i class="fas fa-save"></i> Save </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php }?>

  <script>
$("#save_department").submit(function(e) {
        $(".spinner").show();
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url  = form.attr("action");
    
    $.ajax({
     type: "POST",
     url: url,
           data: new FormData(this),
           processData:false,
           contentType:false,
           success: function(resultData)
           {
              var result = JSON.parse(resultData);
             if(result.response)
             {
                Toast.fire({
                    type: "success",
                    title: result.msg
                })
                setTimeout(function(){
                 location.reload();
             },3000);
            }
            else{
                Toast.fire({
                    type: "error",
                    title: result.msg
                })
            }
            $(".spinner").hide();
        }
    });  
});

$("#update_form").submit(function(e) {
        $(".spinner").show();
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url  = form.attr("action");
    
    $.ajax({
     type: "POST",
     url: url,
          data: new FormData(this),
           processData:false,
           contentType:false,
           success: function(resultData)
           {
              var result = JSON.parse(resultData);
             if(result.response)
             {
                Toast.fire({
                    type: "success",
                    title: result.msg
                })
                setTimeout(function(){
                 location.reload();
             },3000);
            }
            else{
                Toast.fire({
                    type: "error",
                    title: result.msg
                })
            }
            $(".spinner").hide();
        }
    });  
});

function edit_entry(id)
{
   


    $.ajax({
     type: "POST",
     url: "<?php echo base_url()?>voucher_expences/edit_table",
           data: {"Voucher_Expences_Sr_Id":id},
           dataType:"text",
           success: function(resultData)
           {
             var json_d = JSON.parse(resultData);
             $("#Voucher_Expences_Sr_Id").val(json_d.Voucher_Expences_Sr_Id);
             $("#Voucher_Id").val(json_d.Voucher_Id);
             $("#Voucher_Expences_Date").val(json_d.Voucher_Expences_Date);
             $("#Voucher_Expences_Amount").val(json_d.Voucher_Expences_Amount);
             $("#Voucher_Particular_or_details").val(json_d.Voucher_Particular_or_details);
             $("#Voucher_Expences_Pay_To").val(json_d.Voucher_Expences_Pay_To);
             $("#Voucher_Expences_Passed_User").val(json_d.Voucher_Expences_Passed_User);
             $("#Voucher_Expences_Debit_Credit").val(json_d.Voucher_Expences_Debit_Credit);
             $("#Voucher_Expences_Mode").val(json_d.Voucher_Expences_Mode);
             $("#Voucher_Ac_No").val(json_d.Voucher_Ac_No);
             $("#Voucher_Expences_Transaction_No").val(json_d.Voucher_Expences_Transaction_No);
             $("#Voucher_From").val(json_d.Voucher_From);
           
            $(".spinner").hide();
             $("#update_modal").modal("show");
        }
    });


}




function delete_entry(id)
{
    var check = confirm("alert")
    if(check){
    $.ajax({
     type: "POST",
     url: "<?php echo base_url()?>Voucher_expences/deleted_voucher",
           data: {"Voucher_Expences_Sr_Id":id},
           dataType:"text",
           success: function(resultData)
           {
              var result = JSON.parse(resultData);
             if(result.response)
             {
                Toast.fire({
                    type: "success",
                    title: result.msg
                })
                setTimeout(function(){
                 location.reload();
             },3000);
            }
            else{
                Toast.fire({
                    type: "error",
                    title: result.msg
                })
            }
            $(".spinner").hide();
        }
    });
}

}



</script>