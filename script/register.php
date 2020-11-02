<?php include ('connect.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Register ::</title>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link href="../css/foundation-icons/foundation-icons.css" rel="stylesheet">
<link href="../css/font-awesome-4.2.0/css/font-awesome.css" rel="stylesheet">
<link href="../css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div class="header">
	<section class="wrapper">
    <div class="text_top">Accra Ridge Regional Hospital Management System</div>
    <div class="register">
   <li> <a href="../index.php">Login</a></li>
   </div>
</section>
</div>

<div class="main">
	<section class="wrapper">
    <div id="register_form">
    <div class="register_form1">

    <form action="signup.php" method="POST">
    <label>First name</label>
    <input type="text" name="firstname" required>
    <label>Last name</label>
    <input type="text" name="lastname" required>
    
    <label>Email</label>
    <input type="text" name="email">

    <label>Address</label>
    <input type="text" name="address">
    <label>Account type</label>

    <select name="act_type">
    <option>--please select--</option>    
    <?php 
        $query = mysql_query("SELECT * FROM act_type") or die(mysql_error());
        while ($result = mysql_fetch_array($query)) 
        {
        
        ?>
        <option value="<?php echo $result['act_name'];?>"><?php echo $result['act_name'];?></option>

         
    <?php
       } 

    ?>
    </select>
    <label>Gender</label>
    <select name="gender">
    <option>--please select--</option>    
    <option>Female</option>
    <option>Male</option>
    </select>
     <label>Marital Status</label>
    <select name="marital_status">
    <option>--please select--</option>
    <option>Single</option>
    <option>Married</option>
    <option>Divorced</option>
    <option>Separated</option>
    </select>
    </div>
    
    <div class="register_form2">
    <label>Username</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <label>Confirm Password</label>
    <input type="password" name="repassword" required>
    <label>Date Of Birth</label>
    <input type="date" name="dob">
    <!--<input type="checkbox" style="width:auto">yes or no NHIS-->
   
    <button type="submit" name="submit">Register</button>
    </div>
    </form>
</div>

</section>
</div>


</body>
</html>
