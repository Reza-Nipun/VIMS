
<?php

$u=$_POST['user'];
if($u=='')
{
header("location:index.php");
}

$user=$u ;

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
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
          <!-- save_survey.php?ID=<?php / echo $user; ?> -->
          
          
     <form id="survey" name="form1" method="post" action="">
			  <h2>IUBAT Students Information			 </h2>
		     <table width="86%" border="1" cellspacing="1" cellpadding="1" style="color:#000; font color:#000">
		       <tr>
    <th width="45%" scope="col">Name</th>
    <th width="55%" scope="col"><input name="FirstName" type="text" required autofocus/></th>
  </tr>
  <tr>
    <th scope="row">ID</th>
    <td><input name="LastName" type="text" required/></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><input name="Text3" type="email" placeholder="name@domain.com"/></td>
  </tr>
  <tr>
    <th scope="row">Date Of Birth</th>
    <td><input name="Text4" type="date"></td>
  </tr>
  <tr>
    <th scope="row">Mobile</th>
    <td><input name="LastName" type="text" required/></td>
  </tr>
  <tr>
    <th scope="row">Blood Group</th>
    <td><input name="Text5" type="text" list="departments">
      <datalist id="departments">
        <option value="Accounting"></option>
        <option value="Engineering"></option>
        <option value="Human Resources"></option>
        <option value="Sales"></option>
        <option value="Support"></option>
        </datalist></td>
  </tr>
  <tr>
    <th scope="row">Address 1</th>
    <td><input name="FirstName2" type="text" required autofocus/></td>
  </tr>
  <tr>
    <th scope="row">P.o/Thana</th>
    <td><input name="FirstName3" type="text" required autofocus/></td>
  </tr>
  <tr>
    <th scope="row"> district </th>
    <td><input name="FirstName4" type="text" required autofocus/></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input id="Submit" type="submit" name="Submit" value="Submit" /></td>
  </tr>
</table>

			</form>    
          
          
          </div>

        </div>
        </div>
        <div class="round_bottom"></div>
      
  </div>
  
  
  <!--*********************************/round**************************************-->
  <!--*********************************/footer**************************************-->
</div>
<!--*********************************/wrapper**************************************-->
<?php require "../require/ftjs.php"; ?>
</body>
</html>