<?php include 'session.php';?>
<?php include 'connect.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accra Ridge Regional Hospital | Patient ::</title>
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
						<li><a href="#"><span class="fa  fa-power-off"></span>&nbsp; Sign out</a></li>
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
    
    </ul>
    </div> 
</div>
</div> 
	<section class="wrapper">
    
  <div class="space">
  
  	<div id="type">
    <h1><span class="fa fa-info-circle"></span> &nbsp; Patient form</h1>
  
    </div>
    	<div id="table">
        <div class="container">
        
        <div class="height">
     <div id="patient_form">
    <div class="patient_form1">
    <form action="patient_php.php" method="post">
    <label>first name</label>
    <input type="text" name="firstname" required>
     <label>Last name</label>
    <input type="text" name="lastname" required>
    <label>state of origin</label>
    <input type="text" name="StateOfOrigin">
    <label>Blood group</label>
    <input type="text" name="BloodGroup">
    <label>Genotype</label>
<input type="text" name="genotype">
<label>Health Records</label>
<input type="text" name="HealthRecords">
    <h1>
    <label>sex</label>
    <select type="text" name="sex" required>
    <option>Female</option>
    <option>Male</option>
    </select>
    </h1>
    <h2>
     <label>Marital Status</label>
    <select type="text" name="MaritalStatus">
    <option>--please select--</option>
    <option>Single</option>
    <option>Married</option>
    <option>Divorced</option>
    <option>Seperated</option>
    </select>
    </h2>
    
    </div>
    
    <div class="patient_form2">
    <label>Address</label>
    <input type="text" name="address" required>    
    <label>Nationality</label>
    <input type="text" name="nationality" required>
    <label>Phone Number</label>
    <input type="tel" name="PhoneNumber" required>    
    <label>Home Phone</label>
    <input type="tel" name="HomePhone" required> 
    <label>Next Of Kin</label>
<input type="text" name="NextOfKin" required>

<label>Guardian</label>
<input type="text" name="guardian" required>
    <h1>
    <label>Date of Birth</label>
    <!--<select name="DateOfBirth">-->
    <select name="day">    
    <option>Day</option>
    <?php
    for($d=1;$d<=31;$d++)
    {
        if($d < 10)
            $insert = "0";
        else
            $insert = "";
        echo("\n<option>$insert$d</option>");
    }
    ?>
    <!--<option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option>05</option>
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
    <option>18</option>
    <option>19</option>
    <option>20</option>
    <option>21</option>
    <option>22</option>
    <option>23</option>
    <option>24</option>
    <option>25</option>
    <option>26</option>
    <option>27</option>
    <option>28</option>
    <option>29</option>
    <option>30</option>
    <option>31</option>-->
    </select>
    </h1>
    <h2>
    <!--<select name="DateOfBirth">-->
    <select name="month">
    <option>Month</option>
    <?php
    for($m=1;$m<=12;$m++)
    {
        if($m < 10)
            $insert = "0";
        else
            $insert = "";
        echo("\n<option>$insert$m</option>");
    }
    ?>
    <!--<option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option>May</option>
    <option>June</option>
    <option>July</option>
    <option>August</option>
    <option>September</option>
    <option>October</option>
    <option>November</option>
    <option>December</option>-->
    </select>
    </h2>
    <h3>
    <!--<select name="DateOfBirth">-->
    <select name="year">    
    <option>Year</option>
    <?php
    /*$True_date = date ("Y");
    for($y=$True_date;$y<=$True_date+50;$y++)
    {
        echo("\n<option>$y</option>");
    }*/
    ?>
    <option value="1900">1900</option>
    <option value="1901">1901</option>
    <option value="1902">1902</option>
    <option value="1903">1903</option>
    <option value="1904">1904</option>
    <option value="1905">1905</option>
    <option value="1906">1906</option>
    <option value="1907">1907</option>
    <option value="1908">1908</option>
    <option value="1909">1909</option>
    <option value="1910">1910</option>
    <option value="1911">1911</option> 
    <option value="1912">1912</option>
    <option value="1913">1913</option>
    <option value="1914">1914</option>
    <option value="1915">1915</option>
    <option value="1916">1916</option>
    <option value="1917">1917</option>
    <option value="1918">1918</option>
    <option value="1919">1919</option>
    <option value="1920">1920</option>
    <option value="1921">1921</option>
    <option value="1922">1922</option>
    <option value="1923">1923</option>
    <option value="1924">1924</option>
    <option value="1925">1925</option>
    <option value="1926">1926</option>
    <option value="1927">1927</option> 
    <option value="1928">1928</option>
    <option value="1929">1929</option>
    <option value="1930">1930</option>
    <option value="1931">1931</option>
    <option value="1932">1932</option>
    <option value="1933">1933</option>
    <option value="1934">1934</option>
    <option value="1935">1935</option>
    <option value="1936">1936</option>
    <option value="1937">1937</option>
    <option value="1938">1938</option>
    <option value="1939">1939</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    
    </select>
    </h3>
   <button type="submit" name="submit">Register</button>
   </div>
   
    </form>
</div></div>
        </div>
        </div>
  </div>
</section>
</div>
</body>
</html>
