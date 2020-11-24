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
		$rule=$row['rule'];
		
	}
	if(isset($_POST['submit']))
	{
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];	
	$visitor_mobile_no=$_POST['visitor_mobile_no'];
	$sub_type=$_POST['sub_type'];
	
	}
	?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "Report" ?></title>
  <style type="text/css">
table.bottomBorder { border-collapse:collapse; }
table.bottomBorder td, table.bottomBorder th { border-bottom:1px dotted black;padding:1px;
font-size:13px;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;

}

table.bottomBorder tr, table.bottomBorder tr { border:1px dotted black;padding:1px; }
</style> 
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="margin:auto; width:1320px; overflow:hidden">

<div align="center" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:18px; color:#5F7D0E">
<img src="images/logos.png" width="300" height="*" /> <br/>
VIYELLATEX Visitor Information Management System

</div>

<div align="center">

<!--<span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:17px">From-<?php //echo $date1 ; ?> To <?php //echo $date2 ; ?> </span>-->
<br/><hr />


<span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:20px">Visitor Entry Report

<?php if ($date1!=NULL or $date2!=NULL) { ?>
            (<span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:17px">

			From-<?php echo $date1 ; ?> To <?php echo $date2 ; ?>
            
             </span>)
             <?php }
			 
			 
			 
			 
			 else if ($visitor_mobile_no != '') { ?>
				 
				(<span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:17px">
					Visitor Mobile No: <?php echo $visitor_mobile_no ; ?>
                 </span>) 
             
			<?php  } else if ($sub_type != '') { ?>
             	
                (<span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:17px">
					Report Type: <?php echo $sub_type ; ?>
                 </span>)
			
			<?php  } ?>

</span>
<hr />


<br/>

<?php //include("report_table.php") ; ?>
<br/>

             
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
	<?php include("report_table.php") ; ?>
			<br/>
			<br/>  
     </div> 
    </div>       
      
          
           <form id="printMe" name="printMe"> 
  <button class="btn btn-primary" style="cursor:pointer">Click to download as Excel</button> 

  <input type="button" class="btn btn-primary" name="printMe" onClick="printSpecial()" value="Print this Page">

</form>
</div>             
</div>
</body>
</html>