<table width="95%" align="center" border="1" class="bottomBorder" style="color:#000">
  <tr>
    <td width="350"><strong>Visiting Card No:</strong></td>
    <td>&nbsp;<?php echo $visiting_card_no  ; ?></td>
  </tr>
  <tr>
    <td width="350"><strong>Visitor Name:</strong></td>
    <td>&nbsp;<?php echo $visitor_name  ; ?></td>
  </tr>
  <tr>
    <td width="350"><strong>Visitor Type:</strong></td>
    <td>&nbsp;<?php echo $visitor_type  ; ?></td>
  </tr>
  
   <tr>
    <td width="350"><strong>Visitor Company Name:</strong></td>
     <td>&nbsp;<?php echo $visitor_company_name  ; ?></td>
  </tr>

  <tr>
    <td width="350"><strong>Visitor Address:</strong></td>
     <td>&nbsp;<?php echo $visitor_address  ; ?></td>
  </tr>
  <tr>
    <td width="350"><strong>Mobile No:</strong></td>
     <td>&nbsp;<?php echo $visitor_mobile_no  ; ?></td>
  </tr>
 
   <tr>
    <td width="350"><strong>Visiting Unit:</strong></td>
     <td>&nbsp;<?php echo $visiting_unit  ; ?></td>
  </tr>
 
   <tr>
    <td width="350"><strong>Contact Person:</strong></td>
     <td>&nbsp;<?php echo $contact_person  ; ?></td>
  </tr>
  
  <tr>
     <td><strong>Visit Reason</strong></td>
     <td>&nbsp;<?php echo $visit_reason  ; ?></td>
  </tr>
  <tr>
    <td width="350"><strong>Date:</strong></td>
     <td>&nbsp;<?php echo $date  ; ?></td>
  </tr>
  <tr>
    <td width="350"><strong>Visitor In Time:</strong></td>
     <td>&nbsp;<?php echo $visitor_in_time  ; ?></td>
  </tr>
 <!-- <tr>
    <td width="350"><strong>Visitor Out Time:</strong></td>
     <td>&nbsp;<?php //echo $datex  ; ?></td>
  </tr>-->
  <tr>
    <td width="350"><strong>Remarks: </strong><br/></td>
     <td style="color:blue">&nbsp;<?php echo $remarks  ; ?></td>
  </tr>
  <tr>
   <!-- <td scope="row"><strong>Sanctioning Authority Email Remark: </strong>-->
    <?php
    //if($line_accept==1) {  $c="#030" ; $c1="Accept" ; } elseif($line_accept==2) { $c='#F60' ; $c1="Pending" ; } elseif($line_accept==3) { $c='#FFFF00' ; $c1="OnProg." ; }  elseif($line_accept==0) { $c='#F00' ; $c1="Reject" ; }
	
	// echo '<span style="color:'.$c.'">'.$c1.'</span>'; 
	
	?>    
   
 
    
    <!-- </td>-->
    <!--<td scope="row">  <strong>Time</strong>: <?php //echo $line_accept_date ; ?></td>-->
    
  </tr>
  <tr>
    <td width="350"><strong>Status: </strong></td>
    <td>
     <?php
  if($visitor_in_time) 
  { 
   $c='#F60' ; $c1="Pending" ;
   }
     
   elseif($visitor_out_time) 
   {  
  $c="#030" ; $c1="Ok" ;
  }
   
    //elseif($hr_accept==3)
	 { 
	 /*$c='#FFFF00' ; $c1="OnProg." ;*/
	  }  
	 // elseif($hr_accept==0) 
	  { 
	 /* $c='#F00' ; $c1="Reject" ;*/
	   }
	
	 echo '<span style="color:'.$c.'">&nbsp;'.$c1.'</span>'; 
	
	?></td>
   <!-- <td scope="row"><strong>Time </strong>: <?php //echo $hr_accept_date ; ?></td>-->
  </tr>
</table>