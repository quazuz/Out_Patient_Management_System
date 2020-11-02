 <!-- <table border='3px' >

            <tr>
            <th>dlid</th>  
            <th>Patient's name</th>
            <th>Doctor's name</th>
            <th>Test name</th>
            </tr>
       </table>-->
      
      <?php
//execute the SQL query and return records
     $sql ="SELECT * FROM doc_lab";
     $result = mysql_query($sql);
      ?>

       

      <table>
      
        <tr>
          <th>dlid</th>
          <th>Patient's name</th>
          <th>Doctor's name</th>
          <th>Test's name</th>
        </tr>
      
      
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo "<tr>";
            echo "<td>".$row['dlid']."</td>"
            echo "<td>".$row['patient_name']."</td>"
            echo "<td>".$row['doctor_name']."</td>"
            echo "<td>".$row['test_name']."</td>"
            echo "</tr>";
            
          }
        ?>
    
    </table>








    Table{width: 800px; } #theader{height: 60px; border: 2px solid #888;}
 #theader th{border: 1px solid #888; padding: 10px; border-radius-top-left: 10px;}
 #table_body {border: 1px solid #888;} .view:nth-child(even){background: #ddd} #view{}
 .view:nth-child(odd){background: #FFF} #table_body td{border: 1px solid #888; }
 .table_data{border: 1px solid #888; padding: 10px;}
OLIZ’s MacBook Pro (15:05):
OKAY 
A-CUBE (15:05):
dts d css for d table