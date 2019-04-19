<html>
	<head>
		<style>
			.alpanel{
				text-decoration:none;
				color:blue;
				font-size:20px;
			}
			.lpanel{
				width:20%;
				padding:10;
				border-right:2px solid black;
				float:left;
			}
			.rpanel{
				width:70%;
				padding:10;
				border-left:2px solid black;
				float:left;
			}
			.cat123{
				width:70%;
				padding:10;
				border-left:2px solid black;
			}
			.cat_item{
				padding:10;
				border:2px solid black;
				background-color:#f1f1f1;
				
			}
			.prod_item{
				padding:10;
				border:2px solid black;
				background-color:#f1f1f1;;
				text-color:white;
				width:180px;
				height:180px;
				float:left;
				margin-top:5px;
				margin-left:5px;
				
			}
			
			.prod_img{
				padding:10;
				border:2px solid black;
				width:150px;
				height:125px;
			}
			
		</style>
	
	</head>
	<body>
		<?php 		
			include_once "header.php";
			include_once "sb.php"; 
		?>
		<div>
			<div class="lpanel">
				<?php	
					try
					{
						$sb = new PDO(DB_INFO,DB_USER,DB_PASS);
						$sql = "Select * from  category";
						foreach($sb->query($sql) as $row)
						{
				?>
								<div>
									<div class="cat_item">
										<a class="alpanel" href="products.php?cid=<?php echo $row['cid'];?>"><?php echo $row['cname'];?></a>
									</div>
								</div>
				<?php 
						}
					}
					catch(Exception $e)
					{
						echo "Error : ".$e;
					}
				?>
			
			</div>
			<div  class="rpanel">
				<?php	
					$cid=1;
					
					if(isset($_GET['cid']))
					{
						$cid  = $_GET['cid'];
					}
					try
					{
						$sb = new PDO(DB_INFO,DB_USER,DB_PASS);
						$sql = "Select * from  software where Category_Id=$cid";
						foreach($sb->query($sql) as $row)
						{
				?>
								<div class="prod_item">
							<img src = "<?php echo "images/".$row['image'];?>" class="prod_img">
										<a class="alpanel" href="productdetail.php?pid=<?php echo $row['pid'];?>"><?php echo $row['pname'];?></a>
								</div>
				<?php
						}
					}
					catch(Exception $e)
					{
						echo "Error : ".$e;
					}
				?>
			
			
			
			</div>		
		</div>
	</body>
</html>
