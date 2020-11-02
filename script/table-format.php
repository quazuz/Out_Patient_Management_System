<table>
			<thead>
			<tr id="theader">
				<th>
					<strong>S/N</strong>
				</th>

				<th>
					<strong>CLUB NAME</strong>
				</th>

				<th>
					<strong>CLUB DESCRIPTION</strong>
				</th>

 				<th>
					<strong>BOOK CLUB CREATED BY</strong>
				</th>

				<th>
					<strong>ACTION</strong>
				</th>
				
			</tr>
			</thead>
			<?php
			$user = $_SESSION['id'];
			$query = mysql_query("SELECT u.fname, b.bookcase_id, b.bookcase_name, b.no_of_shelves 
				FROM user u, bookcase b WHERE u.user_id = b.user_id AND flag = 1") or die(mysql_error());


			while($test = mysql_fetch_array($query)) {

				$id = $test['bookcase_id'];

			echo "<tr id=\"view\">"; 
          echo"<td class=\"table_data\">" .$test['bookcase_id']."</td>";
          echo"<td class=\"table_data\"><a href='../bookcase_content.php?bookcase_id=$id'>" .$test['bookcase_name']."</a></td>";
          echo"<td class=\"table_data\">". $test['no_of_shelves']. "</td>";
          echo"<td class=\"table_data\">". $test['fname']. "</td>";
          echo"<td class=\"table_data\"><a href='../del.php?bookcase_id=$id'>" ."delete"."</a></td>";
        ?>

          <?php
          echo "</tr>";

}
		?>
		
			
		</table>