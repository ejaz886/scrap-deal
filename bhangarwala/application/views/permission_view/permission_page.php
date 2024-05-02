<div class="content-wrapper">
    

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

<div class="row">
	<div class="col-sm-12">
		<div class="float-left">
			<div style="border-radius: 20px;" class="bg-info p-2"><b>User Permission Master</b></div>
		</div>
		
		<button class="float-right btn btn-success" data-toggle="modal" data-target="#add_modal"><i class="fa fa-add"></i> Create new User Permission</button>
	</div>
</div>


<div class="row mt-2">
	<div class="col-sm-12">
	    <div class="card p-2">
	    <form action="<?php echo base_url()?>userpermission" method="get">
	        
	        <div class="row">
	            <div class="col-sm-11">
	                <label>User Name</label>
	                
	                <select name="User_Id" class="form-control" required>
	                <option value="">Select User</option>
	                <?php 
	                $this->db->where("User_Status","Active");
	                $result = $this->db->get("tbl_users")->result();
	                foreach($result as $t){ ?>
	                <option value="<?php echo $t->User_Id?>" <?php if(!empty($_GET["User_Id"]) && $_GET["User_Id"] == $t->User_Id){echo "selected";}?>><?php echo $t->User_Name?></option>
	                <?php  } ?>
	
	                </select>
	            </div>
	            <div class="col-sm-1">
	                	<button class="btn btn-success" style="margin-top:32px"><i class="fa fa-search"></i> Search</button>
	            </div>
	        </div>
	        
	    </form>
		</div>
	
	</div>
</div>

<div class="row mt-2">
	<div class="col-sm-12">
		<div class="card p-2">
		 <table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th></th>
					<th>Sr No</th>
					<th>User Id</th>
					<th>Module Id</th>
					<th>Permission Read</th>
					<th>Permission Write</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				if(!empty($_GET["User_Id"])){
				$i=1;
					$this->db->where("a.User_Status","Active");
					$this->db->where("a.User_Id",$_GET["User_Id"]);
					$this->db->join("tbl_users b","a.User_Id= b.User_Id");
					$this->db->join("tbl_module c","a.Module_Id= c.Module_Id");
					$designation = $this->db->get("tbl_user_permission a")->result();
					
				
					foreach($designation as $t){
				?>
				<tr>
					<td>
						<i class="fa fa-edit text-success" onclick="edit_entry(<?php echo $t->Permission_Id?>)"></i>
						<i class="fa fa-trash text-danger" onclick="delete_entry(<?php echo $t->Permission_Id?>)"></i>
					</td> 
					<td><?php echo $i?></td>
					<td><?php echo $t->User_Name?></td>
					<td><?php echo $t->Module_Name?></td>
						<td><?php echo $t->Permission_Read?></td>
					<td><?php echo $t->Permission_Write?></td>
					
					
				</tr>
				<?php $i++; } }?>
			</tbody>
		</table>
	</div>
	</div>
</div>
</div>
</section>
<div class="modal fade" id="designation_excel_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add designation </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_departmenttt" action="<?php echo base_url()?>designation/designation_excel_upload"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">

          		<div class="col-sm-4">
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
          <h5 class="modal-title" id="exampleModalLabel">Add User for permission </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_department" action="<?php echo base_url()?>Userpermission/add_designation"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          	    
          	    	<div class="col-sm-12">
          			<label>User</label>
          				<select name="User_Id"  class="form-control select2" placeholder="User_Id" required>
          				    <option value="">Select User</option>
          			<?php 
          			$this->db->where("User_Status != 'deleted'");
          			$class_table = $this->db->get("tbl_users")->result();
          			foreach($class_table as $y){
          			?>
          		<option value="<?php echo $y->User_Id?>"><?php echo $y->User_Name?></option>
          		<?php } ?>
          	</select>
          		</div>
          		<div class="col-sm-12" >
          			<label>Module</label>
          		    <table class="table table-bordered">
          		        <thead>
          		            <tr>
          		                <th>Module Name</th>
          		                <th><input type="checkbox" id="read-all"> Read </th>
          		                <th><input type="checkbox" id="write-all"> Write </th>
          		            </tr>
          		        </thead>
          		        <tbody>

          		       
          			    	
          			<?php 
          			$this->db->where("Module_Status != 'deleted'");
          			$class_table = $this->db->get("tbl_module")->result();
          			foreach($class_table as $y){
          			?>
          		          <tr>
          		                <td><?php echo $y->Module_Name?></td>
          		                <td>
          		                    <input type="hidden" name="module[]" value="<?php echo $y->Module_Id?>">
          		                    <input type="checkbox" class="read-all" name="module_read_<?php echo $y->Module_Id?>" value="Yes">
          		                </td>
          		                <td>
          		                    <input type="checkbox" class="write-all" name="module_write_<?php echo $y->Module_Id?>" value="Yes">
          		                </td>
          		            </tr>
          		        
          		
          		<?php } ?>
          	 </tbody>
          		    </table>
          	
          		</div>
          	</div>
          	
            
           
            <div class="form-group pull-right">
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
          <h5 class="modal-title" id="exampleModalLabel">Edit User Permission </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_form" action="<?php echo base_url()?>Userpermission/update_designation"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<input type="hidden" name="Permission_Id" id="Permission_Id" class="form-control" placeholder="Permission_Id" required>
          	<div class="row">
          	    <div class="col-sm-12">
          	    <label for="cars"> Read</label>
          	    <select name="Permission_Read" class="form-control" id="Permission_Read">
          	        <option value="Yes">Yes</option>
          	        <option value="No">No</option>
          	        </select>
          	     </div>
          	    <div class="col-sm-12">
          	    <label for="cars"> Write</label>
          	    <select name="Permission_Write" class="form-control" id="Permission_Write">
          	        <option value="Yes">Yes</option> 
          	        <option value="No">No</option>
          	        </select>
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