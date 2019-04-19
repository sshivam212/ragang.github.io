<html>
<head>
<title>productDetail</title>
<style>

</style>
</head>
<body>
<?php 
    include_once "sb.php";
		include_once "header.php";    
	
	$uid=$_SESSION['uid'];
	$pid=$_GET['pid'];
	$status=0;
        
		try{
		$sb = new PDO(DB_INFO,DB_USER,DB_PASS);
		
		$sql = "insert into cart (pid,uid,status) values(?,?,?)";
		$stmt=$sb->prepare($sql);
		$stmt->execute(array($pid,$uid,$status));
		$stmt->closecursor();
		
		
			
				} 
			  catch(Exception $e)
			  {	               
				   echo "Error".$e;
			}
			header("Location:products.php");
			?>

</body>
</html>