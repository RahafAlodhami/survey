
<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
  <body>
  	<center>
  		<?php
	include('config/db_connect.php');

      $name = $_REQUEST['name'];
    	$Age  = $_REQUEST['Age'];
    	$hobbies = $_REQUEST['hobbies'];


  		$sql = "INSERT INTO users VALUES ('$name',
  			'$Age','$hobbies')";

  		if(mysqli_query($conn, $sql)){
  			echo "<h6>data stored in a database successfully </h6>";


        $result = mysqli_query($conn,"SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>hobbies</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['hobbies'] . "</td>";
echo "</tr>";
}
echo "</table>";


  		} else{
  			echo "ERROR: $sql. "
  				. mysqli_error($conn);
  		}

  		// Close connection
  		mysqli_close($conn);
  		?>
  	</center>
  </body>

  </html>


  <?php include('templates/footer.php'); ?>

</html>
