<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login_login.html');
}
?>

<html>
<head>
<title>PHP Login & Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <div>
           <h3>Welcome <?php echo $_SESSION['username']; ?></h3
        </div>
		<a href="logout.php">Logout</a>
    </div>
</body>
</html>