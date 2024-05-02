
<!-- <button id="x1x" style="float:right;padding:10px;background-color:green;color:white;font-size:20px" onclick="printdiv('print_data')">Print</button> -->
<div  id="print_data" >
<style>
table {
  border-collapse: collapse;
}

.dashboard_table th, .dashboard_table td{
    border: 1px solid;
    padding: 5px;
    text-align: center;
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
<div class="A5 dashboard_table" >

<table style="width:100%">
  <tr>
    <td colspan="5">
      <b>Bhangar wala</b>
    </td>
  </tr>
<tr>
  <td colspan="3">
   
    <div>Party Name :- <?php echo $sale_head->Customer_Name?></div>
    <div>Mobile No. :- <?php echo $sale_head->Customer_Mobile?></div>
  </td>
  <td colspan="2" valign="top">
     <div>Bill No :- <?php echo $sale_head->Sale_Id?></div>
    <div>Date :- <?php echo date("d-m-Y",strtotime($sale_head->Sale_Date))?></div>
  </td>
</tr>
<tr>
  <th>Sr No.</th>
  <th>Material Name</th>
  <th>Rate</th>
  <th>Weight</th>
  <th style="text-align: right;">Value</th>
</tr>
<?php $total=0;
$discount = 0;
$i = 1;
$bottom = 0;
foreach($sale_item as $ty){
		$x_main_item_total = $ty["Item_Rate"] * $ty["Item_Qty"];
		$x_discounts = ($x_main_item_total * $sale_head->Sale_Overall_Discount)/100;
		$x_item_dis = $x_main_item_total - ($x_discounts);
		$bottom += $x_item_dis;
	?>
	<tr>
		<td ><?php echo $i;?></td>
		<td ><?php echo $ty["Item_Discription"]?></td>
		<td ><?php echo $ty["Item_Rate"]?></td>
		<td ><?php echo $ty["Item_Qty"]?></td>
		<td style="text-align: right"><?php echo $x_main_item_total;?></td>
	</tr> 
	<?php $total += ($ty["Item_Rate"] * $ty["Item_Qty"]);
			$discount = $x_item_dis;

?>
<?php $i++; }?>
<tr>
  <td colspan="4" style="text-align:right">Total</td>
  <td style="text-align: right;"><b><?php echo round($total - (($total * $sale_head->Sale_Overall_Discount)/100))?></b></td>
</tr>
</table>

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