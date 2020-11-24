
  <tr>
    <th style="color:#000">Certificate Type</th>
    <td align="left" style="color:#000">
    <input name="reason_title" type="hidden" value="Category" />
    
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Salary Certificate" id="reason_0">
          Salary Certificate</label>
        <br>
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Employment Certificate" id="reason_1">
          Employment Certificate</label>
        <br>
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Tax Certificate" id="reason_1">
          Tax Certificate</label>
        
      <br>
      

   
        
      </td>
  </tr>
  <tr style="color:#000">
    <th scope="col" style="color:#000">&nbsp;</th>
    <td>
    
    <input name="field2_title" type="hidden" value="type" />
    
     <label>Type <span style="color:#F00" title="Must be filled">(required)</span>
  <select name="field2" class="DEPENDS ON reason BEING Salary Certificate" id="field2">
  <option selected>(select)</option>
  <option value="HSBC">HSBC</option>
  <option value="EBL">EBL</option>
  <option value="SCB">SCB</option>
  <option value="Brac Bank">Brac Bank</option>
  <option value="Other">Other</option>
</select>
</label>

<label>Type <span style="color:#F00" title="Must be filled">(required)</span>
<select name="field2" class="DEPENDS ON reason BEING Employment Certificate" id="field2" multiple="multiple">
  <option selected>(select)</option>
  <option value="Education">Education</option>
  <option value="Business Travels">Business Travels</option>
  <option value="Others">Others</option>
  <option value="Brac Bank">Brac Bank</option>
  <option value="Other">Other</option>
</select>
</label>



<label>Type <span style="color:#F00" title="Must be filled">(required)</span>
<select name="field2" class="DEPENDS ON reason BEING Tax Certificate" id="field2" multiple="multiple">
  <option selected>(select)</option>
  <option value="TIN">TIN</option>
  <option value="Tax Assesment">Tax Assesment</option>
</select>
  </label>

    
    
     <label> <input name="field3_title" type="hidden" value="Purpose" />Purpose <span style="color:#F00">*</span><input type="text" name="field3" class="DEPENDS ON reason BEING Salary Certificate OR reason BEING Employment Certificate OR reason BEING Tax Certificate" required autofocus id="field2"></label>

  </td>
  </tr>
  
    
