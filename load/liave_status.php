<br />
<h2>Leave Status</h2>

<table width="100%" border="1" align="left" style="color:#000" cellpadding="0" cellspacing="0" class="bottomBorder">
  <tr>
    <th scope="col">Leave Type</th>
    <th scope="col">Days Availed</th>
  </tr>
  <?php
	$SQL2="SELECT field1,SUM(  `field3` ) as total_leave  
FROM  `tb_get_request` 
WHERE STR_TO_DATE(  `current_date` ,  '%m-%d-%Y') 
BETWEEN STR_TO_DATE(  '07-01-2013',  '%m-%d-%Y') 
AND STR_TO_DATE(  '06-31-2014',  '%m-%d-%Y' )
AND employee_id =  '$un'
AND request =  'Leave Application'
AND line_accept='1'
AND hr_accept='1'
GROUP BY field1";    //table name
	$results2 = $obj->sql($SQL2);
	while($row2 = mysql_fetch_array($results2))
	{
	?>
  <tr>
    <th scope="row"><?php echo $row2['field1']; ?> </th>
    <th><?php echo $row2['total_leave']; ?> </th>
  </tr>
 
  <?php
	}
	?>
  <tr>
    <th colspan="2" scope="row"><span style="color:#F00; font-size:11px;"> Annual Leave(After Confirmation) = 20 , Casual Leave(After Confirmation) = 10 , Sick Leave = 13</span></th>
  </tr>
</table>

 
