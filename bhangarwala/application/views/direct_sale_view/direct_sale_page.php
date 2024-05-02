<div class="content-wrapper">
  

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        
          	<div class="row">
	<div class="col-sm-12">
		<div class="float-left">
			<div style="border-radius: 20px;" class="bg-info p-2"><b>Direct Sale</b></div>
		</div>
			<?php
		$staff_write = "Yes";
// if(check_module_write($user_permission,10))
// {
//     $staff_write = "Yes";
//     }
?>
<?php if($staff_write == "Yes"){?>
		
		<button class="float-right btn btn-success" data-toggle="modal" data-target="#add_modal"><i class="fas fa-add"></i> New Direct Sale </button>
			<?php } ?>
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
					
					<th>Date</th>
					
					<th>Purchase Party</th>
					<th>Sale Party</th>
					<th>Material</th>
					<th>Weight</th>
					<th>Rate</th>
					
					<th>Total Amount</th>
					<th>Brokerage %</th>
					<th>Brokerage amount</th>
					<th>Trnsport Fare</th>
					<th>Other Expenses</th>
					<th>Invoice No</th>
					<th>Basic Amount</th>
					<th>Commission %</th>
					<th>commission Amount</th>
					<th>gst %</th>
					<th>gst Amount</th>
					<th>Gross Amount</th>
					<th>Remark</th>
				
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
										
					$staff = $this->db->get("tbl_direct_sale")->result();
					foreach($staff as $t){
				?>
				<tr>
					<td>
					     <?php if($staff_write == "Yes"){?>
						<i class="fa fa-edit text-success" onclick="edit_entry(<?php echo $t->Direct_Sale_Id?>)"></i>
						<i class="fa fa-trash text-danger" onclick="delete_entry(<?php echo $t->Direct_Sale_Id?>)"></i>
						
							<?php }?>
					</td>
					<td><?php echo $i?></td>
				
					<td><?php echo $t->Create_Date?></td>
					
					<td><?php echo $t->Purchase_Party_Id?></td>
					<td><?php echo $t->Sale_Party_Id?></td>
					<td><?php echo $t->Material_Id?></td>
					
					<td><?php echo $t->Weight?></td>
					<td><?php echo $t->Rate?></td>
					<td><?php echo $t->Rate *  $t->Weight?></td>
					<td><?php echo $t->Brokerage_Percent?></td>
					<td><?php echo $t->Brokerage_Amount?></td>
					<td><?php echo $t->Transport_Fare?></td>
					<td><?php echo $t->Other_Expense?></td>
					<td><?php echo $t->Invoice_Number?></td>
					<td><?php echo $t->Rate *  $t->Weight?></td>
					<td><?php echo $t->Commision_Percentage?></td>
					<td><?php echo $t->Commision?></td>
					<td><?php echo $t->Gst_Percentage?></td>
					<td><?php echo $t->Gst_Amount?></td>
					<td><?php echo $t->Gst_Amount?></td>
					<td><?php echo $t->Remarks?></td>
				
				
					
				</tr>
				<?php $i++; } ?>
			</tbody>
		</table>
	</div>
	</div>
</div>
</div>
</section>
</div>

<?php if($staff_write == "Yes"){?>

  
<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add Direct Sale </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_form" action="<?php echo base_url()?>direct_sale/add"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">

          		

          		<div class="col-sm-4">
          			<label> Date</label>
          			<input type="date" name="Create_Date" class="form-control" placeholder="Enter Name" value="<?php echo date("Y-m-d")?>" required>
          		</div>          	
          		<div class="col-sm-4">
          			<label> Purchase Party</label>
          			  <select name="Purchase_Party_Id" class="form-control form-control-sm" id="Vendor_Id"  required>
          <option value="">Select Vendor Name</option>
          <?php 
         // $this->db->where("Vendor_Status","Active");
          $vendor = $this->db->get("vendor")->result();
          foreach($vendor as $c){?>
          <option value="<?php echo $c->Vendor_Id?>"><?php echo $c->Vendor_Name?></option>
        <?php } ?>

        </select>
          		</div>

          		<div class="col-sm-4">
          			<label> Sale Party</label>
          			<select name="Sale_Party_Id" class="form-control form-control-sm" id="Vendor_Id"  required>
          <option value="">Select Sale Party Name</option>
          <?php 
          $this->db->where("Customer_Status","Active");
          $vendor = $this->db->get("customer")->result();
          foreach($vendor as $c){?>
          <option value="<?php echo $c->Customer_Id?>"><?php echo $c->Customer_Name?></option>
        <?php } ?>

        </select>
          		</div>
							<div class="col-sm-4">
          			<label> Material</label>
          		<select name="Material_Id" class="form-control form-control-sm" id="Vendor_Id"  required>
          <option value="">Select Material Name</option>
          <?php 
          $this->db->where("Item_Status","Active");
          $vendor = $this->db->get("item")->result();
          foreach($vendor as $c){?>
          <option value="<?php echo $c->Item_Id?>"><?php echo $c->Item_Description?></option>
        <?php } ?>

        </select>
          		</div>	
          		
          		<div class="col-sm-4">
          			<label> Weight</label>
          			<input type="text" name="Weight"  class="form-control" placeholder="Enter Weight"  required>
          		</div>	
          		<div class="col-sm-4">
          			<label> Rate</label>
          			<input type="text" name="Rate"  class="form-control"  placeholder="Enter Material Rate" required>
          		</div>

          		<div class="col-sm-4">
          			<label> Brokerage %</label>
          			<input type="text" name="Brokerage_Percent"  class="form-control" placeholder="Enter Brokerage %" required>
          		</div>

          		<div class="col-sm-4">
          			<label> Transport Fare</label>
          			<input type="text" name="Transport_Fare"  class="form-control" placeholder="Enter Trasport Fare" required>
          		</div>

          			<div class="col-sm-4">
          			<label> Other Expenses</label>
          			<input type="text" name="Other_Expense"  class="form-control" placeholder="Enter Other Exenses" required>
          		</div>

							<div class="col-sm-4">
          			<label> Invoice Number</label>
          			<input type="text" name="Invoice_Number"  class="form-control" placeholder="Enter Invoice No" required>
          		</div>

							<div class="col-sm-4">
          			<label> Commision %</label>
          			<input type="text" name="Commision_Percentage"  class="form-control" placeholder="Enter Commision %" required>
          		</div>
<div class="col-sm-4">
          			<label> Gst %</label>
          			<input type="text" name="Gst_Percentage"  class="form-control" placeholder="Enter Gst %" value="18" required>
          		</div>

          		
							
							<div class="col-sm-12">
          			<label>Remark</label>
          			<textarea type="text" name="Remarks"  class="form-control" placeholder="Enter Remark" required></textarea>
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
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Edit Employee </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_form" action="<?php echo base_url()?>staff/update_staff"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<input type="hidden" name="Staff_Id" id="Staff_Id" class="form-control" placeholder="Enter Company Name" required>
          	<div class="row">

          		
          		<div class="col-sm-8">
          			<label>Staff Name</label>
          			<input type="text" name="Staff_Name" id="Staff_Name" class="form-control" placeholder="Enter Staff Name" required>
          		</div>

          		<div class="col-sm-4">
          			<label> Mobile</label>
          			<input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" name="Staff_Mobile" id="Staff_Mobile"  class="form-control" placeholder="Enter Mobile" required>
          		</div>

          		<div class="col-sm-4">
          			<label> Email</label>
          			<input type="email" name="Staff_Email" id="Staff_Email"  class="form-control" placeholder="Enter Email" required>
          		</div>
							<div class="col-sm-4">
          			<label> Salary</label>
          			<input type="number" name="Staff_Salary" id="Staff_Salary"  class="form-control" placeholder="Enter Salary" required>
          		</div>	
          		
          		<div class="col-sm-4">
          			<label> Join Date</label>
          			<input type="date" name="Staff_Joining_Date" id="Staff_Joining_Date"  class="form-control" value="<?php echo date("Y-m-d")?>" required>
          		</div>

          		
							
							<div class="col-sm-12">
          			<label>Address</label>
          			<textarea type="text" name="Staff_Address" id="Staff_Address"  class="form-control" placeholder="Enter Address" required></textarea>
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
  $("#top_heading").html("Direct Sale")

 //  function show_edit(a)
 //  {

 // $.ajax({
 //            type:"post",
 //            url:"<?php echo base_url()?>category/edit",
 //            data:{"Item_Category_Id":a},
 //            dataType:"text",
 //            success:function(resultData)
 //            {
 //                var json_d = JSON.parse(resultData);
 //                  $("#Item_Category_Id").val(json_d.Item_Category_Id);
 //                  $("#Item_Category_Name").val(json_d.Item_Category_Name);
 //                  $("#update_model").modal("show");


 //            }
 //        })
 //  } 

 //  function delete_item(a)
 //  {
 //    let check = confirm("Are You Sure ....?")
 //    if(check){
 // $.ajax({
 //            type:"post",
 //            url:"<?php echo base_url()?>category/delete",
 //            data:{"Item_Category_Id":a},
 //            dataType:"text",
 //            success:function(resultData)
 //            {
 //                var json_d = JSON.parse(resultData);

 //               if(json_d.response)
 //                     {
                      
 //                        Toast.fire({
 //                            type: "success",
 //                            title: json_d.msg
 //                        })
 //                        setTimeout(function(){
 //                         location.reload();
 //                     },3000);
 //                    }
 //                    else{
 //                        Toast.fire({
 //                            type: "error",
 //                            title: json_d.msg
 //                        })
 //                    }
 //                    $(".loader").hide();
 //            }
 //        })
 //      }
 //  }

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