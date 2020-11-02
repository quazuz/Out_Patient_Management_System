<?php include 'session.php';?>
<?php include 'connect.php';?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Doctor manage prescription ::</title>
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
						<li><a href="logout.php"><span class="fa  fa-power-off"></span>&nbsp; Sign out</a></li>
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
    <li><a href=""><span class="fa fa-desktop fa-2x"></span>dashboard</a></li>
     <li><a href="doc_lab.php"><span class="fa fa-user fa-2x"></span>view prescription</a></li>
      <li><a href=""><span class="fa fi-clipboard-pencil fa-2x"></span>manage appointment</a></li>
    <li><a href=""><span class="fa fa-calendar fa-2x"></span>manage report</a></li>
    <li><a href=""><span class="fa fa-lock fa-2x"></span>profile</a></li>
    </ul>
    </div> 
</div>
</div> 
	<section class="wrapper">
    
  <div class="space">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; lab Result</h1>
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
    	<div id="table">
        <div class="container">
        <div class="ilist">
         <li class="active"><a href=""><span class="fa fa-bars fa-2x"></span>Add Patient</a></li>
         
        </div>
        <div class="height">
    <div class="report">
    	<section class="report_content">
        <form method="post" action="lab_result.php">
          <?php
            $id = $_REQUEST['dlab_id'];

            $query = mysql_query("SELECT * FROM doc_lab WHERE dlab_id = '$id' ORDER BY date_posted") or die(mysql_error());
            while($test = mysql_fetch_array($query)) {
              $name = $test['doctor_name'];
              $patient = $test['patient_name'];
              $test_name = $test['test_name'];
              $doctor_id = $test['user_id'];
            

          ?>
         <label>Doctor's name</label>
        <input type="text" name="d_name" value="<?php echo $name; ?>">
         
        <label>patient's name</label>
        <input type="text" name="patient_name" value="<?php echo $patient; ?>">
         <label>Test's name</label>
        <input type="text" name="test_name" value="<?php echo $test_name; ?>">
        
        <input type="hidden" name="doctor_id" value="<?php echo $doctor_id; ?>">

        
        <?php

       }
       ?>
       <label style="margin-top:50px">Test's Result</label>
        <textarea name="test_result"></textarea>
        
        
    <button type="submit" name="submit">Send Result</button>
    
    </form>
    </section>
    </div></div>
        </div>
        </div>
  </div>
</section>
</div>
</body>
</html>
