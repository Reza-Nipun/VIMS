<script src="FormManager.js">
/****************************************************
* Form Dependency Manager- By Twey- http://www.twey.co.uk
* Visit Dynamic Drive for this script and more: http://www.dynamicdrive.com
****************************************************/
</script>

<script type="text/javascript">
window.onload = function() {
    setupDependencies('weboptions'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
  };
</script>
<form action="" name="weboptions">
  <p>
    <label>Linux<input type="radio" name="os" value="linux"></label>
    <label>Windows<input type="radio" name="os" value="windows"></label>
    <label>Password:<input type="password" name="pass"></label>
    <label style="margin-bottom: 1em; padding-bottom: 1em; border-bottom: 3px silver groove;"><input type="hidden" class="DEPENDS ON os BEING linux OR os BEING windows"></label>
    <label>SSH<input type="checkbox" name="ssh" class="DEPENDS ON os BEING linux"></label>
    <label>IIS<input type="checkbox" name="iis" class="CONFLICTS WITH apache AND DEPENDS ON os BEING windows"></label>
    <label>ASP<input type="checkbox" name="asp" class="DEPENDS ON os BEING windows AND DEPENDS ON iis"></label>
    <label>Insecurity<input type="checkbox" name="insecurity" class="DEPENDS ON os BEING windows AND DEPENDS ON iis"></label>
    <label>Frequent Crashes<input type="checkbox" name="crashes" class="CONFLICTS WITH apache AND DEPENDS ON os BEING windows"></label>
    <label>Apache<input type="checkbox" name="apache" class="DEPENDS ON os BEING linux OR os BEING windows AND CONFLICTS WITH iis"></label>
    <label style="margin-bottom: 1em; padding-bottom: 1em; border-bottom: 3px silver groove;"><input type="hidden" class="CONFLICTS WITH pass BEING EMPTY"></label>
    <label>Super secret hidden stuff!<input type="hidden" class="DEPENDS ON pass BEING password"></label>
  </p>
</form>