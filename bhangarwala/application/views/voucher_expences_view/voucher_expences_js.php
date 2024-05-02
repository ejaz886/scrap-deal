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