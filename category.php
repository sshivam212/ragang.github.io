<?php 
    $cid    = $_GET['t1'];       
	$cname =  $_GET['t2'];
    
	include_once "sb.php";
	               try{
				          $db=new PDO(DB_INFO,DB_USER,DB_PASS);
                          $sql="insert into category(cid,cname) values(?,?)";
 						  $stmt=$db->prepare($sql);
						  $stmt->execute(array($cid,$cname));
				          $stmt->closecursor();   
					  
					  }catch(Exception $e)
		                     {
							        echo "ERROR".$e;
							 }
						  
?>