<?php include 'connect.php';?>
<html>
<body>
  <?php
//execute the SQL query and return records
      $result = mysql_query("SELECT * FROM doc_lab ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>dlid</th>
          <th>patient_name</th>
          <th>doctor_name</th>
          <th>test_name</th>
         <!-- <th>doc_dept</th>
          <td>Employee_salary</td>-->
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['dlid'\]}</td>
              <td>{$row\['patient_name'\]}</td>
              <td>{$row\['doctor_name'\]}</td>
              <td>{$row\['test_name'\]}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     
    </body>
    </html>
    