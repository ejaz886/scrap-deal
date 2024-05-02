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
     url: "<?php echo base_url()?>staff/edit",
           data: {"Staff_Id":id},
           dataType:"text",
           success: function(resultData)
           {
             var json_d = JSON.parse(resultData);
             $("#Staff_Id").val(json_d.Staff_Id);
             $("#Staff_Name").val(json_d.Staff_Name);
             $("#Staff_Department_Id").val(json_d.Staff_Department_Id);
             $("#Staff_Designation_Id").val(json_d.Staff_Designation_Id);
             $("#Staff_Mobile").val(json_d.Staff_Mobile);
             $("#Staff_Email").val(json_d.Staff_Email);
             $("#Staff_Salary").val(json_d.Staff_Salary);
             $("#Staff_Joining_Date").val(json_d.Staff_Joining_Date);
             $("#Staff_Address").val(json_d.Staff_Address);
             $("#Staff_IQAMA").val(json_d.Staff_IQAMA);
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
     url: "<?php echo base_url()?>staff/deleted_staff",
           data: {"Staff_Id":id},
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