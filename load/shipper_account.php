
  <!--<tr>
    <th style="color:#000">Reason</th>
    <td align="left" style="color:#000">
    <input name="reason_title" type="hidden" value="Reason" />
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Late entry due to personal reason" id="reason_0">
          Late entry due to personal reason</label>
        <br>
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Late entry due to official reason" id="reason_1">
          Late entry due to official reason</label>
        <br>
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Late entry due to pool transport" id="reason_1">
          Late entry due to pool transport</label>
        <br>
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Early out due to personal reason" id="reason_1">
          Early out due to personal reason</label>
        <br>
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Early out due to official reason" id="reason_1">
          Early out due to official reason</label>
        <br>
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="In punch miss" id="reason_1">
          In punch miss</label>
        <br>
        
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Out punch miss" id="reason_1">
          Out punch miss</label>
        <br>
        
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Others" id="reason_1">
          Others</label>
        <br>
        
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Out Station Duty" id="reason_1">
          Out Station Duty </label>
      
        
      </td>
  </tr>
  <tr>
    <th scope="col" style="color:#000">&nbsp;</th>
    <td style="color:#000">
    <label>    
    <input name="field2_title" type="hidden" value="Destination" />
    Destination: 
    <input type="text" name="field2" class="DEPENDS ON reason BEING Out Station Duty" id="field2">
    </label>

  <label>Days
  <input name="field3_title" type="hidden" value="Days" />
  
<select name="field3" class="DEPENDS ON reason BEING Out Station Duty"  id="field3">
  <option selected>(select)</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>

</select>
  </label>
  
  </td>
  </tr>-->
  
  
  
  
<tr>
    <th scope="col" style="color:#000" align="left">Carrier :</th>
    <td>
     <label><input name="carrier" type="radio" value="DHL" >
   		<img src="../dhl_logo.gif" height="50" width="80"></label>
     <label><input name="carrier" type="radio" value="FEDEX">
   		 <img src="../fedex_logo.jpg" height="40" width="80"></label>
     <label><input name="carrier" type="radio" value="UPS">
   		 <img src="../ups_logo.jpg" width="80" style="height:50px !important "></label>
     <label><input name="carrier" type="radio" value="TNT">
   		 <img src="../TNT_logo.jpg" height="40" width="80"></label>
    </td>    
  </tr>
  
  
  <tr>
    <th scope="col" style="color:#000">&nbsp;</th>
    <td style="color:#000">
    	<label>    
    	<input name="field2_title" type="hidden" value="shipper account" />
   		 Destination: 
    	<input type="text" name="field2" class="DEPENDS ON carrier BEING Out DHL" id="field2">
    	</label>
        
        <label>    
    	<input name="field3_title" type="hidden" value="shipper account" />
   		 Destination: 
    	<input type="text" name="field2" class="DEPENDS ON carrier BEING FEDEX" id="field3">
    	</label>
        
        <label>    
    	<input name="field4_title" type="hidden" value="shipper account" />
   		 Destination: 
    	<input type="text" name="field2" class="DEPENDS ON carrier BEING UPS" id="field4">
    	</label>
        <label>  
          
    	<input name="field5_title" type="hidden" value="shipper account" />
   		 Destination: 
    	<input type="text" name="field2" class="DEPENDS ON carrier BEING TNT" id="field5">
    	</label>
  	</td>
  </tr>

