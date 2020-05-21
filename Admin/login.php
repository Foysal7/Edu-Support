
<html>

<?php include("dbconnect.php"); ?>

<?php


if(isset($_POST['submit'])){
	try{
	
	$num = 0;
	
	$result = mysqli_query($con, "SELECT * FROM admin WHERE email = '$_POST[mail]' and password = '$_POST[pword]'");
	$num = mysqli_num_rows($result);
	
	// echo $num;
	
	if($num > 0){
		session_start();
		$_SESSION['name'] = 'admin';
		header("location: home.html");
	}else{
		throw new Exception("Invalid mail and/or password");
	}
	
	}catch(Exception $e){
		$error_msg = $e->getMessage();
	}

}


?>

<head>
<title>Admin|Edu-Support</title>
<link href ="login.css" rel ="stylesheet" type ="text/css"/>
</head>

<body>
<div class="main">

<div class="maincontent">
<div class="content">
<h2>Admin Login</h2>
</div>

<br>
<br>

<div class="login">
	<?php
		if(isset($error_msg)){
		echo $error_msg;
		}
	?>
	<form role="form" method="post">
		Email :	<input type = "email" placeholder="Enter Your Email" autocomplete = "off" name = "mail" required></br></br>
		Password : <input type = "password" placeholder="Enter Your Password" autocomplete = "off" name = "pword" required></br></br>
		<input type = "submit" name = "submit" value =  "Login" style="color:red;background:star;font-style:italic">
	</form>
	</div>

</div>
<div class="footer">
<p align="center">&copy;Edu-Support Team</p>
</div>
</div>
</body>
</html>