<?php

include 'dbcon.php';



$user_name= $_POST["username"];

$pass= $_POST["password"];





$sql2= "SELECT username, password FROM accounts";

$retreval= mysqli_query($connection, $sql2);



$sql3="select * from accounts where username='$user_name' and  password='$pass'";
$result=mysqli_query($connection, $sql3);

if(mysqli_fetch_assoc($result))
{
header('Location:Bookpage.html');
}



else
{
	echo "Details does not match <br>";

}




?>
