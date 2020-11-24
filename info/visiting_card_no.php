<?php
include "../db_Class.php";
$obj = new db_class();
$obj->MySQL();
?>

    <option value="" selected="selected">----- Select Card -----</option>
<?php
if($_POST['dis'])
{
$id1=$_POST['dis'];

		$SQL="SELECT card_no FROM tb_visitor_card WHERE card_type='$id1' AND status != 0 ORDER by LENGTH(card_no), card_no ASC";
		$result=$obj->sql($SQL);
		while($row=mysql_fetch_array($result))
		{
			$card_no=$row['card_no'];		
			echo '<option value="'.$card_no.'">'.$card_no.'</option>';
		}

}
?>
