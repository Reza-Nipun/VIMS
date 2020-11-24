
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="css/CalendarControl.js" type="text/javascript"></script>
    	<link href="css/CalendarControl.css" rel="stylesheet" type="text/css" />
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
        <?php include("header.php"); ?>
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
         <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Report Date Wise</h4>
         </div>
        <br>
        
          
                <form action="report_date_date1.php" method="post" target="_blank"> 
        <table border="1" width="60%" cellpadding="0" align="center" cellspacing="0">
				<tr>
                	<td align="center">From:
                    <input name="date1" id="date1" type="text" tabindex="1" onClick="showCalendarControl(this);" required autofocus>
                    &nbsp;&nbsp;To:
                    <input name="date2" type="text" id="date2" onClick="showCalendarControl(this);" tabindex="2" required ></td>
                </tr>
                <tr>    
                    <td>Contact no:
                    <input type="text" name="visitor_mobile_no" id="visitor_mobile_no" ></td>
                </tr>
                <tr>    
                    <td>&nbsp;&nbsp; Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="sub_type" class="country" id="sub_type">
<option value="" selected>--Select Type--</option>
<?php
$SQL="select * from tb_sub_type group by sub_type ";
		$obj->sql($SQL);
		while($row = mysql_fetch_array($obj->result))
{ 
$sub_type=$row['sub_type'];
echo '<option value="'.$sub_type.'">'.$sub_type.'</option>';
}
?>
</select></td>
              </tr>
              <tr>
              	<td align="center">&nbsp;		
				<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit" tabindex="3" /></td>
				</tr>
                
				</table>
                </form>
                
                
                
                
                
                
                
                
                
                
                
                
        
   
    </div>
    
  
    
    
   
        
        
<script type="info/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var dis=$(this).val();
var dataString = 'dis='+ dis;
$.ajax
({
type: "POST",
url: "info/ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});
});
});
</script>

        
        
      

          
   
    </div>
    
    
</div>



<?php include("footer.php") ; ?>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

</body>
</html>


