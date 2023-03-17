<?php

include("conreg.php");

$id= $_GET['editid'];


$editdataline=mysqli_query($conline,"SELECT* FROM`table21` where id='$id'");

echo $id;

while($row=mysqli_fetch_array($editdataline)){
	
	$id=$row['id'];
	$name=$row['name'];
	$number=$row['number'];
	$email=$row['email'];
	$password=$row['password'];
}
?>

<html>
	<body>
		<form action="regedit1.php?editid=<?php echo $id ?>" method="post">
			
			<p><label>name</label>
			<input type="text" name="name" placeholder="NAME" value="<?php echo $name ?>"></p>
			
			<p><label>number</label>
			<input type="text" name="number" placeholder="9625612523" value="<?php echo $number ?>"></p>
			
			<p><label>email</label>
			<input type="email" name="email" placeholder="email" value="<?php echo $email ?>"></p>
			
			<p><label>password</label>
			<input type="password" name="password" placeholder="password" value="<?php echo $password ?>"></p>
			
		<p>
			<input type="submit" name="submit" value="SIGN UP"></p>
			
			
			
		</form>
	</body>
</html>
