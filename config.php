<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="pickmycars";
$homeurl="http://localhost/Work/pickmycar";
$connection=mysqli_connect($host,$user,$password,$db) or die(mysqli_connect_error());

?>
