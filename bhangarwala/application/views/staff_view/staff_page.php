<div class="content-wrapper">
  

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        
          	<div class="row">
	<div class="col-sm-12">
		<div class="float-left">
			<div style="border-radius: 20px;" class="bg-info p-2"><b>Staff Master</b></div>
		</div>
			<?php
		$staff_write = "Yes";
// if(check_module_write($user_permission,10))
// {
//     $staff_write = "Yes";
//     }
?>
<?php if($staff_write == "Yes"){?>
		
		<button class="float-right btn btn-success" data-toggle="modal" data-target="#add_modal"><i class="fa fa-add"></i> Create New Staff</button>
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
					
					<th>Staff Name</th>
					
					<th>Mobile</th>
					<th>Email</th>
					<th>Salary</th>
					
					<th>Join Date</th>
					<th>Address</th>
				
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
					$this->db->where("Staff_Status != 'deleted'");
					
					$staff = $this->db->get("tbl_staff")->result();
					foreach($staff as $t){
				?>
				<tr>
					<td>
					     <?php if($staff_write == "Yes"){?>
						<i class="fa fa-edit text-success" onclick="edit_entry(<?php echo $t->Staff_Id?>)"></i>
						<i class="fa fa-trash text-danger" onclick="delete_entry(<?php echo $t->Staff_Id?>)"></i>
						
							<?php }?>
					</td>
					<td><?php echo $i?></td>
				
					<td><?php echo $t->Staff_Name?></td>
					
					<td><?php echo $t->Staff_Mobile?></td>
					<td><?php echo $t->Staff_Email?></td>
					<td><?php echo $t->Staff_Salary?></td>
					
					<td><?php echo $t->Staff_Joining_Date?></td>
					<td><?php echo $t->Staff_Address?></td>
				
					
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
<div class="modal fade" id="staff_excel_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add Staff </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_departmenttt" action="<?php echo base_url()?>staff/staff_excel_upload"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          	    <div class="col-sm-12" style="margin-left:300px;">
          		    <a href="<?php echo base_url()?>assets/uploads/staff.xlsx"><i class="fa fa-download"> </i>Download Excel Sample</a>
          		</div>

          		<div class="col-sm-12" >
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
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add Employee </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_department" action="<?php echo base_url()?>staff/add_staff"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">

          		

          		<div class="col-sm-8">
          			<label> Name</label>
          			<input type="text" name="Staff_Name" class="form-control" placeholder="Enter Name" required>
          		</div>          	
          		<div class="col-sm-4">
          			<label> Mobile</label>
          			<input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" name="Staff_Mobile"  class="form-control" placeholder="Enter Mobile" required>
          		</div>

          		<div class="col-sm-4">
          			<label> Email</label>
          			<input type="email" name="Staff_Email"  class="form-control" placeholder="Enter Email" required>
          		</div>
							<div class="col-sm-4">
          			<label> Salary</label>
          			<input type="text" name="Staff_Salary"  class="form-control" placeholder="Enter Salary" required>
          		</div>	
          		
          		<div class="col-sm-4">
          			<label> Join Date</label>
          			<input type="date" name="Staff_Joining_Date"  class="form-control" value="<?php echo date("Y-m-d")?>" required>
          		</div>

          		
							
							<div class="col-sm-12">
          			<label>Address</label>
          			<textarea type="text" name="Staff_Address"  class="form-control" placeholder="Enter Address" required></textarea>
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
  <?php $this->load->view("staff_view/staff_page_js");?>