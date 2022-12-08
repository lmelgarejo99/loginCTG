<?php
  
$servername="localhost";
$database = "db_users";
$username ="root";
$password = "";

//Create connection

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die ("CONNECTION ERROR: ".mysqli_connect_error());
}
?>