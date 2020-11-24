<?php
include "db_Class.php";
$obj = new db_class();
$obj->MySQL();

// To properly get the config.php file

	$username=$_POST['username'];
	$username=mysql_real_escape_string($username);
	
	$password=$_POST['password'];
	$password=mysql_real_escape_string($password);
	
	//$url=$_GET['URL'];

$msg ='';

if(isset($username, $password)) 
	{
    $sql="SELECT * FROM tb_admin WHERE user_name='$username' and password='$password' and project='VIMS'";
	$result=$obj->sql($sql);
	//$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($result))
	{
		$rule=$row['rule'];
	}
	
	
    $count=mysql_num_rows($result);
	
	
	
    if($count==1){
		
		if('123456'==$pin)
		{
		session_start(); //Start the session
        $_SESSION['username']= $username;
	//	$_SESSION['pin']= $pin;
		header("location:forced.php");
		}
		else
		{
        // Register $myusername, $mypassword and redirect to file "admin.php"
		session_start(); //Start the session
        $_SESSION['username']= $username;
		
		if($rule==2)
		{
        header("location:report.php");
		}
		else
		{
		 header("location:submit_problem1.php");
		}
		
		
		}
	}
    else {
        $msg ="<font color='red'>Wrong Username or Password. Please retry</font>";
        header("location:index.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:index.php?msg=Please enter some username and password");
}
?>