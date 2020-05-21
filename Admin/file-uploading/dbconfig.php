<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "first_db";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 

if(!$con){
    echo 'Connection Error '.mysqli_connect_error();
}
?>