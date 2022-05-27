<?php 
	include "config.php";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST['std_id']; 
		$name = $_POST['std_name'];
		$email = $_POST['std_email'];
		$intake = $_POST['intake_year'];

		insert_record($id, $name, $email, $intake);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TMF2034 Lab 7</title>
	<style>th{padding: 9px;background: #ffceac;} td{padding: 9px;background: #d3edff;}</style>
</head>
<body>
	<h3>Display Students</h3>

	<table>
		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Student Email</th>
			<th>Intake Year</th>
		</tr>
		<?php display_records(); ?>
	</table>


	<h3>Register New Student</h3>
	<form name="register_form" method="post">
		<input type="text" name="std_id" placeholder="Student ID" required>
		<input type="text" name="std_name" placeholder="Student Name" required>
		<input type="text" name="std_email" placeholder="Email Address" required>
		<input type="text" name="intake_year" placeholder="Intake Year" required>
		<input type="submit" name="submit" value="REGISTER">
	</form>

</body>
</html>