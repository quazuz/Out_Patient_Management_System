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
<!--<div id="sidebar" style="width:97px">
<div class="sidebar">
	<a href="" id="icon1"><img src="image/logo.png" width="176" height="172"; style="margin-left:-45px"></a>
    <div class="list-nav"-->
   <!-- <ul style="width:150px">
    <li><a href=""><span class="fa fa-desktop fa-2x"></span>dashboard</a></li>
     <li><a href=""><span class="fa fa-user fa-2x"></span>patient</a></li>
      <li><a href=""><span class="fa fa-calendar fa-2x"></span>manage report</a></li>
    <li><a href=""><span class="fa fa-lock fa-2x"></span>profile</a></li>
    </ul>-->
    </div> 
</div>
</div> 
	<section class="wrapper" style="max-width:1240px; margin-left:10px">
    
  <div class="space" style=" width:1100">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; Patients</h1>
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
    	<div id="table" style="width:1120px">
        <div class="container" style="width:1198px; margin-left:-133px">
        <div class="ilist">
        <!-- <li ><a href=""><span class="fa fa-plus fa-2x"></span>add patient</a></li>-->
         <li class="active"><a href=""><span class="fa fa-bars fa-2x"></span>Lists Of All Patient's</a></li>
         
        </div>
        <div class="height">
    <div class="report" style="width:1188px">
    	


     <table style="font-size: 11px; width:860px">
      <thead>
      <tr id="theader">
        <th>
          <strong>S/N</strong>
        </th>

        <th>
          <strong>FIRST NAME</strong>
        </th>

        <th>
          <strong>LAST NAME</strong>
        </th>

         <th>
          <strong>STATE OF ORIGIN</strong>
        </th>

        <th>
          <strong>BLOOD GROUP</strong>
        </th>

        <th>
          <strong>GENOTYPE</strong>
        </th>

        <th>
          <strong>HEALTH RECORDS</strong>
        </th>

        <th>
          <strong>SEX</strong>
        </th>

        <th>
          <strong>MARITAL STATUS</strong>
        </th>

        <th>
          <strong>ADDRESS</strong>
        </th>

        <th>
          <strong>NATIONALITY</strong>
        </th>

        <th>
          <strong>PHONE NUMBER</strong>
        </th>

        <th>
          <strong>HOME PHONE</strong>
        </th>

        <th>
          <strong>NEXT OF KIN</strong>
        </th>

        <th>
          <strong>GUARDIAN</strong>
        </th>

        <th>
          <strong>DATE OF BIRTH</strong>
        </th>




       </tr>
      </thead>
      <?php
      $user = $_SESSION['id'];
      $query = mysql_query("SELECT * FROM patients") or die(mysql_error());


      while($test = mysql_fetch_array($query)) {

        $id = $test['PID'];

      echo "<tr id=\"view\">"; 
          echo"<td class=\"table_data\">" .$test['PID']."</td>";
          echo"<td class=\"table_data\">" .$test['FirstName']."</td>";
          echo"<td class=\"table_data\">" .$test['LastName']."</td>";
          echo"<td class=\"table_data\">" .$test['State of Origin']."</td>";
          echo"<td class=\"table_data\">" .$test['Blood Group']."</td>";
          echo"<td class=\"table_data\">" .$test['Genotype']."</td>";
          echo"<td class=\"table_data\">" .$test['Health Records']."</td>";
          echo"<td class=\"table_data\">" .$test['Sex']."</td>";
          echo"<td class=\"table_data\">" .$test['Marital Status']."</td>";
          echo"<td class=\"table_data\">" .$test['Address']."</td>";
          echo"<td class=\"table_data\">" .$test['Nationality']."</td>";
          echo"<td class=\"table_data\">" .$test['Phone Number']."</td>";
          echo"<td class=\"table_data\">" .$test['Home Phone']."</td>";
          echo"<td class=\"table_data\">" .$test['Next Of Kin']."</td>";
          echo"<td class=\"table_data\">" .$test['Guardian']."</td>";
          echo"<td class=\"table_data\">" .$test['Date Of Birth']."</td>";

          
          //echo"<td class=\"table_data\"><a href='../del.php?bookcase_id=$id'>" ."delete"."</a></td>";
        ?>

          <?php
          echo "</tr>";

}
    ?>
    
      
    </table>
  
       
  
    </div></div>
        </div>
        </div>
  </div>
</section>
</div>
</body>
</html>
