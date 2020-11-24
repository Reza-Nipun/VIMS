<?php
include "../db_Class.php";
//$search = $HTTP_POST_VARS['search'];
$obj = new db_class();
$obj->MySQL();

?>


<?php

if($_POST['dis'])
{
$id=$_POST['dis'];

echo '<option selected="selected" value="">-Select Problem-</option>';

$SQL="select * from tb_sub_type where type ='$id' group by sub_type";
		$result=$obj->sql($SQL);

		while($row = mysql_fetch_array($result))
				{ 

$id=$row['sub_type'];
$data=$row['sub_type'];


echo '<option value="'.$id.'">'.$data.'</option>';
}
}
?>