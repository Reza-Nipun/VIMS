
<?php

	require_once('comon.php');
	session_start(); 
	$un=$_SESSION['username'];
	include "db_Class.php";
  	$obj = new db_class();
	$obj->MySQL();
	
	$SQL="select * from tb_admin where user_name='$un' and project='VIMS'";    //table name
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{ 
		$id=$row['id'];
		$name=$row['name'];
		$area=$row['area'];
	}
	
	$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));
	$date=$datex->format('m-d-Y');


   if (isset($_POST['Submit']))
 {	 
	$visitor_type = $_POST['visitor_type'];	
	$visitor_name=$_POST['visitor_name'];

	$visitor_company_name=$_POST['visitor_company_name'];
	$visitor_company_name=mysql_real_escape_string($visitor_company_name);

	
	$visitor_address=$_POST['visitor_address'];
	$visitor_address=mysql_real_escape_string($visitor_address);
	
	$visit_reason=mysql_real_escape_string($_POST['visit_reason']);
	
	
	
	//$iv_mobile_no=trim($_POST['iv_mobile_no']);
	if($_POST['iv_mobile_no'] != '')
	{
		$visitor_mobile_no_m=trim($_POST['visitor_mobile_no']);
		$visitor_mobile_no_m = explode("~", $visitor_mobile_no_m);
		$visitor_nick_name=$visitor_mobile_no_m[0];
		
		// This is as because if the input field namely "visitor_mobile_no" has nick_name or mobile number. 
		$visitor_mobile_no=trim($_POST['iv_mobile_no']);	
	}
	else{
		$visitor_mobile_no=trim($_POST['visitor_mobile_no']);	
	}
	

	$visiting_card_no=$_POST['visiting_card_no'];
	$visiting_card_no=mysql_real_escape_string($visiting_card_no);
	
	$visiting_unit=$_POST['visiting_unit'];
	
	
	$contact_person=$_POST['contact_person'];
	$contact_person=mysql_real_escape_string($contact_person);
	
	//$contact_person_dept=$_POST['contact_person_dept'];
	$visitor_in_time=$_POST['visitor_in_time'];	
	
	$remarks= $_POST['remarks'];
	$remarks=mysql_real_escape_string($remarks);
	//$sub_type=$_POST['sub_type'];
	
	//$in_time=$_POST['in_time'];
	//$in_time=mysql_real_escape_string($in_time);
	//
	$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));				
	$datex->modify('-3600 seconds');
	//$datey=$datex->format("mm-dd-YY");
	$datex=$datex->format("Y:m:d H:i:s");
	
	//die($datex);
	
	$date=$_POST['date'];
	$date=mysql_real_escape_string($date);	
	include("date_to_month.php"); 
	
	
	$SQL="INSERT INTO `tb_visitor_info` (`sl`, `visitor_name`, `visitor_nick_name`, `visitor_type`, `visitor_address`, `visitor_mobile_no`, `visiting_card_no`, `visiting_unit`, `visit_reason`, `contact_person`, `visitor_company_name`, `date`, `visitor_in_time`, `operator_in_time`, month_value,`year_value`, `remarks`, `status`, `user_id`) 
	
VALUES (NULL, '$visitor_name', '$visitor_nick_name', '$visitor_type', '$visitor_address', '$visitor_mobile_no', '$visiting_card_no', '$visiting_unit', '$visit_reason', '$contact_person', '$visitor_company_name', '$date', '$visitor_in_time',  '$datex', '$month_value', '$date_year', '$remarks', '0', '$id')";

	//die($SQL);

    $obj->sql($SQL);
	
	// Mark the card as Busy.
	$SQL1="UPDATE tb_visitor_card SET status = '0' WHERE card_no = '$visiting_card_no' AND card_type = '$visitor_type'";
    $obj->sql($SQL1);
	
	
	// Here the below calculation has to done at the last of inserting data into tb_visitor_info AND tb_visitor_card; Because before subitting this page; if total card not returend is x then after subitting this page it will x+1;
	
	// Counting Total Visitor.
	$SQL1="select count(sl) as tc from tb_visitor_info where date like '$date'";    //table name
	$results = $obj->sql($SQL1);
	while($row1 = mysql_fetch_array($results))
	{
		$totalvisitor=$row1['tc'];
	}
	
	// Counting Total Card returned.
	$SQL="select count(sl) as tc from tb_visitor_info where date like '$date' and status='1'";    //table name
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
		$totalvisitorx=$row['tc'];
	}
	
	// Counting Number of Card that has Not returned.
	$SQL2="select count(sl) as tc from tb_visitor_info where date like '$date' and status='0'";    //table name
	$results = $obj->sql($SQL2);
	while($row2 = mysql_fetch_array($results))
	{
		$totalvisitory=$row2['tc'];
	}
	
	
	
	$msg="Visitor information have been saved successfully";
	
}
 
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   			<?php include ("css.php") ; ?>
   			<?php include ("js.php") ; ?> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7"> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8"> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body> 
  <!--<![endif]-->
    
    <div class="navbar">
        <?php include("header.php") ; ?>
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">
            <div class="span3">
                <div class="sidebar-nav">
                
                   <?php include("menue.php") ; ?>                    
                   <?php // include("sub_menue1.php") ; ?>
                   <?php //include("sub_menue2.php") ; ?>

            </div>
        </div>
        <div class="span9">
            <script type="text/javascript" src="lib/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" charset="utf-8" src="javascripts/graphDemo.js"></script>

 					<?php  include ("stat.php") ; ?>                    
					<?php include ("title.php") ; ?>

<div class="row-fluid">
    <div class="block">
        <!--<p class="block-heading" data-toggle="collapse" >Select visitor type</p>-->
         <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Select Visitor Type</h4></div>
        <br>
      
     <h3 style="color: #F00" align="center"><?php echo $msg ; ?></h3><br />
      <a href="submit_problem1.php" class="btn btn-primary"><h5>Go Back</h5></a></div>    
     
    </div>
</div>


    
   <?php include("footer.php") ; ?>
    

  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

</body>
</html>


