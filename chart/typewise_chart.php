
  <?php 
 	include "../db_Class.php";
  	$obj = new db_class();
	$obj->MySQL(); 	
	
	

//$datex = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));
//$date=$datex->format('m-d-Y');

	//$date1=$_GET['date1'];
	//$date2=$_GET['date2'];


//require("../admin/date_to_month.php");
//$month_value=$m


	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>VIYELLATEX</title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Type', 'Total Visitor'],        
		   <?php	
		 
$SQL="SELECT count( sl ) AS total, sub_type FROM tb_visitor_info where sub_type!='' and sl!='' GROUP BY `sub_type`"; 
$results = $obj->sql($SQL);
while($row = mysql_fetch_array($results))
{
  	$total=$row['total'];
  	$sub_type=$row['sub_type'];	
	echo "['$sub_type',$total],";   

}	
  ?> 
		
        ]);
      
        // Create and draw the visualization.
        var chart = new google.visualization.PieChart(document.getElementById('visualization'))
        chart.draw(data, {title:"Type wise Report"});
        
           google.visualization.events.addListener(chart, 'select', function()
		{
          var row = chart.getSelection()[0].row;
          var element = data.getValue(row, 0);
          var element1 = data.getValue(row, 1);
		
		 window.open("typewise_details.php?chk=" + element + "&chk1=" + <?php echo $date ; ?> +"","mywindow","menubar=1,resizable=1,scrollbars=1,width=700,height=490,left=20,top=90,location=yes");
	  colors:['red','#000000'];
	 
	    }
		
        );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="font-family: Arial;border: 0 none;">
  <div id="visualization" style="width: 430px; height: 300px; left:-40px"></div>
  </body>
</html>

​