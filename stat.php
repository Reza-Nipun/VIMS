
<?php

	
?>
<div class="stats">
<ul>
    <p class="stat">Card not returned<span class="number">
	<a href="index1.php?rid=no">
	<?php echo $totalvisitory ;
	
	// I think checking of if($totalvisitory==NULL) has no need.
	/*if($totalvisitory==NULL)
	{ echo '0'; }
	
	else 
	{ echo $totalvisitory ;  }*/
		
	?>
    </a>
        
    </span></p>
    <!--<p class="stat"><span class="number"><?php //echo $totalvisitory ; ?> </span>card not returned</p>-->
    <p class="stat">Card returned&nbsp;<span class="number"><a href="card_returend.php"><?php echo $totalvisitorx ; ?></a></span></p>
    <p class="stat">Total visitor&nbsp;<span class="number"><?php echo $totalvisitor ; ?></span></p>
   </ul> 
</div>