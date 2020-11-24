<?php
include "../db_Class.php";
$obj = new db_class();
$obj->MySQL();
?>


<?php
if($_POST['dis'])
{
$id1=$_POST['dis'];
$SQL="select visitor_company_name from tb_visitor_info WHERE visitor_mobile_no = '$id1' ORDER BY sl DESC LIMIT 0,1"; 
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
		$data=mysql_real_escape_string($row['visitor_company_name']);
		echo '<input name="visitor_company_name" type="text" tabindex="3" value="'.$data.'" required/>';
 	}
	
	if($data == '')
	{ 
		echo '<input name="visitor_company_name" type="text" tabindex="3" required/>';
	}
}
?>