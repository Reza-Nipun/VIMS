
<?php
include "../db_Class.php";
$obj = new db_class();
$obj->MySQL();

//$id=$_POST['id'];



$name= $_POST['name'];
$stu_id=$_POST['stu_id'];
$email=$_POST['email'];
$stu_dept=$_POST['stu_dept'];
$birthday_day=$_POST['birthday_day'];
$birthday_month=$_POST['birthday_month'];
$birthday_year=$_POST['birthday_year'];
$mobile=$_POST['mobile'];
$blood=$_POST['blood'];
$address1=$_POST['address1'];
$district=$_POST['district'];
$thana=$_POST['thana'];
$address2=$_POST['address2'];
$district1=$_POST['district1'];
$thana1=$_POST['thana1'];


$SQL="INSERT INTO `tb_stu_info` (`sl`, `student_name`, `student_id`, `student_email`, `student_dept`, `birthday_day`, `birthday_month`, `birthday_year`, `mobile`, `blood`, `address1`, `district`, `thana`,`address2`, `district1`, `thana1`) VALUES ('', '$name', '$stu_id', '$email', '$stu_dept', '$birthday_day', '$birthday_month', '$birthday_year', '$mobile', '$blood', '$address1', '$district', '$thana', '$address2', '$district1', '$thana1')";

$id='';

$obj->sql($SQL);
		$SQL="Delete from `tb_stu_info` where student_id=''";	
		$obj->sql($SQL);




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<?php require "../require/head.php"; ?>

</head>
<body class="home blog">
<!--*********************************wrapper**************************************-->
<div id="wrapper" class="">
  <!--*********************************header**************************************-->
  <?php require "../require/header.php"; ?>
  <!--*********************************/header**************************************-->
  <!--*********************************SexySlider **************************************-->
  <?php // require "require/sexyslider.php"; ?>
  <!--*********************************/SexySlider **************************************-->
  <!--*********************************result**************************************-->

  <div class="blog_round_top">
        <div class="round_middle">
        <div class="box">

          <div class="sidebar">
              <div class="widget">
                <h2>Student Details</h2>
				<?php include("std_info_right.php"); ?>
                
                   </div>
          </div>   
          <div class="content"> 
          
          
          
 <form id="form1" name="form1" method="post" action="survey.php">
<h2>Thank You to complete the Information!<br/>
<span style="color:#F00"><a href="../index.php" style="color:#F00; cursor:crosshair">Back>></a></span>
</h2>
			</form>    

          </div>

        </div>
        </div>
        <div class="round_bottom"></div>
      
  </div>
  <!-- ********************************/result ************************************-->
  <?php require "require/round1.php"; ?>
  <?php // require "../require/round3.php"; ?>
  <!--*********************************/round**************************************-->
  <!--*********************************footer**************************************-->
  <?php require "../require/footer.php"; ?>
  <!--*********************************/footer*************************************-->
</div>
<!--*********************************/wrapper**************************************-->
<?php require "../require/ftjs.php"; ?>
</body>
</html>