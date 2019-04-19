<html>
<html>
<head>
<title>my SQL</title>
</head>
<style>

          
.submitform{
	         padding: 10px;
			 border:1px solid yellow;
			 background-color: #f1f1f1;
             width: 300;
			 margin-top:10px;
             border-radius:10px;
			 margin-top: 100;
			 margin-left: 500;
          }
.submitheading{
	           
                 background-color: #f1f1f1;
                 color: red;
                 text-align: center;  				 
             }		  
</style>
<body>
<?php 
    include_once "header.php";
?>
<div class="submitform">
<h3 class="submitheading">Submit Your Detail</h3>
<form action="store5.php" method="GET">
<div>Enter name</div>
<input type=text name="t1">
<div>Enter Country</div>
<input type=text name="t2">
<div>Enter Phone</div> 
<input type=text name="t3">
<div>Enter Email</div>
<input type=text name="t4">
<div>Enter Password</div>
<input type=text name="t5">
<input type=submit name="btn" value="Submit">
</form>
</body>
</html>

