<div class="nav-header" data-toggle="collapse" data-target="#dashboard-menu">
<!--<i class="icon-dashboard"></i>-->
<i class="icon-home"></i>
Menu
</div>
<?php 
$SQL="select * from tb_admin where user_name='$un' and project='VIMS'";    //table name
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
		$rule=$row['rule'];
	}
if($rule==1)
{
?>
<ul id="dashboard-menu" class="nav nav-list collapse in">
                        <li><a href="submit_problem1.php"><b>Visitor Entry</b></a></li>
                        
                        <li ><a href="index1.php"><b>Visitor Info</b></a></li>
                         <li ><a href="report.php"><b>Report</b></a></li>
                        <li ><a href="logout.php"><b>Logout</b></a></li>
                        
                    </ul>
                    
                    <?php } elseif($rule==2) { ?>
                    <ul id="dashboard-menu" class="nav nav-list collapse in">
                        <li ><a href="index1.php"><b>Visitor Info</b></a></li>
                        <li ><a href="report.php"><b>Report</b></a></li>
                        <li ><a href="logout.php"><b>Logout</b></a></li>
                        
                    </ul>
					
                     <?php } ?>