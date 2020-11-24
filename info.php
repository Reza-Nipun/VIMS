<script type="info/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#mobile_no").change(function()
{
var dis=$(this).val();

var res = dis.split("~"); 
var a = res[0];
var b = res[1];


/*alert(a);
alert(b);
*/


var dataString = 'dis='+ a;
//alert(dataString);








if (b == undefined) {

 //Search by Cell Number !!!

		//alert('Search by Cell Number !!!');
	 
		$("#input_iv_mobile_no").attr("required", false);

		$.ajax
		({
		type: "POST",
		url: "info/visitor_name.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$("#visitor_name").html(html);
		//$("#visitor_name2").value(html);
		} 
		});
		
		
		
		
		$.ajax
		({
		type: "POST",
		url: "info/visitor_company_name.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$("#visitor_company_name").html(html);
		} 
		});
		
		
		$.ajax
		({
		type: "POST",
		url: "info/visitor_address.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$("#visitor_address").html(html);
		} 
		});






}






else {
	 
 //Search by Nick Name !!!

	 $("#td_iv_mobile_no").show();
     $("#td_visitor_address").hide();
	 $("#input_visitor_address").attr("required", false);


	 /*$('#iv_mobile_no').removeAttr('required');
	 $('#visitor_address').removeAttr('required');*/
	 
	/* $("#iv_mobile_no").required(false);
	 $("#visitor_address").required(false);*/

	 
		$.ajax
		({
		type: "POST",
		url: "info/visitor_name_1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$("#visitor_name").html(html);
		} 
		});
		
		
		
		
		$.ajax
		({
		type: "POST",
		url: "info/visitor_company_name_1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$("#visitor_company_name").html(html);
		} 
		});
		
		
		$.ajax
		({
		type: "POST",
		url: "info/visitor_mobile_no_1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$("#iv_mobile_no").html(html);
		} 
		});

			 
}















});
});
</script>

