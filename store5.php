<?php

	$cname = $_GET['t1'];
	$Country = $_GET['t2'];
	$Phone = $_GET['t3'];
	$Email=  $_GET['t4'];
	$Password=$_GET['t5'];
	include_once "sb.php";
        	
	try
	{
		$db = new PDO(DB_INFO,DB_USER,DB_PASS);
		
		$sql = "insert into customerdetail (cname,Country,Phone,Email,Password) values(?,?,?,?,?)";
		$stmt=$db->prepare($sql);
		$stmt->execute(array($cname,$Country,$Phone,$Email,$Password));
		$stmt->closecursor();
	       
	}
	catch(Exception $e)
	{
		echo "Error : ".$e;
	}
	     

?>