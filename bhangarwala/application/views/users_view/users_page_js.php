<script>
$("#save_users").submit(function(e) {
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
     url: "<?php echo base_url()?>users/edit",
           data: {"User_Id":id},
           dataType:"text",
           success: function(resultData)
           {
             var json_d = JSON.parse(resultData);
             $("#User_Id").val(json_d.User_Id);
             $("#User_Name").val(json_d.User_Name);
               $("#User_Forget_Email").val(json_d.User_Forget_Email);
             $("#User_Password").val(json_d.User_Password);
             $("#User_Role").val(json_d.User_Role);
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
     url: "<?php echo base_url()?>users/deleted_users",
           data: {"User_Id":id},
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