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
     <li><a href="patient_tbl.php"><span class="fa fa-user fa-2x"></span>patient</a></li>
      <li><a href=""><span class="fa fi-clipboard-pencil fa-2x"></span>manage appointment</a></li>
    <li class="active"><a href=""><span class="fa  fa-2x"></span>manage prescription</a></li>
    <li><a href="doctor_bed_allotment.php"><span class="fa fa-2x"></span>bed alloment</a></li>
    <li><a href=""><span class="fa  fa-2x"></span>view blood bank</a></li>
    <li><a href="doctor_lab_pannel.php"><span class="fa fa-calendar fa-2x"></span>refer to lab</a></li>
    <li><a href=""><span class="fa fa-lock fa-2x"></span>profile</a></li>
    </ul>
    </div> 
</div>
</div> 
	<section class="wrapper">
    
  <div class="space">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; manage prescription</h1>
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
         <li><a href="doc_nurse.php"><span class="fa fa-user fa-2x"></span>View Patient From Nurse</a></li>   
        <!-- <li ><a href=""><span class="fa fi-wrench fa-2x"></span>edit prescription</a></li>-->
         <li class="active"><a href=""><span class="fa fa-bars fa-2x"></span>prescription</a></li>
         <li><a href="doctor_add_prescription.php"><span class="fa fa-plus fa-2x"></span>add prescription</a></li>
       
        </div>
        <div class="height">
    <div class="report">
    	<section class="report_content">
        <form method="post" action="doc_pharm.php">
        <label>patient's name</label>
        <input type="text" name="patient_name">
        <label>doctor's name</label>
        <input type="text" name="doctor_name">
        
        <label>doctor's department</label>
         <select name="department">
    <option>--please select--</option>    
    <?php 
        $query = mysql_query("SELECT * FROM department") or die(mysql_error());
        while ($result = mysql_fetch_array($query)) 
        {
        
        ?>
        <option value="<?php echo $result['dept_name'];?>"><?php echo $result['dept_name'];?></option>

         
    <?php
       } 

    ?>
    </select>
        <!--<select>
        <option>select</option>    
        <option>PEADIATRICS</option>
        <option>ENT</option>
        <option>ANAESTHETICS</option>
        <option>CASUALTY</option>
        <option>GASTROENTEROLOGY</option>
        <option>GYNAECOLOGY</option>
        <option>HAEMATOLOGY</option>
        <option>NEPHROLOGY</option>
        <option>NEUROLOGY</option>
        <option>ONCOLOGY</option>
        <option>OPHTHALMOLOGY</option>
        <option>ORTHOPAEDICS</option>
        <option>PHYSIOTHERAPY</option>
        <option>RHEUMATOLOGY</option>
        <option>UROLOGY</option>
        <option>GENITOURINARY MEDICINE</option>
        <option>RENAL UNIT</option>
        <option>NEONATAL UNIT</option>

        </select>-->
        <label>Date</label>
        <input type="date" name="date_posted">
        <label>case history</label>
        <textarea name="history"></textarea>
         <label style="margin-top:50px">medication</label>
        <textarea name="med"></textarea>
        
        
    <button type="submit" name="submit">send prescription to pharmacy</button>
    
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
