<?php
include "../db_Class.php";
$obj = new db_class();
$obj->MySQL();
?>


<?php
if($_POST['dis'])
{
	
$id1=$_POST['dis'];
$SQL="select visitor_mobile_no from tb_visitor_info WHERE visitor_nick_name = '$id1' ORDER BY sl DESC LIMIT 0,1"; 
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{ $data=mysql_real_escape_string($row['visitor_mobile_no']); }
	
	if($data != '')
	{  echo '<input name="iv_mobile_no" tabindex="3"  value="'.$data.'" type="text" required />'; }
	else
	{ echo '<input name="iv_mobile_no" tabindex="3" type="text" required />'; 
	}
}
?>