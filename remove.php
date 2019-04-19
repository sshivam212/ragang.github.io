<?php
       $pid=$_GET['pid'];;
	
	      try{
	          include_once "sb.php";
	          $sb=new PDO(DB_INFO,DB_USER,DB_PASS);
	          $sql="delete from cart where pid=?";
	          $stmt=$sb->prepare($sql);
		      $stmt->execute(array($pid));
		      $stmt->closecursor();
		
		      header("Location:displaycart.php");
		  
		     }catch(Exception $e)
		      {
			    echo "Error";
		      }

?>