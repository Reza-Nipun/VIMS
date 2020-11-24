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
	
	$id1 = $_GET['ID'];
	if($id1)
	{
	$SQL1="select * from tb_visitor_info where sl='$id1' ";    //table name]
	
	//die($SQL1);
	$results1 = $obj->sql($SQL1);
	while($row = mysql_fetch_array($results1))
	{
	
	 $visitor_name=$row['visitor_name'];
	 $visitor_type=$row['visitor_type'];
	 $visitor_company_name=$row['visitor_company_name'];
	 $visitor_address=$row['visitor_address'];
	 $visitor_mobile_no=$row['visitor_mobile_no'];
	 $visiting_card_no=$row['visiting_card_no'];
	 $visiting_unit=$row['visiting_unit'];
	 $contact_person=$row['contact_person'];
	 $visit_reason=$row['visit_reason'];
	 //$contact_person_dept=$row['contact_person_dept'];
	 $date=$row['date'];
	 
	 $visitor_in_time=$row['visitor_in_time'];
	 $visitor_in_time=substr($visitor_in_time, -8);
	  
	 $visitor_out_time=$row['visitor_out_time'];
	 $visitor_out_time=substr($visitor_out_time, -8);
	 
	 $remarks=$row['remarks'];
	 $status=$row['status'];
	
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
    <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Information of <?php echo $visitor_name ;  ?></h4></div>
    <br>
    
    <div id="tablewidget" class="block-body collapse in">
    
            <div id="content1"> <!--<a href="#" class="image-style"><img src="images/img02.jpg" width="600" height="250" alt="" /></a>-->
	    <!--<h2 style="color:#09F">Information of <?php // echo $visitor_name ;  ?></h2>
		  <br/>-->
          
          
               
    <meta charset="UTF-8" />
	<script type="text/javascript" src="images/jquery-1.9.0.js"></script>
	<script type="text/javascript">
	$(function(){
		$('button').click(function(){
			var url='data:application/vnd.ms-excel,' + encodeURIComponent($('#tableWrap').html()) 
			location.href=url
			return false
		})
	})
	</script>
          
          
    <script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}

</script>
    

<div id="printReady">
          
        <div id="tableWrap"> 
      <h5>Area: <?php echo $area ; ?></h5>
<?php include("show_visitor_info.php") ?>
<br/>
<!--<h2 align="center">HR Message</h2>-->


<table width="95%" align="center" border="0" class="bottomBorder" style="color:#000">
  <tr>
   <!-- <td scope="col"><strong>Date:</strong>  <?php //echo $row1['time'] ;  ?></td>-->
  </tr>
  <tr>
   <!-- <td scope="row"><strong></strong> <?php //echo $row1['content'] ;  ?>-->
    
    <br/>
    
       
    </td>
  </tr>
  </table>
  <br/>
  	<?php
	}
	?>

     </div>        
 </div>       
          
           <form id="printMe" name="printMe"> 
  <button class="btn btn-primary" style="cursor:pointer">Click to download as Excel</button> 

    <input type="button" class="btn btn-primary" name="printMe" onClick="printSpecial()" value="Print this Page">

</form>
   
	  <!--<a href="#" class="link-style1">Learn More</a>--></div>
           
        </div>
        </div>

   <?php include("footer.php") ; ?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

  </body>
</html>


