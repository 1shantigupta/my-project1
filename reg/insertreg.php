<?php

include("conreg.php");

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email =$_POST['email'];
	$number =$_POST['number'];
	$password =$_POST['password'];


$insert ="INSERT INTO `table21`(`id`, `name`, `email`, `number`, `password`) VALUES ('NULL','$name','$email','$number','$password')";

$query= mysqli_query($conline,$insert);

if($query){
	
	echo" successfully insert";
}
else{
	
	echo"mysqli_error($conline)";}
}



?>