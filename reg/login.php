<?php

session_start();

if(!empty($_SESSION['id'])){
	
	header("location:index.php");
}

?>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
		<style type="text/css">
      
			body{background-image:url(LAPTOP.jpg);}
		
			.row{height: 300px;
			     width: 350px;
			     background-color: aqua;}
		
		</style>
		
		
	</head>
	<body>
		<div class="container">
		<div class="hello d-flex justify-content-center">
		<div class="row mt-5 pt-5">
	<form action="loginback.php" method="post">
       <p><label> USER NAME </label> &nbsp; &nbsp; 
		<input type="text" name="name"></p>

		<p><label> PASSWORD </label> &nbsp; &nbsp; 
		<input type="password" name="password"></p>	
		
			<input type="submit" value="login" name="login">
	</form>
			</div>
			</div>
		</div>
	<script src="jquery-3.6.4.min.js"></script>
	<script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
			
	</body>
	
</html>