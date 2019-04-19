<?php

	$pname = $_GET['t1'];
	$Price = $_GET['t2'];
	$Description= $_GET['t3'];
	$image=$_GET['t4'];
	$Categoary_Id=$_GET['t5'];
	include_once "sb.php";
        	
	try
	{
		$db = new PDO(DB_INFO,DB_USER,DB_PASS);
		
		$sql = "insert into software (pname,Price,Description,image,Category_Id) values(?,?,?,?,?)";
		$stmt=$db->prepare($sql);
		$stmt->execute(array($pname,$Price,$Description,$image,$Categoary_Id));
		$stmt->closecursor();
	       
	}
	catch(Exception $e)
	{
		echo "Error : ".$e;
	}
	     

?>