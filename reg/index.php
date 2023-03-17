


<?php

session_start();

$id = $_SESSION["id"];

$name=$_SESSION["name"];

if(empty($_SESSION["id"])){
	
	header("location:registration.php");
}


?>


<html>
	<body>
		<h1><?php echo $name ?>WELCOME TO LOGIN PAGE</h1>
		<a href="logout.php"><button>LOGOUT</button></a>
		<a href="registration.php"><button>REGISTRATION</button></a>
		<a href="login.php"><button>LOGIN</button></a>
	</body>
</html>