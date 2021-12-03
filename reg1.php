<?php


include 'dbcon.php';



$user_name= $_POST["username"];

$email= $_POST["email"];

$pass= $_POST["password"];






$sql = "INSERT INTO accounts(username, email, password) VALUES ('$user_name','$email','$pass');";

$res= mysqli_query($connection, $sql);






if($res)
{
  
header('Location:Registration2 Final.html');
}
else
{
	echo "DB Error <br>";
}




?>
