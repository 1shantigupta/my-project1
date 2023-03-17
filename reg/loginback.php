<?php


include("conreg.php");
session_start();
if(!empty($_SESSION['id'])){
    
    header("location:index.php");
}


if(isset ($_POST["login"])){
    
    
    
    
$name = $_POST["name"];
    
$pass = $_POST["password"];    


$sql =( "select * from table21 where name ='$name'  and password ='$pass'");
    
    $result =mysqli_query($conline,$sql);

    if(mysqli_num_rows($result)>0){
        
        
    
    
    $row = mysqli_fetch_assoc($result);
    
    if($row['name'] === $name && $row['password']===$pass){

     // echo"logged in!";
        
    $_SESSION['name'] = $row['name'];
        
   $_SESSION['id'] = $row['id'];
        
 header("location:index.php");
       
   
    }



}
    
    
    else {
        
        
        header ("location:registration.php");
        
        
    }
    
    
    
    
    
    
    

    
    
    
    
    
}


?>
