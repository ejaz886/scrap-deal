
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     

          	<div class="row">
	<div class="col-sm-12">
		<div class="float-left">
			<div style="border-radius: 20px;" class="bg-info p-2"><b>User Master</b></div>
		</div>
			<?php
		$user_write = "Yes";
// if(check_module_write($user_permission,16))
// {
//     $user_write = "Yes";
//     }
?>
<?php if($user_write == "Yes"){?>
		 <button class="float-right btn btn-primary ml-1" data-toggle="modal" data-target="#user_excel_upload"><i class="fa fa-add"></i> Upload Excel</button>
		<button class="float-right btn btn-success" data-toggle="modal" data-target="#add_modal"><i class="fa fa-add"></i> Create New Users</button>
		<?php }?>
	</div>
</div>

<div class="row mt-2">
	<div class="col-sm-12">
		<div class="card p-2">
		 <table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th></th>
					<th>User no</th>
				
					<th>User Name</th>
						<th>User Forget Email</th>
					<th>User Password</th>
							
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
					$this->db->where("User_Status != 'deleted'");
					$users = $this->db->get("tbl_users")->result();
					foreach($users as $t){
				?>
				<tr>
					<td>
					    <?php if($user_write == "Yes"){?>
						<i class="fa fa-edit text-success" onclick="edit_entry(<?php echo $t->User_Id?>)"></i>
						<i class="fa fa-trash text-danger" onclick="delete_entry(<?php echo $t->User_Id?>)"></i>
						<?php }?>
					</td>
					<td><?php echo $i?></td>
				
					<td><?php echo $t->User_Name?></td>
						<td><?php echo $t->User_Forget_Email?></td>
					<td><?php echo $t->User_Password?></td>
					
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
<?php if($user_write == "Yes"){?>
<div class="modal fade" id="user_excel_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add User  </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_departmenttt" action="<?php echo base_url()?>Users/user_excel_upload"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
	<div class="col-sm-12" style="margin-left:300px;">
          		    <a href="<?php echo base_url()?>assets/uploads/user.xlsx"><i class="fa fa-download"> </i>Download Excel Sample</a>
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
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_users" action="<?php echo base_url()?>users/add_users"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          		
          		<div class="col-sm-12">
          			<label>User Name</label>
          			<input type="text" name="User_Name" class="form-control" placeholder="Enter Users Name" required>
          		</div>
          			<div class="col-sm-12">
          			<label>User Forget Email</label>
          			<input type="email" name="User_Forget_Email" class="form-control" placeholder="User Forget Email " required>
          		</div>
          		<div class="col-sm-12">
          			<label>User Password</label>
          			<input type="text" name="User_Password" class="form-control" placeholder="Enter Users Password" required>
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
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Edit Users </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_form" action="<?php echo base_url()?>users/update_users"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<input type="hidden" name="User_Id" id="User_Id" class="form-control" placeholder="Enter Users Name" required>
          	<div class="row">
          			
          		<div class="col-sm-12">
          			<label>User Name</label>
          			<input type="text" name="User_Name" id="User_Name" class="form-control" placeholder="Enter Users Name" required>
          		</div>
          			<div class="col-sm-12">
          			<label>User Forget Email</label>
          			<input type="email" name="User_Forget_Email" id="User_Forget_Email" class="form-control" placeholder="Enter User Forget Email " required>
          		</div>


          		<div class="col-sm-12">
          			<label>User Password</label>
          			<input type="text" name="User_Password" id="User_Password" class="form-control" placeholder="Enter Users Password" required>
          		</div>

          		

          	</div>
            
           
            <div class="form-group pull-right"><br>
              <button class="btn btn-success btn-xs float-right"><i class="fas fa-save"></i> Update </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
  <?php $this->load->view("users_view/users_page_js");?>