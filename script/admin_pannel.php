<?php include 'admin_session.php';?>
<?php include 'connect.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Admin Panel ::</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="css/foundation-icons/foundation-icons.css" rel="stylesheet">
<link href="css/font-awesome-4.2.0/css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<!-- /Clickable Nav -->
		
		<!-- jQuery -->
		<script>
		$(function() {
			// Clickable Dropdown
			$('.click-nav > ul').toggleClass('no-js js');
			$('.click-nav .js ul').hide();
			$('.click-nav .js').click(function(e) {
				$('.click-nav .js ul').slideToggle(200);
				$('.clicker').toggleClass('active');
				e.stopPropagation();
			});
			$(document).click(function() {
				if ($('.click-nav .js ul').is(':visible')) {
					$('.click-nav .js ul', this).slideUp();
					$('.clicker').removeClass('active');
				}
			});
		});
		</script>
<body>
<div class="header">
	<section class="wrapper">
    	
    <div class="text_top">Accra Ridge Regional Hospital Management System</div>
     
     <div id="tab">
     <div class="click-nav">
			<ul class="no-js">
				<li>
					<a class="clicker"><span class="fa fa-cog"></span> &nbsp; Account<span class="fa fa-chevron-down"></span></a>
					<ul>
                        <li><a href="My profile.html"><span class="fa fa-user"></span>&nbsp; My Proflie</a></li>
						<li><a href="#"><span class="fa fa-lock"></span>&nbsp; Privacy/Help</a></li>
						<li><a href="admin_logout.php"><span class="fa  fa-power-off"></span>&nbsp; Sign out</a></li>
					</ul>
				</li>
			</ul>
		</div>
    <div class="register">
   <li><span class="fa fa-user"></span>&nbsp; <?php echo $user_log; ?></li>

   </div>
   </div>
</section>
</div>

<div class="main">
<div id="sidebar">
<div class="sidebar">
	<a href="" id="icon1"><img src="image/logo.png" width="176" height="172"></a>
    <div class="list-nav">
    <ul>
    <li class="active"><a href=""><span class="fa fa-desktop fa-2x"></span>dashboard</a></li>
    <li><a href="register.php">register</a></li>
    <li><a href="admin_user.php"><span class="fa fa-crosshairs fa-2x"></span>monitor user</a></li>
    <li><a href=""><span class="fa fa-link fa-2x"></span>department</a></li>
    <li><a href="admin_hofficer.php"><span class="fa fa-money fa-2x"></span>health-officer</a></li>
    <li><a href="admin_doc.php"><span class="fa fa-user-md fa-2x"></span>doctor</a></li>
    <li><a href="admin_nurse.php"><span class="fa fa-plus-square fa-2x"></span>Nurse</a></li>
    <li><a href="patient_tbl.php"><span class="fa fa-user fa-2x"></span>patient</a></li>
    <li><a href="admin_pharm_acct_tbl.php"><span class="fa fi-first-aid fa-2x"></span>pharmacist</a></li>
    <li><a href="admin_lab.php"><span class="fa fi-filter fa-2x"></span>laboratorist</a></li>
    <li><a href="admin_confirm_acct_tbl.php"><span class="fa fa-money fa-2x"></span>accountant</a></li>
    <li><a href=""><span class="fa fa-crosshairs fa-2x"></span>monitor hospital</a></li>
    <li><a href=""><span class="fa fi-wrench fa-2x"></span>settings</a></li>
    <li><a href=""><span class="fa fa-lock fa-2x"></span>profile</a></li>
    </ul>
    </div> 
</div>
</div> 
	<section class="wrapper">
  <div class="space">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; Admin dashboard</h1>
    <h2>
    	<div class="type-text">
        <p>doctor</p>
        <li>24</li>
        </div>
    <div class="type-text">
        <p>patient</p>
        <li>54</li>
        </div>
        <div class="type-text">
        <p>nurse</p>
        <li>34</li>
        </div>
    
    </h2>
    
    </div>
    	<div class="height">
        <a href="admin_doc.php" id="cat">
        <h1><span class="fa fa-user-md fa-2x"></span></h1>
        <p>doctor</p>
        </a>
        <div><a href="admin_hofficer.php" id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>Health officer</p>
        </a>
        </div>
        <div><a href="admin_nurse.php" id="cat">
        <h1><span class="fa fa-plus-square fa-2x"></span></h1>
        <p>nurse</p>
        </a>
        </div>
        <div><a href="patient_tbl.php" id="cat">
        <h1><span class="fa fa-user fa-2x"></span></h1>
        <p>patient</p>
        </a>
        </div>
        <div><a href="admin_pharm_acct_tbl.php" id="cat">
        <h1><span class="fa fi-first-aid fa-2x"></span></h1>
        <p>pharmacist</p>
        </a>
        </div>
        <div><a href="admin_lab.php" id="cat">
        <h1><span class="fa fi-filter fa-2x"></span></h1>
        <p>laboratorist</p>
        </a>
        </div>
        <div><a href="admin_confirm_acct_tbl.php" id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>accountant</p>
        </a>
        </div>
        <div id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>appointment</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>payment</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>blood bank</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>medicine</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-bars fa-2x"></span></h1>
        <p>operation report</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>birth report</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-bit fa-2x"></span></h1>
        <p>death report</p>
        </div>
        <div id="cat">
        <h1><span class="fa fa-money fa-2x"></span></h1>
        <p>bed allotment</p>
        </div>
        <a href="" id="cat">
        <h1><span class="fa  fa-2x"></span></h1>
        <p>noticeboard</p>
        </a>
        <a href="" id="cat">
        <h1><span class="fa fa-cog fa-2x"></span></h1>
        <p>setting</p>
        </a>
        <a href="" id="cat">
        <h1><span class="fa fa-language fa-2x"></span></h1>
        <p>lanuguage</p>
        </a>
        <a href="" id="cat">
        <h1><span class="fa fa-download fa-2x"></span></h1>
        <p>backup</p>
        </a>
        </div>
        
     <div id="date">
     <h1><span class="fa fa-calendar"></span> &nbsp; calendar scheldule</h1>
     </div>
        <div class="notice">
        <h1><span class="fa fa-bars"></span>&nbsp; calendar</h1>
        </div>
        </div>
</section>
</div>
</body>
</html>
