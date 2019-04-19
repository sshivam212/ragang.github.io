<html>
<head>
<title>productDetail</title>
<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:400; 
  height:400;
  margin-top: 30px;
  margin-left: 10px;
}
 .btn1{
	 margin-left:3%;
	 background-color: #7DC855;
     border-radius: 6px;
     font-size: 16px;
     color: #FFFFFF;
     text-decoration: none;
     padding: 10px 40px;
     transition: all .5s;
 }
 .btn2{
	 
	 
     background-color: #7DC855;
     border-radius: 6px;
     font-size: 16px;
     color: #FFFFFF;
     text-decoration: none;
     padding: 10px 40px;
     transition: all .5s;
 }
.price{
  margin-left:18%;
  font-size: 26px;
  color: #43474D;
  float:left;
  margin-top:-1%;
}

.pdp {
  font-size: 20px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.lpanel{
				width:40%;
				padding:auto;
				
				float:left;
			}
.rpanel{
           
				width:50%;
				padding:auto;
				
				float:left;
			
}
			
		.t{
			text-align:center;
			color: #43484D;
		}	
 
</style>
</head>
<body>
<?php 
    $pid=$_GET['pid'];
	$pname="";
	$Price="";
	$Description="";
	$image="";
	$Category_ID="";
	
		include_once "sb.php";
		include_once "header.php";    
		try{
				   $sb=new PDO(DB_INFO,DB_USER,DB_PASS);
				   $sql="Select * from software where pid=$pid";
				 foreach($sb->query($sql) as $row)
				{
				    
					$pname=$row['pname'];
					$Price=$row['Price'];
					$Description=$row['Description'];
					$image=$row['image'];
					$Category_ID=$row['Category_Id'];

			
				} 
			  }catch(Exception $e)
			  {	               
				   echo "Error".$e;
			}
			              

?>

		<div>
		<div class="lpanel">
			<img src = "<?php echo "images/$image";?>" class="card">
		</div>
		<div class="rpanel">
			<h1 class="t"><?php echo "$pname"; ?></h1>
			
			<ul class="pdp"><?php echo "$Description"; ?></ul>
			<div class="price" ><span>$<?php echo "$Price"; ?></span></div>	
			<a href="addtocart.php?pid=<?php echo $row['pid']; ?>" class="btn1">Add to cart</a>
		    <a href="download.php" class="btn2">Free Download</a>
		    <div class="price"<?php echo "$"."$Price"; ?></div>	
		
		
		</div>
	</div>
	
</body>
</html>