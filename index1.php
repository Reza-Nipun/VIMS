
<?php

	require_once('comon.php');
	session_start(); 
	$un=$_SESSION['username'];
	include "db_Class.php";
  	$obj = new db_class();
	$obj->MySQL();
	
	$SQL="select * from tb_admin where user_name='$un'  and project='VIMS'";    //table name
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
		$id=$row['id'];
		$name=$row['name'];
		$area=$row['area'];
		$rule=$row['rule'];
		
	}
	
	$rid=$_GET['rid'];
	
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
	
//	date like '$date' and
	
	$SQL2="select count(sl) as tc from tb_visitor_info where  status='0'";    //table name
	$results = $obj->sql($SQL2);
	while($row2 = mysql_fetch_array($results))
	{
		$totalvisitory=$row2['tc'];
		
	}

	
	if(isset($_POST['submit']))
	{
		$visiting_card_no=$_POST['visiting_card_no'];
		//die($visiting_card_no);
		$visiting_unit=$_POST['visiting_unit'];
	}
	
	$asc=$_GET['ID'];
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
       <!-- <p class="block-heading" data-toggle="collapse" style="color:#09F" >Search</p>-->
        <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Search</h4></div>
        <br>
        
        <form action="index1.php" method="post">
       <table  align="center" width="95%" border="1" cellspacing="0" cellpadding="0">
  <tr align="center" style="font-weight:bold; font-size:11px">
    <td width="8%"><h5>Visiting Card</h5></td>
    <td width="12%">
      <input type="text" name="visiting_card_no" id="visiting_card_no" ></td>
      <td width="10%"><h5>&nbsp;Business Unit</h5></td>
    <td width="12%">
    <select name="visiting_unit" tabindex="6" id="visiting_unit" >
    <option value="" selected="selected">------ Select Unit ------</option>
    <?php
    $SQL = "select unit from tb_visitor_unit group by unit ORDER BY sl ASC";
	$result = $obj->sql($SQL);
	while($row = mysql_fetch_array($result))
	{
		$unit = $row['unit'];
		
		echo '<option value="'.$unit.'">'.$unit.'</option>';
		
		}

	?>
    </select>      
      </td>
    <td width="16%">
    
    <input name="submit" type="submit" class="btn btn-success" id="submit" value="Search " style="background-color:#3C3"/>
    
    </td>
    </tr></table>
   </form>
       
      <div id="chart-container" class="block-body collapse in">           
            
        <!--    <div id="line-chart"></div-->
         </div>
    </div>
</div>


  <div class="block span12">
   <div class="block-heading" data-toggle="collapse" data-target="#tablewidget"><h4 style="color:#09F">Visitors</h4></div>
    <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                 <tr bgcolor="#FF9933" style="color:#000">
    <th scope="col">Sl</th>
   
    <th scope="col">Visitor Name</th>
    <th scope="col"> Type</th>   
    <th scope="col"> Card No.</th>   
    <th scope="col"> In Time</th>
        <th scope="col">Out Time</th>
    <th width="10%" scope="col">
    <?php if($asc=='ASC') {?>
    
    <a href="index1.php?ID=" style="color:#000">&nbsp;&nbsp;&nbsp;Status</a>
    
    <?php } else { ?>
    <a href="index1.php?ID=ASC" style="color:#000">&nbsp;&nbsp;&nbsp;Status</a>
    <?php }  ?>
    </th>    
   <th width="25%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
  </tr>
              </thead>
              <?php
                //PER PAGE COMPONENT
                $per_page=50;
                //PAGE NO.
                if(!isset($_GET['page']))
                {
                $page=1;
                }else
                {
                $page = $_GET['page'];
                }
                if($page<=1)
                $start=0;
                else
                $start = $page * $per_page - $per_page;
				
				
				if($visiting_card_no!='' or $visiting_unit!='')
				{
				//	die(khjgh);
					
				$sql = "select * from tb_visitor_info where sl!=''";
					if($visiting_card_no!='')
					{
						$sql = $sql .  " and visiting_card_no='$visiting_card_no'";
					}
					if($visiting_unit!='')
					{
					 $sql =  $sql . " and visiting_unit='$visiting_unit'";
					}
					
  					$sql = $sql . " order by sl DESC";
					
				}
				
				else if($asc=='ASC')
				{
					$sql = "select * from tb_visitor_info WHERE status='0'";
				}
				else
				{
					//$sql = "select * from tb_visitor_info ORDER BY sl DESC";
					$sql = "select * from tb_visitor_info WHERE status=0 ORDER BY sl DESC";
				}
				
				
				
	//$die($sql);	
	
	//echo $sql ;		
$num_rows = mysql_num_rows(mysql_query($sql));
                $num_pages = ceil($num_rows / $per_page); 
                $sql .= " LIMIT $start, $per_page";
                $result = mysql_query($sql);
                $sl=1;
                while($row = mysql_fetch_array($result))
                {
					$visitor_in_time=$row['visitor_in_time'];
					$visitor_in_time=substr($visitor_in_time, -8);
					
					$visitor_out_time=$row['visitor_out_time'];
					$visitor_out_time=substr($visitor_out_time, -8);
					
	?>
          <tbody>
               <tr style="color:#000"> 
    <td align="center"><?php echo $sl ; ?></td>
    <td>&nbsp; <?php echo $row['visitor_name'] ; ?></td>
    <td>&nbsp; <?php echo $row['visitor_type'] ; ?></td>
    <td>&nbsp; <?php echo $row['visiting_card_no'] ; ?></td>
    <td>&nbsp; <?php echo $visitor_in_time ; ?></td>
        <td>&nbsp; <?php echo $visitor_out_time ; ?></td>
    
    
    
    
     <?php
    if($row['visitor_in_time'] && !$row['visitor_out_time'])
	 {  
	  $c="#FF0000" ;
	  $c2="#000000" ;
	  $c1="Pending" ;
	   }
	elseif($row['visitor_out_time'])
	{
	  	$c="#8ea190";
		$c1="Ok";
	}
	
   	?>
    <td bgcolor="<?php echo $c ; ?>" style="padding-right:5px; color:#FFFFFF" align="center"><strong><?php echo $c1 ; ?></strong></td> 
     <?php if($rule==1) { ?>       
    <td align="center"><a href="track2.php?ID=<?php echo $row['sl'] ; ?>" class="tryitbtn"><img src="images/details-button.gif" width="" height=""></a>   
        
    <a href="edit1_new.php?ID2=<?php echo $row['sl'] ; ?>" class="tryitbtn"><img src="images/button_edit_grey.gif" width="" height=""></a>
    <?php } elseif($rule==2) { ?>
    <td align="center"><a href="track2.php?ID=<?php echo $row['sl'] ; ?>" class="tryitbtn"><img src="images/details-button.gif" width="" height=""></a>   
    <?php } ?>
    
        
  <!--<a href="edit1_new.php?ID1=<?php //echo $row['user_id'] ; ?>&ID2=<?php echo $encodedString ; ?>" class="tryitbtn">Edit »</a>-->
  
      </td>
  </tr>

        <?php
		$sl++;
	}
	?>
      <tr style="color:#000">
    <td colspan="7" align="center">  <?php
                  
                  $prev = $page - 1;
                  $next = $page + 1;
                  
                  echo"<br>";
                  
                  if($prev>0){
                  
                  echo"<a href='?page=$prev'>Previous</a> ";
                  }            
                  $number=1;
                  for($number=1; $number<=$num_pages; $number+=1)
                  {
                  if($page==$number){
                  echo" <b> [$number] </b> ";
                  }
                  else
                  {
                  echo"<a href='?page=$number'> $number </a> &nbsp;";
                  }
                  }
                  if($page < ceil($num_rows/$per_page))
                  echo"<a href='?page=$next'>Next</a> ";                
                  ?></td>
    </tr>
             
              </tbody>
            </table>
           
        </div>
        </div>
   
    
   <?php include("footer.php") ; ?>
    

  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    
    

</body>
</html>


