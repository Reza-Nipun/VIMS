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
	
	
	
	
	   if (isset($_POST['Update']))
 {	
 
	$id1=$_POST['sl'];

	$prev_visitor_type= $_POST['prev_visitor_type'];
	$new_visitor_type= $_POST['visitor_type'];
 
	$prev_card_no= $_POST['prev_card_no'];
	$new_visiting_card_no= $_POST['visiting_card_no'];


	$SQL="update tb_visitor_info set visiting_card_no='$new_visiting_card_no', visitor_type='$new_visitor_type' where sl='$id1'";
	$obj->sql($SQL);
	
	$SQL="update tb_visitor_card set status='1' where card_no='$prev_card_no' AND card_type='$prev_visitor_type'";
	$obj->sql($SQL);

	$SQL="update tb_visitor_card set status='0' where card_no='$new_visiting_card_no' AND card_type='$new_visitor_type'";
	$obj->sql($SQL);

	$msg="Card Number Changed Successfully !!!";

 }
 




	
	$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));
	$datex->modify('-3600 seconds');
	$date=$datex->format('m-d-Y');
	$datex=$datex->format("Y:m:d H:i:s");



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
	
	if($id1 == '')
	$id1 = $_GET['ID2'];
	

	$SQL1="select * from tb_visitor_info where sl='$id1'";    //table name]
	
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
	 $contact_person_dept=$row['contact_person_dept'];
	 $visit_reason=$row['visit_reason'];
	 $date=$row['date'];
	 $visitor_in_time=$row['visitor_in_time'];
	 $visitor_in_time=substr($visitor_in_time, -8);
	 //$visitor_out_time=$row['visitor_out_time'];
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


            
            <script type="info/jquery.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function()
            {
            $("#visitor_type").change(function()
            {

            var dis=$(this).val();
            var dataString = 'dis='+ dis;
			//alert(dataString);	
                    
				   $.ajax
                    ({
                    type: "POST",
                    url: "info/visiting_card_no.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                    $("#visiting_card_no").html(html);
                    } 
                    });
            
				
			});
            });
            </script>
    

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
        <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Information of <?php echo $visitor_name ;  ?></h4></div><br>
    <div id="tablewidget" class="block-body collapse in">
    
            <div id="content1"> 
            
  <h4 style="color:#F00"><?php echo $msg; ?></h4>   
<?php include("show_visitor_info1.php") ?><br>

<div style="float:left; width:50%">
     <h4 align="center"><u>Change Card No</u></h4>
     <form name="Form1" method="post" action="edit1_new.php">    
    <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" class="bottomBorder">
      
      <tr>
        <th width="35%" style="color:#000" scope="col">Visitor Type:</th>
        <th width="65%" scope="col">
        <input name="prev_visitor_type" type="hidden" value="<?php echo $visitor_type; ?>"/>
    <select name="visitor_type" id="visitor_type" required >
          <option selected="selected" value="<?php echo $visitor_type; ?>"><?php echo $visitor_type; ?></option>
          <?php
            $SQL="select * from tb_visitor_card where card_type != '$visitor_type' group by card_type";
            $obj->sql($SQL);
            while($row = mysql_fetch_array($obj->result))
            { 
            $card_type=$row['card_type'];
            echo '<option value="'.$card_type.'">'.$card_type.'</option>';
            }
    ?>
          </select>  </tr>
      
      
      <tr>
        <th width="35%" style="color:#000" scope="col">Visitor Card No:</th>
        <th width="65%" scope="col" id="td_visiting_card_no">
        <input name="prev_card_no" type="hidden" value="<?php echo $visiting_card_no; ?>"/>
        <select name="visiting_card_no" id="visiting_card_no" style="margin-left:17px" tabindex="2" required>
        <option value="<?php echo $visiting_card_no; ?>" selected="selected"><?php echo $visiting_card_no; ?></option>
        
        <?php
            $SQL="SELECT card_no FROM tb_visitor_card WHERE card_type='$visitor_type' AND status != 0 ORDER by LENGTH(card_no), card_no ASC";
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
        <th colspan="2" scope="row">    
          <input name="Update" type="submit" class="btn btn-primary" value="Update">      
    <input type="hidden" name="sl" value="<?php echo $id1 ; ?>" id="hiddenField" />
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="Reset1" type="reset" class="btn btn-primary" value="Reset" />
        </th>
        </tr>
    </table>
    
    </form>
</div>
<div style="float:left; width:50%">
     <h4 align="center"><u>Receive Card</u></h4>
     <form name="Form2" method="post" action="update_do.php">    
    <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" class="bottomBorder">
    
      <tr>
        <th width="40%" style="color:#000" scope="col">Visitor Out Time:</th>
        <th width="60%" scope="col">
        <input type="text" name="visitor_out_time" id="visitor_out_time"  readonly="readonly"  value="<?php echo $datex ; ?>" /></th>
      </tr>
      <tr>
        <th width="40%" style="color:#000" scope="col"><span style="color:#060">Remark</span>:</th>
        <th width="60%" scope="col">
        <textarea name="remarks" cols="40" rows="3" id="remarks"><?php echo $remarks ; ?>
    </textarea></th>
      </tr>
        <tr>
        <th colspan="2" scope="row">    
          <INPUT name="Submit" type="submit" class="btn btn-primary" value="Submit">      
    <input type="hidden" name="sl" value="<?php echo $id1 ; ?>" id="hiddenField" />
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="Reset" type="reset" class="btn btn-primary" value="Reset" />
        </th>
        </tr>
    </table>
    
    </form>
</div>

  	<!--<a href="#" class="link-style1">Learn More</a>--><!--<p><a href="users.html">More...</a></p>-->

</div>
<br/><br/><br/>
	<?php include("footer.php") ; ?>
</div></div></div>
  
  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

  </body>
</html>


