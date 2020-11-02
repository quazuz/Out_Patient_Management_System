<?php include 'admin_session.php';?>
<?php include 'connect.php';?>
<?php
  
    $sql_query="SELECT * FROM doc_lab WHERE flag= 1 ORDER BY date_posted DESC";
$query=mysql_query($sql_query);
if(isset($_GET['dlab_id']))
{
  $sql_query="UPDATE doc_lab SET flag = -1 WHERE dlab_id=".$_GET['dlab_id'];
  mysql_query($sql_query);
  header("Location: admin_lab.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Doctor manage prescription ::</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="css/foundation-icons/foundation-icons.css" rel="stylesheet">
<link href="css/font-awesome-4.2.0/css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript">
function delete_id(id)
{
  if(confirm('Sure To Remove This Record ?'))
  {
    window.location.href='admin_lab.php?dlab_id='+id;
  }
}
</script>
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
    <li><a href=""><span class="fa fa-calendar fa-2x"></span>manage report</a></li>
    <li><a href=""><span class="fa fa-lock fa-2x"></span>profile</a></li>
    </ul>
    </div> 
</div>
</div> 
	<section class="wrapper">
    
  <div class="space">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; lab Technician Pannel</h1>
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
        <!-- <li ><a href="lab_pannel.php"><span class="fa fa-plus fa-2x"></span>add patient</a></li>-->
         <li class="active"><a href=""><span class="fa fa-bars fa-2x"></span>View Prescription</a></li>
         <li class=""><a href="lab_doc.php"><span class="fa fa-bars fa-2x"></span>View Result</a></li>
        </div>
        <div class="height">
    <div class="report"style="width:580px">
    	


     <table>
      <thead>
      <tr id="theader">
        <th>
          <strong>S/N</strong>
        </th>

        <th>
          <strong>PATIENT'S NAME</strong>
        </th>

        <th>
          <strong>DOCTOR'S NAME</strong>
        </th>

        <th>
          <strong>TEST'S NAME</strong>
        </th>

        <th>
          <strong>DATE</strong>
        </th>

        <th>
          <strong>ACTION</strong>
        </th>

       <th>
          <strong>ACTION</strong>
        </th>

             
      </tr>
      </thead>
      <?php
  if(mysql_num_rows($query)>0)
  {
    while($test = mysql_fetch_array($query))
    {
      

        $id = $test['dlab_id'];

     /* echo "<tr id=\"view\">"; 
          echo"<td class=\"table_data\">" .$test['dlab_id']."</td>";
          echo"<td class=\"table_data\">" .$test['patient_name']."</td>";
          echo"<td class=\"table_data\">". $test['doctor_name']. "</td>";
          echo"<td class=\"table_data\">". $test['test_name']. "</td>";
          echo"<td class=\"table_data\">". $test['date_posted']. "</td>";
          echo"<td class=\"table_data\"><a href='=$id'>" ."Edit"."</a></td>";
          echo"<td class=\"table_data\"><a href='admin_lab.php?dlab_id=$id;' onclick="return confirm('Sure To Remove This Record ?');">" ."Delete"."</a></td>";
         // echo"<td class=\"table_data\"><a href='##.php?ldid=$id'>" ."Reply"."</a></td>";*/
        ?>
         <tr>
            <td><?php echo $test['dlab_id']; ?></td>
            <td><?php echo $test['patient_name']; ?></td>
            <td><?php echo $test['doctor_name']; ?></td>
            <td><?php echo $test['test_name']; ?></td>
            <td><?php echo $test['date_posted']; ?></td>

           
            <td align="center"><a href="javascript:delete_id(<?php echo $test['dlab_id']; ?>)">Delete</a></td>
            </tr>

         <?php
    }
  }
  else
  {
    ?>
        <tr>
        <th colspan="4">There's No data found !!!</th>
        </tr>
        <?php
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
