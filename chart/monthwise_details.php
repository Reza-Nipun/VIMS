   <?php 
 	include "../db_Class.php";
  	$obj = new db_class();
	$obj->MySQL(); 	
	
	
	
	$date_month=$_GET['chk'];
	//$year1=$_REQUEST['chk1'];

	

	
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

table.bottomBorder { border-collapse:collapse; }
table.bottomBorder td, table.bottomBorder th { border-bottom:1px dotted black;padding:1px;       
font-size:11px;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;

}

table.bottomBorder tr, table.bottomBorder tr { border:1px dotted black;padding:2px; }
</style> 


<meta charset="UTF-8" />
	<script type="text/javascript" src="../jquery-1.9.0.js"></script>
	<script type="text/javascript">
	$(function(){
		$('button').click(function(){
			var url='data:application/vnd.ms-excel,' + encodeURIComponent($('#tableWrap').html()) 
			location.href=url
			return false
		})
	})
	</script>



<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=650,left=560,top=90,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>


</head>

<body>

<div id="tableWrap" align="center"> 
<hr />
<span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:20px">Month Wise Report</span>
<hr />



<table width="1300px" border="0" cellspacing="0" cellpadding="0" class="bottomBorder">
  <tr bgcolor="#BFBFBF">
    <th scope="col">Serial</th>
    <th scope="col">Visitor Name</th>
    <th scope="col">Visitor Type</th>
    <th scope="col">Company Name</th>
    <th scope="col">Reason of Visit</th>
    <th scope="col" width="130px">Mobile No.</th>
    <th scope="col">Address</th>
    <th scope="col">Visiting Unit</th>
    <th scope="col">Contact Person</th>
    <th scope="col">Remarks</th>
    <th scope="col">In Time</th>
    <th scope="col">Out Time</th>
    <?php if($rule==2) { ?>
    <th scope="col">Operator</th>
	<?php } ?>
  </tr>
  
   <?php
   
  
	$SQL1="SELECT * FROM tb_visitor_info WHERE date_month='$date_month'"; 
	$results1 = $obj->sql($SQL1);
	$sl=1;
	while($row = mysql_fetch_array($results1))
	{
		$in_time=$row['visitor_in_time'];
		$in_time= date("F j, Y, g:i a", strtotime($in_time));		
	
	
	
		$out_time=$row['visitor_out_time'];
		
		if($out_time!=NULL)
		{
		//$out_time=$row['visitor_out_time'];
		//$out_time= date("F j, Y, g:i a", $out_time);
		$out_time= date("F j, Y, g:i a", strtotime($out_time));
		}
		else
		{
		//$out_time=$row['visitor_out_time'];
		$out_time='' ;
		}
	 ?>
  
  <tr>
    <td bgcolor="#E6E6E6" align="center"><?php echo $sl; ?>.</td>
    
    <td><?php echo $row['visitor_name']?></td>
    
 <td bgcolor="#E6E6E6" align="left">
 <?php echo $row['visitor_type'] ; ?> ?></td>
 <td align="left"><?php echo $row['visitor_company_name']?></td>
 <td bgcolor="#E6E6E6" align="left"><?php echo $row['visit_reason']?></td>
    
    <td align="left" width="130px"> <?php echo $row['visitor_mobile_no']?> </td>
    <td bgcolor="#E6E6E6"><?php echo $row['visitor_address']?></td>
    <td ><?php echo $row['visiting_unit']?></td>
    
    <td bgcolor="#E6E6E6"><?php echo $row['contact_person'] ; ?></td>
    <td><?php echo $row['remarks']?></td>
    <td bgcolor="#E6E6E6"><?php echo $in_time ?></td>
     <td><?php echo $out_time ?></td>
     
     
     <?php
	 $uid=$row['user_id'] ;
	 $sql="SELECT name FROM  tb_admin where id='$uid'";
	 $results = $obj->sql($sql);
	 while($rowz = mysql_fetch_array($results))
	 {
		 $name=$rowz['name'];
	 }
	  if($rule==2)
		{
		 ?>
    
	 
	 <td bgcolor="#E6E6E6"><?php echo $name ; ?></td>
     <?php } ?>
    
  </tr>
  
  <?php $sl++ ; } ?>
</table>







<!--<table width="98%" border="0" cellspacing="0" cellpadding="0" class="bottomBorder">
  <tr bgcolor="#BFBFBF">
    <th scope="col">Serial</th>
    <th scope="col">Visitor Name</th>
    <th scope="col">Visitor Type</th>
    <th scope="col" width="130px"> &nbsp; &nbsp; &nbsp; Mobile No.    &nbsp; &nbsp; &nbsp;</th>
    <th scope="col">Address</th>
    <th scope="col">Visiting Unit</th>
    <th scope="col">Contact Person</th>
    <th scope="col">In Time</th>
    <th scope="col">Out Time</th>
    <?php// if($rule==2) { ?>
    <th scope="col">Operator</th>
	<?php //} ?>
  </tr>
  
   <?php
   /* $SQL1="SELECT * FROM tb_visitor_info WHERE date_month='$date_month'";    //table name
	$results1 = $obj->sql($SQL1);
	$sl=1;
	while($row = mysql_fetch_array($results1))
	{
		$in_time=$row['visitor_in_time'];
		$in_time= date("F j, Y, g:i a", strtotime($in_time));		
	
	
	
		$out_time=$row['visitor_out_time'];
		
		if($out_time!=NULL)
		{
		//$out_time=$row['visitor_out_time'];
		//$out_time= date("F j, Y, g:i a", $out_time);
		$out_time= date("F j, Y, g:i a", strtotime($out_time));
		}
		else
		{
		//$out_time=$row['visitor_out_time'];
		$out_time='' ;
		}*/
	 ?>
  
  <tr>
    <td bgcolor="#E6E6E6"><?php //echo $sl; ?>.</td>
    
    <td><?php// echo $row['visitor_name']?></td>
    
 <td bgcolor="#E6E6E6" align="left">
 <?php //echo $row['visitor_type'] ; ?> - <?php //echo $row['sub_type'] ; ?></td>
    
    <td align="left" width="130px"> <?php //echo $row['visitor_mobile_no']?> </td>
    <td bgcolor="#E6E6E6"><?php// echo $row['visitor_address']?></td>
    <td ><?php //echo $row['visiting_unit']?></td>
    
    <td bgcolor="#E6E6E6"><?php// echo $row['contact_person'] ; ?></td>
    <td ><?php //echo $in_time ?></td>
     <td bgcolor="#E6E6E6"><?php //echo $out_time ?></td>
     
     
     <?php
	 /*$uid=$row['user_id'] ;
	 $sql="SELECT name FROM  tb_admin where id='$uid'";
	 $results = $obj->sql($sql);
	 while($rowz = mysql_fetch_array($results))
	 {
		 $name=$rowz['name'];
	 }
	  if($rule==2)
		{*/
		 ?>
    
	 
	 <td><?php //echo $name ; ?></td>
     <?php// } ?>
    
  </tr>
  
  <?php //$sl++ ; } ?>
</table>-->




<br />
</div>
<div align="center">
       <form id="printMe" name="printMe"> 
  <button style="cursor:pointer">Click to download as Excel</button> 
</form>
</div>

</body>
</html>