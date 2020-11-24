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
	}
	
		$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));
		$date=$datex->format('m-d-Y');
	

$sl=$_POST['sl'];



/*   if (isset($_POST['Update']))
 {	
 
	$prev_visitor_type= $_POST['prev_visitor_type'];
	$new_visitor_type= $_POST['visitor_type'];
 
	$prev_card_no= $_POST['prev_card_no'];
	$new_visiting_card_no= $_POST['visiting_card_no'];


	$SQL="update tb_visitor_info set visiting_card_no='$new_visiting_card_no', visitor_type='$new_visitor_type' where sl='$sl'";
	$obj->sql($SQL);
	
	$SQL="update tb_visitor_card set status='1' where card_no='$prev_card_no' AND card_type='$prev_visitor_type'";
	$obj->sql($SQL);

	$SQL="update tb_visitor_card set status='0' where card_no='$new_visiting_card_no' AND card_type='$new_visitor_type'";
	$obj->sql($SQL);

	$msg="Update is successfull";

 }*/
 
 

   if (isset($_POST['Submit']))
 {	
		
	$remarks= $_POST['remarks'];
	$remarks=mysql_real_escape_string($remarks);
	
	$visitor_out_time= $_POST['visitor_out_time'];
	
	$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));				
	$datex->modify('-3600 seconds');
	$datex=$datex->format("Y:m:d H:i:s");

	
	$SQL="update tb_visitor_info set visitor_out_time='$visitor_out_time', operator_out_time='$datex', remarks='$remarks', status='1' where sl='$sl'";
	$obj->sql($SQL);
	
	//$SQL1="UPDATE tb_visitor_card SET status = '1' WHERE card_no = '$visiting_card_no'";
	
	$SQL1="UPDATE tb_visitor_card SET status = '1' WHERE card_no = (SELECT visiting_card_no FROM tb_visitor_info WHERE sl = '$sl') AND card_type = (SELECT visitor_type FROM tb_visitor_info WHERE sl = '$sl')";
    $obj->sql($SQL1);
 
	$msg="Update is successfull";
	
}

	
	$SQL1="select count(sl) as tc from tb_visitor_info where date like '$date'";    //table name
	$results = $obj->sql($SQL1);
	while($row1 = mysql_fetch_array($results))
	{
		$totalvisitor=$row1['tc'];
	}
	
	$SQL="select count(sl) as tc from tb_visitor_info where date like '$date' and status='1'";    //table name
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
		$totalvisitorx=$row['tc'];
	}
	
	$SQL2="select count(sl) as tc from tb_visitor_info where date like '$date' and status='0'";    //table name
	$results = $obj->sql($SQL2);
	while($row2 = mysql_fetch_array($results))
	{
		$totalvisitory=$row2['tc'];
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
                   <?php //include("sub_menue1.php") ; ?>
                   <?php //include("sub_menue2.php") ; ?>

            </div>
        </div>
        <div class="span9">
            <script type="text/javascript" src="lib/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" charset="utf-8" src="javascripts/graphDemo.js"></script>

 					<?php include ("stat.php") ; ?>                    
					<?php include ("title.php") ; ?>

<div class="row-fluid">
    <div class="block">
        <!--<p class="block-heading" data-toggle="collapse" >Select visitor type</p>-->
         <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Select Visitor Type</h4></div>
        <br>
      
   	  <h3 style="color:#F00" align="center"><?php echo $msg ; ?></h3><br />

	     <a href="index1.php" class="btn btn-primary"><h5>Go Back</h5></a></div>
          
     
    </div>
</div>


    
   <?php include("footer.php") ; ?>
    

  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

</body>
</html>


