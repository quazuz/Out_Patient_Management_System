<?php include ('script/connect.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Home ::</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div class="header">
	<section class="wrapper">
    <div class="text_top">Accra Ridge Regional Hospital Management System</div>
    <div class="register">
    <!--<li><a href="register.php">register</a></li>-->
   </div>
</section>
</div>

<div class="main">
	<section class="wrapper">
    <div id="icon"></div>

<div class="form">
	<div class="login">
    <h1>Admin</h1>
    <form action="admin_login.php" method="POST">
    
    <input type="username" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="************">
    <button type="submit" name="login">Login</button>
    <a href=""><p>Forget your password</p></a>
    </form>
    </div>
</div>

</section>
</div>


</body>
</html>
