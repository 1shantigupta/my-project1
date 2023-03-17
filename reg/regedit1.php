<?php

include("conreg.php");

if(isset($_POST["submit"])){
	
	$id=$_GET['editid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$password=$_POST['password'];
	
	$update=mysqli_query($conline,"UPDATE `table21` SET `name`='$name',`email`='$email',`number`='$number',`password`='$password' WHERE `id`='$id'");
	
	if($update){
		
		echo header("location:disreg.php");
	}
	
	else{
		
		echo"glt h";
	}
}


?>