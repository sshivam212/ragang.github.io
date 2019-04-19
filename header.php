<html>
<head>
<title>Homepage</title>
<style>
         
.menu           {
            background-color: #f1f1f1;
            color:blue;
			border-bottom-width:2px;
            border-bottom-color:black;
            border-bottom-style: solid;
            text-align:center;
            font-size:18px;
            overflow:hidden;
            
}
</style>
</head>
<body>
<?php
		session_start();
	?>
     <div class="menu">
		<div style="border:0px solid red;overflow:auto;width:15%;float:left;">
			<h1 style ="float:left;padding:20;">Ragang</h1>
		</div>
		<div style="float:right;width:80%;">
			<div  style="border:0px solid blue;overflow:auto;">
				<div style="float:right;padding:20;"><a style="text-decoration:none;color: blue;" href="contact.php">Contact us</a></div>
				<div style="float:right;padding:20;">Company</div>
				<div style="float:right;padding:20;">Knowledge Base</div>
				<div style="float:right;padding:20;">Partner</div>
				<div style="float:right;padding:20;">Product</div>
				<div style="float:right;padding:20;"><a style="text-decoration:none"; href="products.php">Home</a></div>
			    
			
			</div>
		
			<div  style="border:0px solid green;overflow:auto;margin-top:60px;">
			<?php
				if(isset($_SESSION['uid']))
				{?>
					<a href="displaycart.php" style="float:right;text-decoration:none;">Display Cart</a>
					<a href="signout.php" style="float:right;text-decoration:none;margin-right:10px;">Sign Out | </a> 
				<?php } else { ?>
					<a href="customerlogin.php" style="float:right;text-decoration:none;margin-right:10px;">Login</a> 
					<a href="customer.php" style="float:right;text-decoration:none;">Signup | </a> 
			<?php	}?>
			</div>
		</div>
	</div>
	
</body>
</html>

