<?php

include("conreg.php");

$select = mysqli_query($conline,"SELECT * FROM `table21`");

echo"<table>
<tr>
<th>id</th>
<th>name</th>
<th>number</th>
<th>email</th>
<th>password</th></tr>";

while($databaserow = mysqli_fetch_array($select)){
	
	$id=$databaserow["id"];
	$name=$databaserow["name"];
	$number=$databaserow["number"];
	$email=$databaserow["email"];
	$password=$databaserow["password"];
	
	echo"<tr>
	
	<td>$id</td>
	<td>$name</td>
	<td>$number</td>
	<td>$email</td>
	<td>$password</td>
	
	<td><a href='regedit.php? editid=$id'><button>edit</button></a></td>
	
	<td><a href='regdelete.php?deleteid=$id'><button>delete</button></a></td>
	
	</tr>";
	
}

echo"</table>";

?>