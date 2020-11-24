<?php
include "../db_Class.php";
//$search = $HTTP_POST_VARS['search'];
$obj = new db_class();
$obj->MySQL();

?>


<?php


if($_POST['problem'])
{
$id1=$_POST['problem'];


echo '<option selected="selected value="0">-Select Problem-</option>';
$SQL="select * from tb_sub_type where sub_type ='$id1'";
		$obj->sql($SQL);

		while($row = mysql_fetch_array($obj->result))
				{ 

$id1=$row['sub_type'];
$data=$row['sub_type'];


echo '<option value="'.$id1.'">'.$data.'</option>';
}
}
?>