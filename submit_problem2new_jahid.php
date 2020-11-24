  <?php 
 	include "db_Class.php";
  	$obj = new db_class();
	$obj->MySQL(); 	
	?>



<html>
<head>
<title>City - Landline Suggest</title>
<script type="text/javascript">
var CityLineCodes = [
					 
 <?php			 
	$SQL="select * from tb_visitor_info group by visitor_mobile_no"; 
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
  $employee_code=$row['visitor_mobile_no'];
  $employee_name=$row['visitor_name'];
  $gender=mysql_real_escape_string($row['visitor_address']);
  $unit_des=$row['contact_person'];
  $department=$row['contact_person_dept'];
  $designation=$row['visitor_in_time'];


  echo "'" ;
  echo $employee_code ;
 
  echo '~' ;
  echo $employee_name ;
  
  echo '~' ;
  echo $gender ;
  
  echo '~' ;
  echo $unit_des ;
  

  
  echo "'" ;
  echo ',' ;  
	}
  ?>					 

  'Georgia~678~BANGLADESH~BANGLADESH~BANGLADESH~BANGLADES'	// NOTE: no comma after last entry
];

function stdCode() {
  var city = document.registration.city.value;
  for (var i=0; i<CityLineCodes.length; i++) {
    tarr =CityLineCodes[i].split('~');
    if (city == tarr[0]) { 
	
	document.registration.land.value = tarr[1]; 
	document.registration.land1.value = tarr[2]; 
	document.registration.land2.value = tarr[3]; 


		
	break; 	            }
	
	
    else { 
	document.registration.land.value = '';
	document.registration.land1.value = '';
	document.registration.land2.value = '';



		 }
  }
}
</script>
</head>
<body>
<!-- form name='registration' method=post action="#" onSubmit="return ValidateForm()" -->
<form name='registration' method=post action="#" onSubmit="return false">
<table width="350" border="0" height="101">
 <tr>
  <td height="31" align="left"><font color="#c40062"><strong>ID :<br></strong></font></td>
  <td align="center"> <input type="text" list="visitor_mobile_no" placeholder="01700000000" name="city" onblur=stdCode(this.value,1,0)  />

 <datalist id="visitor_mobile_no">
 <?php $SQL="select visitor_mobile_no from tb_visitor_info group by visitor_mobile_no order by visitor_mobile_no ASC"; 
 $results = $obj->sql($SQL);
 while($row1 = mysql_fetch_array($results))
 {
 ?>
 <option value="<?php echo $row1['visitor_mobile_no'] ; ?>">  
 <?php } ?>    
 </datalist></td>
 </tr>
 <tr>
  <td height="30" align="left"><font color="#c40062"><strong>Name :<br></strong></font></td>
  <td align="center"><span title="Enter your Landline Number">
    <input type="text" name="land" maxlength="10">
  </span></td>
 </tr>
  <tr>
  <td height="30" align="left"><font color="#c40062"><strong>Gender :<br></strong></font></td>
  <td align="center"><span title="Enter your Landline Number"><input type="text" name="land1" id="land1" maxlength="10"></span></td>
 </tr>
   <tr>
  <td height="30" align="left"><font color="#c40062"><strong>Unit:</strong></font></td>
  <td align="center"><span title="Enter your Landline Number"><input type="text" name="land2" maxlength="10" id="land2"></span></td>
 </tr>
   <tr>
  <td height="30" align="left"><font color="#c40062"><strong>Department :<br></strong></font></td>
  <td align="center"><span title="Enter your Landline Number"><input type="text" name="land3" maxlength="10" id="land3"></span></td>
 </tr>
   <tr>
     <td height="30" align="left"><font color="#c40062"><strong>Designation:<br></strong></font></td>
     <td align="center"><span title="Enter your Landline Number"><label id="land4"></label><input type="text" name="landt" maxlength="10" id="land4" readonly></span></td>
   </tr>

   <tr>
     <td height="32" align="right"><input type="submit" value="Send"></td>
     <td><input type="reset" value="Clear" ></td>
   </tr>
</table>
</form>


</body>
</html>