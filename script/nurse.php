<?php include 'session.php';?>
<?php include 'connect.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Nurse Patient ::</title>
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
    <li class="active"><a href="patient_tbl.php"><span class="fa fa-user fa-2x"></span>Patient</a></li>
    <li><a href="Nurse_Bed_ward.php"><span></span>bed ward</a></li>
    <li><a href="nurse_blood_bank.php"><span></span>blood bank</a></li>
    <li><a href=""><span class="fa fa-lock fa-2x"></span>profile</a></li>
    </ul>
    </div> 
</div>
</div> 
	<section class="wrapper">
    
  <div class="space">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; Nurse Patient pannel</h1>
  
    </div>
    	<div id="table">
        <div class="container">
        <div class="ilist">
        <li class="active"><a href=""><span class="fa fa-user fa-2x"></span>Patient</a></li>
        <li><a href="ho_nurse.php"><span class="fa fa-bars fa-2x"></span>View Patients On Queue</a></li>
         
        </div>
        <div class="height">
    <div class="report">
    	<section class="report_content">
         <form method="post" action="nurse_doc.php">
        <label>patient's name</label>
        <input type="text" name="patient_name">   
        <label>patient type</label>
        <select name="patient_type">
        <option>select</option>    
        <option>in-patient</option>
        <option>out-patient</option>
        </select>
        <label>nurse's name</label>
        <input type="text" name="nurse_name">   

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


        <!--<label>doctor's department</label>
        <select>
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
        
        <label>date</label>
        <input type="date" name="date_posted">
         <label>description</label>
        <textarea name="description"></textarea>
    <button type="submit" name="submit">Send Patient To Doctor</button>
    
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
