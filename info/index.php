<?php
include "../db_Class.php";
//$search = $HTTP_POST_VARS['search'];
$obj = new db_class();
$obj->MySQL();


session_start();
	
// Authentication check

$u=$_SESSION["user"];
	$SQL="select * from tb_email where student_id= '$u'";
		$obj->sql($SQL);

		while($row = mysql_fetch_array($obj->result))
				{  
	
					$student_id= $row['student_id'];
					$student_name=$row['student_name'];
					$department= $row['student_dept'];
					}
	

session_destroy();



/*
session_start();
	
// Authentication check

$u=$_SESSION["user1"];
//$u= $_GET['ID'];				
	
	// tb_dis_thana
		$SQL="select * from tb_email where student_id= '$u'";
		$obj->sql($SQL);

		while($row = mysql_fetch_array($obj->result))
				{  
	
					$student_id= $row['student_id'];
					$student_name=$row['student_name'];
					$department= $row['student_dept'];
					}
	
	if ($u==NULL)
{
session_destroy();
header("location:../index.php");
}
else
{

$_SESSION['user']=$_SESSION['user1'];
unset($_SESSION['user1']);
}
	
// if user name and password right then go to step1_1.php else go to step2.php 
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<?php require "../require/head.php"; ?>

</head>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="CalendarControl.js"></script>
<link rel="stylesheet" href="CalendarControl.css" type="text/css" media="screen" title="default" />


<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var dis=$(this).val();
var dataString = 'dis='+ dis;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});

});
</script>



<script type="text/javascript">
$(document).ready(function()
{
$(".country1").change(function()
{
var dis=$(this).val();
var dataString = 'dis='+ dis;

$.ajax
({
type: "POST",
url: "ajax_city1.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city1").html(html);
} 
});

});

});
</script>
<body class="home blog">
<!--*********************************wrapper**************************************-->
<div id="wrapper" class="">
  <!--*********************************header**************************************-->
  <?php require "../require/header.php"; ?>
  <!--*********************************/header**************************************-->
  <!--*********************************SexySlider **************************************-->
  <?php // require "require/sexyslider.php"; ?>
  <!--*********************************/SexySlider **************************************-->
  <!--*********************************result**************************************-->

  <div class="blog_round_top">
        <div class="round_middle">
        <div class="box">

          <div class="sidebar">
              <div class="widget">
                <h2>Student Details</h2>
				<?php include("std_info_right.php"); ?>
                
                   </div>
          </div>   
          <div class="content"> 
          
          
<form id="survey" name="form1" method="post" action="save_survey.php" enctype="multipart/form-data">
			  <h2>IUBAT Students Information			 </h2>
		     <table width="86%" border="1" cellspacing="1" cellpadding="1" style="font-size:14px; font-weight:bold">
		       <tr valign="top">
    <td width="28%" scope="col">Name</td>
    <td width="72%" scope="col"><input name="name" type="text" id="name" value="<?php echo $student_name ; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td scope="row">ID</td>
    <td><input name="stu_id" type="text" id="stu_id" value="<?php echo $student_id ; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td scope="row">Department</td>
    <td><input name="stu_dept" type="text" id="stu_dept" value="<?php echo $department ; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td scope="row">Email</td>
    <td><input name="email" type="email" id="email" placeholder="name@domain.com"/></td>
  </tr>
  <tr>
    <td scope="row">Date Of Birth</td>
    <td>
    <select name="birthday_day" id="birthday_day" aria-label="Day" class=""><option value="-1">Day:</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> <select name="birthday_month" id="birthday_month" aria-label="Month" class="" onchange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, &quot;birthday_day&quot;, &quot;birthday_year&quot;);});"><option value="-1">Month:</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select> <select name="birthday_year" id="birthday_year" aria-label="Year" class="" onchange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});"><option value="-1">Year:</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
   <!-- <input name="date2" type="text" onfocus="showCalendarControl(this);" >--></td>
  </tr>
  <tr>
    <td scope="row">Mobile</td>
    <td><input name="mobile" type="text" id="mobile" required autofocus/></td>
  </tr>
  <tr>
    <td scope="row">Blood Group      </td>
    <td><input name="blood" type="text" id="blood" required autofocus/>
      </td>
  </tr>
  <tr>
    <td scope="row">Postal Address</td>
    <td><input name="address1" type="text" id="address1" required autofocus/></td>
  </tr>
  <tr>
    <td scope="row">District(postal)</td>
    <td>
    
     <select name="district" class="country" id="district">
<option selected="selected">--Select District--</option>
<?php

$SQL="select * from tb_dis_thana group by dis";
		$obj->sql($SQL);

		while($row = mysql_fetch_array($obj->result))
				{ 
				

$dis=$row['dis'];
echo '<option value="'.$dis.'">'.$dis.'</option>';
} ?>
</select> 
    <!--  <iframe id="FCKeditor1___Frame" src="iframe.php" width="370" height="90"></iframe>--></td>
  </tr>
  <tr>
    <td scope="row">Thana(Postal)</td>
    <td>
    <select name="thana" class="city" id="thana">
<option selected="selected">--Select Thana--</option>
</select>
    	
    </td>
  </tr>
  <tr>
        <td scope="row">Parmanent Address</td>
    <td><input name="address2" type="text" id="address2" required autofocus/></td>
  </tr>
  <tr>
    <td scope="row">District(Home)</td>
    <td><select name="district1" class="country1" id="district1">
<option selected="selected">--Select District--</option>
<?php

$SQL="select * from tb_dis_thana group by dis";
		$obj->sql($SQL);

		while($row = mysql_fetch_array($obj->result))
				{ 
				

$dis=$row['dis'];
echo '<option value="'.$dis.'">'.$dis.'</option>';
} ?>
</select></td>
  </tr>
  <tr>
    <td scope="row">Thana</td>
    <td><select name="thana1" class="city1" id="thana1">
<option selected="selected">--Select Thana--</option>
</select></td>
  </tr>
  <tr>
    <td scope="row">&nbsp;</td>
    <td><input id="Submit" type="submit" name="Submit" value="Submit" /></td>
  </tr>
</table>

			</form>

          </div>

        </div>
        </div>
        <div class="round_bottom"></div>
      
  </div>
  <!-- ********************************/result ************************************-->
  <?php // require "require/round1.php"; ?>
  <?php // require "../require/round3.php"; ?>
  <!--*********************************/round**************************************-->
  <!--*********************************footer**************************************-->
  <?php // require "../require/footer.php"; ?>
  <!--*********************************/footer*************************************-->
</div>
<!--*********************************/wrapper**************************************-->
<?php require "../require/ftjs.php"; ?>
</body>
</html>