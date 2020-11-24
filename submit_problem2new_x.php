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
	
	$SQL2="select count(sl) as tc from tb_visitor_info where status='0'";     //table name
	$results = $obj->sql($SQL2);
	while($row2 = mysql_fetch_array($results))
	{
		$totalvisitory=$row2['tc'];
		
	}
	
	
	$visitor_type=$_POST['visitor_type'];
	$visitor_type=mysql_real_escape_string($visitor_type);
	
	
	$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));				
	$datex->modify('-3600 seconds');
	//$datey=$datex->format("mm-dd-YY");
	$datex=$datex->format("Y:m:d H:i:s");
	

	?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    		<?php include ("css.php") ; ?>
   			<?php include ("js.php") ; ?> 
            
            <script type="text/javascript">
var CityLineCodes = [
					 
 <?php			 
	$SQL="select visitor_mobile_no,visitor_name,visitor_address from tb_visitor_info group by visitor_mobile_no"; 
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
  $visitor_mobile_no=mysql_real_escape_string($row['visitor_mobile_no']);		
  $visitor_name=mysql_real_escape_string($row['visitor_name']);
  $visitor_address=mysql_real_escape_string($row['visitor_address']);
 
  echo "'" ;
  echo $visitor_mobile_no ;
 
  echo '~' ;
  echo $visitor_name ;
  
  echo '~' ;
  echo $visitor_address ;
 
  echo "'" ;
  echo ',' ;  
	}
  ?>					 

  'Georgia~678~BANGLADESH'	// NOTE: no comma after last entry
];

function stdCode() {
  var visitor_mobile_no = document.registration.visitor_mobile_no.value;
  for (var i=0; i<CityLineCodes.length; i++) {
    tarr =CityLineCodes[i].split('~');
    if (visitor_mobile_no == tarr[0]) { 
	
	document.registration.visitor_name.value = tarr[1]; 
	document.registration.visitor_address.value = tarr[2]; 

	break;    }
	
    else { 
	document.registration.visitor_name.value = '';
	document.registration.visitor_address.value = '';	
		 }
  }
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="css/CalendarControl.js" type="text/javascript"></script>
    	<link href="css/CalendarControl.css" rel="stylesheet" type="text/css" />
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
        </div>
            <script type="text/javascript" src="lib/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" charset="utf-8" src="javascripts/graphDemo.js"></script>

<?php // include ("stat.php") ; ?>
<?php  // include ("title.php") ; ?>



<div class="row-fluid">
  <div class="block">
    <div class="block-heading" data-toggle="collapse" data-target="#tablewidget">
    <h4 style="color:#09F"><?php echo $visitor_type ;  ?></h4>
    </div>
    <br>
    <div id="tablewidget" class="block-body collapse in">
    
<div id="content1">
		          		
      <form name='registration' method="post" action="submit_problem.php" >      
 <table width="60%" border="1" align="center" cellpadding="0" cellspacing="0" class="bottomBorder">
<p style=" color:red"><img src="images/icon_required_field.gif">indicates mandatory field</p>  	
<tr>
    <th scope="col" style="color:#000" align="left">Visitor's contact no. :</th>
    <th scope="col"><input type="text" list="visitor_mobile_no" autofocus placeholder="01700000000" name="visitor_mobile_no" onblur=stdCode(this.value,1,0)  />

 <datalist id="visitor_mobile_no">
 <?php
 
 /*
  $SQL="select visitor_mobile_no from tb_visitor_info group by visitor_mobile_no order by visitor_mobile_no ASC"; 
 $results = $obj->sql($SQL);
 while($row = mysql_fetch_array($results))
 {   */
 ?>
 <option value="<?php // echo $row['visitor_mobile_no'] ?>"> 
 <option value="01712000000">     
 <?php // } ?>    
 </datalist>
    &nbsp;&nbsp;&nbsp;
    </th>
  </tr>
  <tr>
    <th scope="col" style="color:#000" align="left">Visitor's Name :</th>
    <th scope="col"><input name="visitor_name" type="text" id="visitor_name" required/>&nbsp;<img src="images/icon_required_field.gif"></th>
    
  </tr>
  <tr>
    <th scope="col" style="color:#000" align="left">Visitor's Address :</th>
    <th scope="col"><input name="visitor_address" type="text" id="visitor_address" required />&nbsp;<img src="images/icon_required_field.gif"></th>
  </tr>
    <!--<tr>
    <th width="40%" style="color:#000" scope="col">Mobile No. :</th>
    <th width="60%" scope="col"><input name="visitor_mobile_no" type="text" id="visitor_mobile_no" required="required" /></th>
  </tr>-->
  <tr>
    <th width="40%" style="color:#000" scope="col" align="left">Visiting Card No. :</th>
    <!--<input name="visiting_card_no" type="text" id="visiting_card_no" required="required" />-->
   <th width="60%" scope="col">
    <select name="visiting_card_no" id="visiting_card_no" required>
   
   <?php // if($visitor_type!='Other') { ?>
   
    <option value="" selected="selected">----- Select Card -----</option>
    
    <?php // } ?>
    
    <?php
	
	if($visitor_type=='Other')
	{
		$SQL="SELECT card_no FROM `tb_visitor_card` WHERE `card_type`='$visitor_type' ORDER BY card_no ASC";
		
	}
	
	else
	{
	
		$SQL="SELECT card_no FROM `tb_visitor_card` WHERE `card_type`='$visitor_type' AND `card_no` NOT IN (SELECT visiting_card_no FROM `tb_visitor_info` WHERE status = '0' AND visitor_type='$visitor_type') ORDER BY card_no ASC";
	}
	//AND `card_no` NOT IN (SELECT visiting_card_no FROM `tb_visitor_info` WHERE status = '0')
		
		$result=$obj->sql($SQL);
		while($row=mysql_fetch_array($result))
		{
			$card_no=$row['card_no'];		
			echo '<option value="'.$card_no.'">'.$card_no.'</option>';
		}
			
	?>
    
    </select>
   <img src="images/icon_required_field.gif">
    </th>
  </tr>
  <tr>
    <th width="40%" style="color:#000" scope="col" align="left">Visiting Unit :</th>
    <th width="60%" scope="col">
    <select name="visiting_unit" id="visiting_unit" >
    <option value="" selected="selected">------ Select Unit ------</option>
    <?php
    $SQL = "select unit from tb_visitor_unit group by unit";
	$result = $obj->sql($SQL);
	while($row = mysql_fetch_array($result))
	{
		$unit = $row['unit'];
		
		echo '<option value="'.$unit.'">'.$unit.'</option>';
		
		}

	?>
    </select>
    &nbsp;&nbsp;&nbsp;
    </th>
  </tr>
  <tr>
    <th width="40%" style="color:#000" scope="col" align="left">Contact Person :</th>
    <th width="60%" scope="col"><input name="contact_person" type="text" id="contact_person"  />&nbsp;&nbsp;&nbsp;&nbsp;</th>
  </tr>
  <tr>
    <th width="40%" style="color:#000" scope="col" align="left">Contact Person's Dept. :</th>
    <th width="60%" scope="col"><input name="contact_person_dept" type="text" id="contact_person_dept"  />&nbsp;&nbsp;&nbsp;&nbsp;</th>
  </tr>
  <tr>
    <th width="40%" style="color:#000" scope="col" align="left"> Date :</th>
    <th width="60%" scope="col"><input name="date" type="text" placeholder="mm-dd-yyyy" onclick="showCalendarControl(this);" required  />&nbsp;<img src="images/icon_required_field.gif"></th>
  </tr>
  
  <tr>
    <th width="40%" style="color:#000" scope="col" align="left"> Visitor In Time :</th>
    <th width="60%" scope="col"><input name="visitor_in_time" id="visitor_in_time" type="text"  value="<?php echo $datex; ?>" required readonly />&nbsp;<img src="images/icon_required_field.gif"></th>
  </tr>
  
   <tr>
    <th scope="row" style="color:#000" align="left">Remarks</th>
    <td align="center"><textarea name="remarks" cols="35" rows="3" id="remarks"></textarea>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <?php 
  if($visitor_type=='General Visitor') { ?>
  <tr>
    <th scope="row" style="color:#000" align="left">&nbsp;</th>
    <td align="center">
   <label>
  	<input type="radio" name="sub_type" id="sub_type" value="Vendor" required>Vendor</label>
  <label>
  	<input type="radio" name="sub_type" id="sub_type" value="Non vendor" required>Non vendor</label>
    </td>
  </tr>
   
   <?php } elseif($visitor_type=='Buyer'){ ?>
   <tr>
    <th scope="row" style="color:#000" align="left">&nbsp;</th>
    <td align="center">
   <label>
  	<input type="radio" name="sub_type" id="sub_type" value="Local" required>Local</label>
  <label>
  	<input type="radio" name="sub_type" id="sub_type" value="Foreigner" required>Foreigner</label>
    </td>
  </tr>
  <?php } elseif($visitor_type=='Other') { ?>
   <tr>
    <th scope="row" style="color:#000" align="left">&nbsp;</th>
    <td align="center">   
  <label>
  	<input type="radio" name="sub_type" id="sub_type" value="other" checked required>Other</label>
    </td>
  </tr>
  <?php } ?>
  
  <tr>
 <th width="40%" style="color:#000" scope="col">
 <input type="hidden" name="visitor_type" value="<?php echo $visitor_type ; ?>" id="hiddenField"/></th>
    
    
    <th width="60%" scope="col">
    <INPUT name="Submit" type="submit" class="btn btn-primary" value="Submit"/>
    <INPUT name="Reset" type="reset" class="btn btn-primary"  value="Reset" />
    </th>
  </tr>
 
</table>
 
       <br/>
    
</form>


	  <!--<a href="#" class="link-style1">Learn More</a>--></div>           
          

     </div>
    </div>       
  </div> 
   <?php include("footer.php") ; ?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    </div>
    </div>
    

  </body>
</html>


