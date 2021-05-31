<?php
session_start();
$r = $_GET['name'];
echo  $r."<br>";
$v = $_SESSION['value'];
echo $v;

 ?>
