<?php
$serverName = "localhost";
$dbUsername = "HeshanRashmika";
$dbpassword = "oRk!Bultb3Nu_F-N";
$dbname = "miniproject";

$conn = mysqli_connect($serverName, $dbUsername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}