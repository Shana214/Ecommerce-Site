<?php
	Session_start();
	if($_REQUEST['uname']=='username' && $_REQUEST['password']=='password')
	{
		$_SESSION['loginName']='admin';
		$_SESSION['passWord']='secured';
		echo "<script>alert('Login Successful!');</script>";
		echo "<script>window.location.href='admin-dashboard.html'</script>";
		}		
		else
	{
		echo "<script>alert('Unauthorized Login!');</script>";
		echo "<script>window.location.href='userlogin.php'</script>";		
	}
?>
