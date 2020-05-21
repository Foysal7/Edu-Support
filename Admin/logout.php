<?php 
ob_start();
session_start();
if($_SESSION['name'] != 'admin')
{
	header('location: login.php');
}
 

 ?>



<?php
session_destroy();
header('location: login.php');
?>