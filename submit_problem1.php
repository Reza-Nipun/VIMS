
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
		$rule=$row['rule'];
}

		if($rule==2)
		{
        die('ERROR') ;
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
	
	$SQL2="select count(sl) as tc from tb_visitor_info where status='0'";    //date like '$date' and 
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
      
      
        
    
    <form action="submit_problem2new.php" method="post" class="niceform">
	<fieldset>
       <table width="50%" border="1" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <th scope="row" style="color:#000">Visitor Type</th>
    <td align="center"><select name="visitor_type" class="input-xlarge" id="visitor_type" required >
      <option selected="selected" value="">------------ Select Type ------------</option>
      <?php
$SQL="select * from tb_visitor_card group by card_type";
		$obj->sql($SQL);
		while($row = mysql_fetch_array($obj->result))
{ 
$card_type=$row['card_type'];
echo '<option value="'.$card_type.'">'.$card_type.'</option>';
}
?>
      </select></td>
  </tr>
 
 

  <tr>
    <th colspan="2" scope="row">
    	 <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <!--<input type="reset" name="Reset" class="btn btn-primary" id="submit" value="Reset" />-->
    </th>
    </tr>
</table>
 
    </fieldset></br>
</form>
    </div>
</div>
<!--</div> -->
   
   
    <?php include("footer.php") ; ?>





<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

</body>
</html>


