<?php
include "../db_Class.php";
$obj = new db_class();
$obj->MySQL();
?>


<?php
if($_POST['dis'])
{
$id1=$_POST['dis'];
$SQL="select visitor_name from tb_visitor_info WHERE visitor_mobile_no = '$id1' ORDER BY sl DESC LIMIT 0,1"; 
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
		$data=mysql_real_escape_string($row['visitor_name']);
		  //echo '<option value="'.$data.'">'.$data.'</option>';
		 //echo '<input name="visitor_name" type="text" value="'.$data.'" required/>';
		 
	echo '<input name="visitor_name" id="visitor_name" type="text" tabindex="2" value="'.$data.'" required autofocus />';
 	}
	
	if($data == '')
	{ 
	echo '<input name="visitor_name" id="visitor_name" type="text" tabindex="2" placeholder="Visitor Name" required autofocus/>';
	}
}
?>