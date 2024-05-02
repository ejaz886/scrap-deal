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
			<div style="border-radius: 20px;" class="bg-info p-2"><b>Voucher Master</b></div>
		</div>
		 <button class="float-right btn btn-primary ml-1" data-toggle="modal" data-target="#voucher_excel_upload"><i class="fa fa-add"></i> Upload Excel</button>
		<button class="float-right btn btn-success" data-toggle="modal" data-target="#add_modal"><i class="fa fa-add"></i> Create New Voucher</button>
	</div>
</div>

<div class="row mt-2">
	<div class="col-sm-12">
		<div class="card p-2">
		 <table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th></th>
					<th>Voucher No</th>
					<th>Voucher Name</th>
									
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
					$this->db->where("Voucher_Status != 'deleted'");
					$company = $this->db->get("tbl_voucher")->result();
					foreach($company as $t){
				?>
				<tr>
					<td>
						<i class="fa fa-edit text-success" onclick="edit_entry(<?php echo $t->Voucher_Id?>)"></i>
						<i class="fa fa-trash text-danger" onclick="delete_entry(<?php echo $t->Voucher_Id?>)"></i>
					</td>
					<td><?php echo $i?></td>
					<td><?php echo $t->Voucher_Name?></td>
					
					
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

<div class="modal fade" id="voucher_excel_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add expence </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_departmenttt" action="<?php echo base_url()?>voucher/voucher_excel_upload"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          	    	<div class="row">
          	    <div class="col-sm-12" style="margin-left:300px;">
          		    <a href="<?php echo base_url()?>assets/uploads/voucher.xlsx"><i class="fa fa-download"> </i>Download Excel Sample</a>
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
</div>


<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Voucher</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="save_department" action="<?php echo base_url()?>voucher/add_voucher"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<div class="row">
          	
          		<div class="col-sm-12">
          			<label>Voucher Name</label>
          			<input type="text" name="Voucher_Name" class="form-control" placeholder="Enter Voucher Name" required>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_form" action="<?php echo base_url()?>voucher/update_voucher"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
          	<input type="hidden" name="Voucher_Id" id="Voucher_Id" class="form-control" placeholder="Enter Voucher Name" required>
          	<div class="row">
          			
          		<div class="col-sm-12">
          			<label>Voucher Name</label>
          			<input type="text" name="Voucher_Name" id="Voucher_Name" class="form-control" placeholder="Enter Voucher Name" required>
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
     url: "<?php echo base_url()?>voucher/edit",
           data: {"Voucher_Id":id},
           dataType:"text",
           success: function(resultData)
           {
             var json_d = JSON.parse(resultData);
             $("#Voucher_Id").val(json_d.Voucher_Id);
             $("#Voucher_Name").val(json_d.Voucher_Name);

            $(".spinner").hide();
             $("#update_modal").modal("show");
        }
    });


}




function delete_entry(id)
{
    var check = confirm("Are You Sure")
    if(check){
    $.ajax({
     type: "POST",
     url: "<?php echo base_url()?>voucher/deleted_voucher",
           data: {"Voucher_Id":id},
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