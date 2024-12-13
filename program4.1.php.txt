<?php
$host = "localhost";
$username="root";
$password="";
$database="supermarket";
$conn = new mysqli($host,$username,$password,$database);
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo"connected successfully to the supermarket database";
$conn->close();
?>