
  
  
<tr>
    <th scope="col" style="color:#000" align="left">Carrier :</th>
    <td align="center">
     <label><input name="carrier" type="radio" value="DHL" id="field2" >
   		<img src="dhl_logo.gif" height="50" width="80"></label>
     <label><input name="carrier" type="radio" value="FEDEX" id="field3">
   		 <img src="fedex_logo.jpg" height="40" width="80"></label>
     <label><input name="carrier" type="radio" value="UPS" id="field4">
   		 <img src="ups_logo.jpg" width="80" style="height:50px !important "></label>
     <label><input name="carrier" type="radio" value="TNT" id="field5">
   		 <img src="TNT_logo.jpg" height="40" width="80"></label>
    </td>    
  </tr>
  
  
  <tr>
    <th scope="col" style="color:#000">&nbsp;</th>
    <td style="color:#000">
    	<label>    
    	
   		 Shippers Account: 
    	<input type="text" name="shipper_account" value="525058700" readonly="readonly" class="DEPENDS ON carrier BEING DHL" id="shipper_account">
    	</label>
        
        <label>    
  
   		 Shippers Account: 
    	<input type="text" name="shipper_account" value="0018" readonly="readonly" class="DEPENDS ON carrier BEING FEDEX" id="shipper_account">
    	</label>
        
        <label>    
   
   		 Shippers Account: 
    	<input type="text" name="shipper_account" value="0015" readonly="readonly" class="DEPENDS ON carrier BEING UPS" id="shipper_account">
    	</label>
        <label>  
          
   
   		 Shippers Account: 
    	<input type="text" name="shipper_account" value="0016" readonly="readonly" class="DEPENDS ON carrier BEING TNT" id="shipper_account">
    	</label>
  	</td>
  </tr>

