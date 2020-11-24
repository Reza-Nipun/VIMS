

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
          
          
          
     <form id="form1" name="form1" method="post" action="save_survey.php?ID=<?php echo $user; ?>">
			  <p align="center" class="style6"><strong><u>Survey of  Computer Use by IUBAT Students</u></strong></p>
			  <p>&nbsp;</p>
			  <p>Student Id :<span id="sprytextfield1"><?php echo $user; ?>
			  <table width="100%" border="1">
                <tr>
                  <td width="80%"><div align="left"><span class="style14">1.What       is the extent of your computer use on an average day?</span></div></td>
                  <td width="20%"><label>
                    <div align="right">
                      <select name="q1" id="q1">
                        <option>Select any</option>
                        <option value="No use">No use</option>
                        <option value="30 mins">30 mins</option>
                        <option value="1 hr">1 hr</option>
                        <option value="2 hrs">2 hrs</option>
                        <option value="3 hrs">3 hrs</option>
                        <option value="4+ hrs">4+ hrs</option>
                      </select>
                      </div>
                  </label></td>
                </tr>
              </table>
			  <p>&nbsp;</p>
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
  <!--*********************************/footer**************************************-->
</div>
<!--*********************************/wrapper**************************************-->
<?php require "../require/ftjs.php"; ?>
</body>
</html>