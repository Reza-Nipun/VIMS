
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
		$name=$row['name'];
		
	}
	$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));
$date=$datex->format('m-d-Y');

	
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
	
	
	$sql1="select visitor_type, count(visitor_type) as a from tb_visitor_info group by visitor_type";
	$results = $obj->sql($sql1);
	while($row=mysql_fetch_array($results))
	{
		$visitor_type = $row['visitor_type'];
		$a = $row['a'];
	}
			
	$a = array($a);
	
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
           			<?php include ("stat.php") ; ?>
					 <?php include ("title.php") ; ?>

<div class="row-fluid">
    <div class="block">
        <!--<p class="block-heading" data-toggle="collapse" >Select visitor type</p>-->
         <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Select Visitor Type</h4></div>
        <br>

<iframe style="border:#06F solid" src="chart/typewise_chart.php" width="390" height="320" frameborder="0"></iframe><br>
<iframe style="border:#06F solid" src="chart/monthwise_chart.php" width="890" height="320" frameborder="0"></iframe>


     <!--<div id="visualization" align="center"></div>    -->
 <!--   <div id="revenue" align="center"></div>
    <div id="pizza" align="center"></div>    -->
    <!-- <div id="chart_div" align="center"></div>   -->
    
    </div>
</div>  
   
   
    <?php include("footer.php") ; ?>





<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

</body>
</html>


