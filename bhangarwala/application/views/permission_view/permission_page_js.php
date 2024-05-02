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
     url: "<?php echo base_url()?>userpermission/edit",
           data: {"Permission_Id":id},
           dataType:"text",
           success: function(resultData)
           {
             var json_d = JSON.parse(resultData);
             $("#Permission_Id").val(json_d.Permission_Id);
             $("#User_Id").val(json_d.User_Id);
              $("#Module_Id").val(json_d.Module_Id);
              $("#Permission_Read").val(json_d.Permission_Read);
              $("#Permission_Write").val(json_d.Permission_Write);
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
     url: "<?php echo base_url()?>userpermission/deleted_designation",
           data: {"Permission_Id":id},
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

$("#read-all").click(function () {
     $('.read-all').not(this).prop('checked', this.checked);
 });
 $("#write-all").click(function () {
     $('.write-all').not(this).prop('checked', this.checked);
 });
</script>