<html>
<head>
<title>Login</title>
<style>
.form{
	         padding: 10px;
			 border:1px solid yellow;
			 background-color: #f1f1f1;
             margin-top:10px;
             
			 
          }
.heading{
	             
                 background-color: #f1f1f1;
                 color: blue;
                   				 
             }	
.loginform{
	         padding: 10px;
			 border:1px solid yellow;
			 background-color: #f1f1f1;
             width: 600;
			 margin-top:10px;
             border-radius:10px;
			 margin-top: 100;
			 margin-left: 400;
			 
             
		  }



</head>
<body>
</style>
<?php 
    include_once "header.php";
?>
	<div class ="loginform">
<?php
	if(isset($_GET['msg']))
	echo "<h1>".$_GET['msg']."</h1>";

?>
<h3>Please Login</h3>
<form action="valid.php" method="GET">
<div>Email</div>
<input type=text name="t1">
<div>Password</div>
<input type=Password name="t2">
<div>
<input type=submit name="btn" value="login">
</div>
</div>
</form>
</body>
</html>

