<style>
.thumb {
width:400px;
border: 1px solid #000;
margin: 10px 5px 0 0;
}
</style>
  <tr>
    <th style="color:#000">Leave Type <input name="reason_title" type="hidden" value="Leave Type" /></th>
    <td align="left" style="color:#000">
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Annual Leave" id="reason_0">
          Annual Leave  </label>
        <br>
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Casual Leave" id="reason_1">
          Casual Leave <?php $a='Casual Leave' ;?></label>
        <br>
         <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Sick Leave" id="reason_1">
          Sick Leave <?php $a='Sick Leave' ;?></label>
		<br>
        
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Maternity Leave" id="reason_1">
          Maternity Leave <?php $a='Maternity Leave' ;?></label>
		<br>
        
          <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Replacement Leave" id="reason_1">
          Replacement Leave <?php $a='Replacement Leave' ;?></label>
		<br>
        
        
        
        <label>
          <input type="radio" name="reason" style="width:20px" required autofocus value="Leave without pay" id="reason_1">
          Leave without pay <?php $a='Leave without pay' ;?></label>
		<br>
        





      </td>
	  </tr>
  	<tr style="color:#000">
    <th scope="col" style="color:#000">&nbsp;</th>
    <td>
    
<!--<label class="DEPENDS ON reason BEING Annual Leave OR reason BEING Casual Leave">Leave Reason  <input type="text" name="field2" class="DEPENDS ON reason BEING Annual Leave OR reason BEING Casual Leave" id="field2_0"></label>-->

  <label><input name="field2_title" type="hidden" value="HIMS Prescription No" />HIMS Prescription No <input type="text" name="field2" class="DEPENDS ON reason BEING Sick Leave" id="field2_1"></label>
  <label>Days <input name="field3_title" type="hidden" value="Days" />
  <select name="field3" class="DEPENDS ON reason BEING Annual Leave OR reason BEING Casual Leave OR reason BEING Sick Leave OR reason BEING Maternity Leave OR reason BEING Replacement OR reason BEING Leave Leave without pay"  id="field3">
  <option selected>(select)</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="7+">7+</option>
  </select>
  </label>
  </td>
  </tr>
  
  <tr style="color:#000">
  <th scope="col" style="color:#000">&nbsp;</th>
    
<td><label>Upload Prescription : <input type="file" name="image" id="image" class="DEPENDS ON reason BEING Sick Leave OR reason BEING Maternity Leave"  /></label><br />
<div style="width:400px; height:auto">
<output id="list"></output></div>
<script>
function handleFileSelect(evt) {
var image = evt.target.files; // FileList object
// Loop through the FileList and render image files as thumbnails.
for (var i = 0, f; f = image[i]; i++) {
// Only process image files.
if (!f.type.match('image.*')) {
continue;
}
var reader = new FileReader();
// Closure to capture the file information.
reader.onload = (function(theFile) {
return function(e) {
// Render thumbnail.
var span = document.createElement('span');
span.innerHTML = ['<img class="thumb" src="', e.target.result,
'" title="', escape(theFile.name), '"/>'].join('');
document.getElementById('list').insertBefore(span, null);
};
})(f);
// Read in the image file as a data URL.
reader.readAsDataURL(f);
}
}
document.getElementById('image').addEventListener('change', handleFileSelect, false);
</script>
</td>
</tr>