<?php

session_start();

if(!empty($_SESSION['id'])){
	
	header ("location:index.php");
}


?>


<html>
	<head>
		<title>my form</title>
		<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<style type="text/css">
		
			body{ background-image: url(background.jpg);
				  background-size: 1700px;
			
			}
			.pgl{width: 700px;
			     height: 400px;
			     background-color: wheat;
				border-radius: 25px;
			     }
		
		
			
		
		</style>
	</head>
	<body>
	
	
	
	<div class="container">
	
	
	<div class="wrapper d-flex justify-content-center">
	<div class="row pgl mt-5 pt-5">
	<div class="col">
	<h3>NEW REGISTRATION</h3>
		<form action="insertreg.php" method="post">
		<p><label>FULL NAME</label>
		<input type="text" name="name" placeholder="FULL NAME"></p>
		
		<p><label>EMAIL</label> &nbsp; &nbsp; &nbsp; &nbsp;
		<input type="email" name="email" placeholder="@gmail.com"></p>
		
		<p><label>MOBILE NO.</label>
		<input type="text" name="number" placeholder="9876543210"></p>
			
			<p><label>NEW PASSWORD</label>
		<input type="password" name="password"></p>
		
		<p><input type="submit" name="submit" value="register">
			</p>
			
			<a href="login.php"><div class="btn btn-secondary">LOGIN</div></a>
		</form>
		</div>
		
		
		<div class="col">
			<img src="marketing.jpg" width="300px" height="300px">
		</div>
		
		
 <script src=""></script>
<script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
		</div>
		</div>
		</div>
	</body>
</html>