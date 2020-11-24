<?php
include "../db_Class.php";
//$search = $HTTP_POST_VARS['search'];
$obj = new db_class();
$obj->MySQL();
session_start();
// Authentication check
$u=$_SESSION["user1"];
//$u= $_GET['ID'];				
		$SQL="select * from tb_email where student_id= '$u'";
		$obj->sql($SQL);
		while($row = mysql_fetch_array($obj->result))
				{  
					$student_id= $row['student_id'];
					$student_name=$row['student_name'];
					$department= $row['student_dept'];
					}
	
	if ($u==NULL)
{
session_destroy();
header("location:../index.php");
}
else
{

$_SESSION['user']=$_SESSION['user1'];
unset($_SESSION['user1']);
}
	
// if user name and password right then go to step1_1.php else go to step2.php 

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
<?php require("std_info_right.php"); ?>
                
                <h3>Previous Results</h3>
               <p class="style3"><a href="s1.php">First page</a></p>            </div>
          </div>   
          <div class="content"> 
          
          
          
    <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h2> Term Result: Fall 2010 </h2>
			  
			  <p> </p>
			  
			  <table width="598" border="1">
                <tr bgcolor="#CCCCCC" >
                  <td width="82"><strong>Course ID </strong></td>
				  <td width="347"><strong>Course Name </strong></td>
				   <td width="69"><strong>Credit</strong></td>
                  <td width="72"><strong>Grade</strong></td>
                </tr>
				
                       <?php
				
				$SQL="select g.course_id,g.course_grade, c.credit,c.course_name from grade_fall10 g, course_list c where ID_no= '$u' and c.course_id=g.course_id";
  
	
	$obj->sql($SQL);
	
	while($row = mysql_fetch_array($obj->result))
	{    
 ?>
		
				<tr>
                  <td><?php echo $row['course_id']?></td>
				  <td><?php echo $row['course_name']?></td>
				  <td><?php echo $row['credit']?></td>
                  <td><?php echo $row['course_grade']?></td>
				</tr>
        	<?php
	}
?>
		      </table>
			  <p>&nbsp;</p>
			
			 <p align="right">
			    <?php
			
			
			$SQL="select * from grade_fall10 g, course_list c where g.ID_no= '$u' and g.course_id=c.course_id ";
  			$obj->sql($SQL);
		$credit=0;
		$grade_point=0;
				while($row = mysql_fetch_array($obj->result))
					{
					
					$credit= trim($row['credit']);
					$credit_point= $credit_point+trim($row['credit']);  
					
					$grade= trim($row['course_grade']);
					
					//$grade_point=0;
					switch($grade)
					
					{
					
					Case 'A': $value=4;
							   break;
							   
					Case 'B': $value=3;
							   break;
					Case 'C': $value=2;
							   break;
					Case 'D': $value=1;
							   break;
					Case 'F': $value=0;
							   break;
					Case 'I': $value=0;
							   break;
					Case 'W': $value=0;
							   break;
					default:   $value=0;
								break;		   		   		   		   		   		   
							   }
					
					$grade_point= $grade_point+ ($credit * $value);
					$value=0;
					}
			//echo "credit...".$credit_point;
			//echo "grade point...".$grade_point;
			if ($grade_point!=0)
			{
			$sgpa= $grade_point/$credit_point;	
			?><strong> <?php echo "SGPA= ".round($sgpa,2); ?></strong><?php
			}
			else
			{
			echo "No SGPA at the moment";
			
			}
			//echo "grade point= credit * grade ";
			//echo "SGPA= total grade point/ total credit";
			//session_destroy();
			?>
		      </p>
			
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