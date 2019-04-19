<html>
	<head>
		<style>
			.rpanel{
				width:75%;
				padding:10;
				
				
			}

			
		</style>
	
	</head>
	<body>
		<?php 		
			include_once "header.php";
			include_once "sb.php"; 
		?>
		<div>
			<div  class="rpanel">
				<?php	
					
					$uid=$_SESSION['uid'];
					try
					{
						$sb = new PDO(DB_INFO,DB_USER,DB_PASS);
			
						$sql="Select software.pid, pname, Price, image, Category_Id FROM software,cart where cart.pid=software.pid and status=0 and uid=$uid";
						
						$found=false;
						foreach($sb->query($sql) as $row)
						{
							$found=true;
				?>
							<div style="padding:10px;margin-top:5px;border:2px solid red;overflow:auto;">	
								<div style="float:left;width:200;">
									<img style="width:150;height:150;" src = "<?php echo "images/".$row['image'];?>">
								      <a href="remove.php?pid=<?php echo $row['pid'];?>" style="padding-left:100%;text-decoration:none;">Remove</a>
								</div>
								<div style="float:left;">
									<div><?php echo $row['pname'];?></div>
									<div><?php echo $row['Price'];?></div>
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
									<div>
											<?php if($found==true){?>
												<a href="pay.php" style="padding-left:30%;text-decoration:none;">Proceed to pay</a>
											<?php }else {?> Cart is empty <?php } ?>
									</div>

		</div>
	</body>
</html>
