<?php

include("conreg.php");

if(isset($_GET['deleteid'])){
	
	$id= $_GET['deleteid'];
	
	$deldataline=mysqli_query($conline,"DELETE FROM `table21` WHERE id='$id'");
	
	echo header("location:disreg.php");
	
}
else{
	
	echo header("location:disreg.php");
}

?>