<?php

	include('config/db_connect.php');


?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>
 <link rel="stylesheet" href="edit.css">
	<section class="container grey-text">
		<h4 class="center">Survey form</h4>
		<form action="view.php" method="post" enctype="multipart/form-data">
											<div class="panel-body">
													<label for="name"> Name:</label>
													<input type="text" name="name" id="name" class="form-control" placeholder="Enter your  name" required>

													<label for="Age" class="mt-10">Age:</label>
													<input type="number" name="Age" id="Age" class="form-control" placeholder="Enter your Age" required>

													<label for="hobbies" class="mt-10">Hobbies:</label>
													<input type="text" name="hobbies" id="hobbies" class="form-control" placeholder="Enter your hobbies" required></textarea>

													<label for="image" class="mt-10">Image:</label>
													<input type="file" name="image" id="image" class="form-control" accept="image/*">
											</div>
											<div class="panel-footer">
													<button type="submit" class="btn btn-primary btn-block"> Submit</button>
											</div>
									</form>

	<?php include('templates/footer.php'); ?>

</html>
