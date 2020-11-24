<script src="FormManager.js">
/****************************************************
* Form Dependency Manager- By Twey- http://www.twey.co.uk
* Visit Dynamic Drive for this script and more: http://www.dynamicdrive.com
****************************************************/
</script>

<script type="text/javascript">
window.onload = function() {
    setupDependencies('Form1'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
  };
</script>
<form action="" name="Form1">
  <p>
    <label>Linux<input type="radio" name="os" value="linux"></label>
    <label>Windows<input type="radio" name="os" value="windows"></label>

   
<br>

    <label>Destination<input type="text" name="field2" class="DEPENDS ON os BEING windows" id="field2"></label>


  <label>Days
<select name="field3" class="DEPENDS ON os BEING windows" id="field3">
  <option selected>(select)</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
  </label>
    

  </p>
</form>