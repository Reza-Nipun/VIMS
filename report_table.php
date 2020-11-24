<table width="1300px" border="0" cellspacing="0" cellpadding="0" class="bottomBorder">
  <tr bgcolor="#BFBFBF">
    <th scope="col">Serial</th>
    <th scope="col">Visitor Name</th>
    <th scope="col">Visitor Type</th>
    <th scope="col">Company Name</th>
    <th scope="col">Reason of Visit</th>
    <th scope="col" width="130px">Mobile No.</th>
    <th scope="col">Address</th>
    <th scope="col">Visiting Unit</th>
    <th scope="col">Contact Person</th>
    <th scope="col">Remarks</th>
    <th scope="col">In Time</th>
    <th scope="col">Out Time</th>
    <?php if($rule==2) { ?>
    <th scope="col">Operator</th>
	<?php } ?>
  </tr>
  
   <?php
   
  
	  if($date1!=NULL or $date2!=NULL)
	  {
	 $SQL1="SELECT * FROM tb_visitor_info as b
WHERE STR_TO_DATE( b.date,  '%m-%d-%Y' ) between STR_TO_DATE( '$date1',  '%m-%d-%Y' ) and STR_TO_DATE( '$date2',  '%m-%d-%Y' )";    //table name
	  }
	  
	  if($visitor_mobile_no!=NULL)
	  {
	    $SQL1="SELECT * FROM tb_visitor_info WHERE visitor_mobile_no='$visitor_mobile_no'";    //table name
	  }  
	  
	  
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
 <?php echo $row['visitor_type'] ; ?> ?></td>
 <td align="left"><?php echo $row['visitor_company_name']?></td>
 <td bgcolor="#E6E6E6" align="left"><?php echo $row['visit_reason']?></td>
    
    <td align="left" width="130px"> <?php echo $row['visitor_mobile_no']?> </td>
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