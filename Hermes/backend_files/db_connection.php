<?php
$servername = "localhost";
$username = "root";
$db = "hermes";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
  die("Error in connecting with Hermes. ".mysqli_connect_error());
}

?>
