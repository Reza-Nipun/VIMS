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
	$card_type=$_POST['card_type'];
	$visitor_mobile_no=$_POST['visitor_mobile_no'];
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
             
			<?php  } else if ($card_type != '') { ?>
             	
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
       
       <table width="1300px" border="0" cellspacing="0" cellpadding="0" class="bottomBorder">
  <tr bgcolor="#BFBFBF">
    <th width="37" scope="col">SL</th>
    <th width="152" scope="col">Visitor Name</th>
    <th width="100" scope="col">Visitor Type</th>
    <th width="136" scope="col">Company Name</th>
    <th width="100" scope="col">Reason of Visit</th>
    <th scope="col" width="100">Mobile No.</th>
    <th width="111" scope="col">Address</th>
    <th width="111" scope="col">Visiting Unit</th>
    <th width="144" scope="col">Contact Person</th>
    <th width="50" scope="col">Remarks</th>
    <th width="100" scope="col">In Time</th>
    <th width="100" scope="col">Out Time</th>
    <?php if($rule==2) { ?>
    <th width="65" scope="col">Operator</th>
	<?php } ?>
  </tr>
  
   <?php
   
	 $SQL1="SELECT * FROM tb_visitor_info WHERE sl != ''";    //table name.
	 
	  if($date1!=NULL or $date2!=NULL)
	  {
	 $SQL1 .=" AND STR_TO_DATE( date,  '%m-%d-%Y' ) between STR_TO_DATE( '$date1',  '%m-%d-%Y' ) and STR_TO_DATE( '$date2',  '%m-%d-%Y' )";    //table name
	  }
	  
	  if($visitor_mobile_no!=NULL)
	  {
	    $SQL1 .=" AND visitor_mobile_no='$visitor_mobile_no'";    //table name
	  }  
	 if($card_type!=NULL)
	  {
	    $SQL1 .=" AND visitor_type='$card_type'";    //table name
	  } 
	  
	  //die($SQL1);
	  
	$results1 = $obj->sql($SQL1);
	$sl=1;
	while($row = mysql_fetch_array($results1))
	{
		$in_time=$row['visitor_in_time'];
		$in_time= date("F j, Y, g:i a", strtotime($in_time));		
	
	
	
		$out_time=$row['visitor_out_time'];
		
		if($out_time!=NULL)
		{
		//$out_time=$row['visitor_out_time'];
		//$out_time= date("F j, Y, g:i a", $out_time);
		$out_time= date("F j, Y, g:i a", strtotime($out_time));
		}
		else
		{
		//$out_time=$row['visitor_out_time'];
		$out_time='' ;
		}
	 ?>
  
  <tr>
    <td bgcolor="#E6E6E6" align="center"><?php echo $sl; ?>.</td>
    
    <td><?php echo $row['visitor_name']?></td>
    
 <td bgcolor="#E6E6E6" align="left">
 <?php echo $row['visitor_type'] ; ?></td>
 <td align="left"><?php echo $row['visitor_company_name']?></td>
 <td bgcolor="#E6E6E6" align="left"><?php echo $row['visit_reason']?></td>
    
    <td align="left" width="114"> <?php echo $row['visitor_mobile_no']?> </td>
    <td bgcolor="#E6E6E6"><?php echo $row['visitor_address']?></td>
    <td ><?php echo $row['visiting_unit']?></td>
    
    <td bgcolor="#E6E6E6"><?php echo $row['contact_person'] ; ?></td>
    <td><?php echo $row['remarks']?></td>
    <td bgcolor="#E6E6E6"><?php echo $in_time ?></td>
     <td><?php echo $out_time ?></td>
     
     
     <?php
	 $uid=$row['user_id'] ;
	 $sql="SELECT name FROM  tb_admin where id='$uid'";
	 $results = $obj->sql($sql);
	 while($rowz = mysql_fetch_array($results))
	 {
		 $name=$rowz['name'];
	 }
	  if($rule==2)
		{
		 ?>
    
	 
	 <td bgcolor="#E6E6E6"><?php echo $name ; ?></td>
     <?php } ?>
    
  </tr>
  
  <?php $sl++ ; } ?>
</table>



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