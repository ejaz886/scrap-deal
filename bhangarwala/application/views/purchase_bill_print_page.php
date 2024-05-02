
<!-- <button id="x1x" style="float:right;padding:10px;background-color:green;color:white;font-size:20px" onclick="printdiv('print_data')">Print</button> -->
<?php 

 $this->db->where("Purchase_Head_Id",$this->input->get("id"));
        $purchase_head = $this->db->get("purchase_head")->row();


        $this->db->where("Purchase_Head_Id",$this->input->get("id"));
        $purchase_item = $this->db->get("purchase_item")->result();


?>
<div  id="print_data" >
<style>
table {
  border-collapse: collapse;
}

table, th, td {

}
@page { margin: 10 }
body { margin: 10 }
.sheet {
  margin: 0;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
  page-break-after: always;
}

/** Paper sizes **/
body.A3           .sheet { width: 297mm; height: 419mm }
body.A3.landscape .sheet { width: 420mm; height: 296mm }
body.A4           .sheet { width: 210mm; height: 296mm }
body.A4.landscape .sheet { width: 297mm; height: 209mm }
body.A5           .sheet { width: 148mm; height: 209mm }
body.A5.landscape .sheet { width: 210mm; height: 147mm }

/** Padding area **/
.sheet.padding-10mm { padding: 10mm }
.sheet.padding-15mm { padding: 15mm }
.sheet.padding-20mm { padding: 20mm }
.sheet.padding-25mm { padding: 25mm }

/** For screen preview **/
@media screen {
  body { background: #e0e0e0 }
  .sheet {
    background: white;
    box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
    margin: 5mm;
  }
}

/** Fix for Chrome issue #273306 **/
@media print {
           body.A3.landscape { width: 420mm }
  body.A3, body.A4.landscape { width: 297mm }
  body.A4, body.A5.landscape { width: 210mm }
  body.A5                    { width: 148mm }
}
.dashboard_table th, .dashboard_table td{
    border: 1px solid;
    padding: 5px;
  }
  .dashboard_table table{
    border: 1px solid;
    border-collapse: collapse;
    width: 100%;
  }
  .form-group{
    display: block;
  }
  .center-screen {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
} 
</style>
<div class="A5" >
 <div class="dashboard_table">
     
  <table>
    <tr>
      <td colspan="7">
        <center>
          <div><b>Name Of Shop</b></div>
          <div><b>Address</b></div>
           </center>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <div><b>Purchase No</b> : <?php echo $purchase_head->Purchase_Head_Id?></div>
       <div><b>Bill Date</b> : <?php echo date("d-m-Y",strtotime($purchase_head->Purchase_Head_Date))?></div>
      </td>
      


      
      <td colspan="5">
        <div><b>Party Name</b> : <?php echo $purchase_head->Vendor_Name?></div>
        <div><b>Mobile</b> :<?php echo $purchase_head->Vendor_Mobile?></div>
        
</td>

        

      
  

    </tr>
   
    <tr>
      <th>Sr No</th>
      <th align="left">Category Name</th>
      <th align="left">Item Desc</th>
      <th>Item Unit</th>
      <th style="text-align:center"> Rate</th>
      <th style="text-align:center"> Qty</th>
      
      <th style="text-align:right">Value</th>
     
    </tr>

    <?php $i=1; 
    $total = 0;
    $item_discount_total = 0;
    $item_tax_total = 0;
    foreach($purchase_item as $si){
$item_value = ($si->Purchase_Rate * $si->Purchase_Qty);
$item_discount_total +=(($item_value * $si->Purchase_Discount)/100);
$item_tax_total += (($item_value * $si->Purchase_Tax)/100);
$total += ($item_value);


?>
<tr>
      <td align="center"><?php echo $i?></td>
      <td align="left"><?php echo $si->Item_Category_Name?></td>
      <td align="left"><?php echo $si->Item_Description?></td>
      <td align="center"><?php echo $si->Item_Unit?></td>
      <td align="center"><?php echo $si->Purchase_Rate?></td>
      <td align="center"><?php echo $si->Purchase_Qty?></td>
     
      <td align="right"><?php echo $si->Purchase_Rate * $si->Purchase_Qty;?></td>
      </tr>

    <?php $i++; } ?>
   

    
    <tr style="font-weight: bold;">
      <td colspan="6" align="right">Grand Total</td>
      <td align="right">
        <?php 
        $grand = (($total+$item_tax_total)-$item_discount_total);
        echo $grand ;?>
      </td>
     
    </tr>

    
    
</table>
</form>
</div>  
</div>
<script>	 
//setInterval(printdiv('print_data'), 300);
printdiv('print_data');
function printdiv(x)
{  

    var printContents = document.getElementById(x).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;
     window.print();

     document.body.innerHTML = originalContents;

}
</script>