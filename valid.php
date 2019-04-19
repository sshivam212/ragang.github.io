<?php

	$Email = $_GET['t1'];
	$Password = $_GET['t2'];
	
	include_once "sb.php";
	session_start();
	
	try
	{
		$sb = new PDO(DB_INFO,DB_USER,DB_PASS);
		
		$sql = "Select * from  customerdetail where Email='$Email' and Password= '$Password'";
		
		$found=false;
		
		foreach($sb->query($sql) as $row)
		{
			$found=true;
			$_SESSION['uid']=$row['Cid'];
			$_SESSION['uname']=$row['cname'];
		}
		
		
		if($found==true)
			header("Location:products.php");
		else
			header("Location:customerlogin.php?msg=Invalid username or password");
	}
	catch(Exception $e)
	{
		echo "Error : ".$e;
	}

?>