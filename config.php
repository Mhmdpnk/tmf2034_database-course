<?php

	//------------- Database Connection ----------------
	$servername = "localhost";
	$username = "root";
	$password = "m@MdP*k67^sT";
	$db = "tmf2034_db";
	global $conn;

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db); // Object-oriented

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	

	//------------- Display Data ----------------
	function display_records(){
		global $conn;
		$sql = "SELECT * FROM students";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		  	echo "<tr><td>".$row['stdID']."</td><td>".$row['stdName']."</td><td>".$row['stdEmail']."</td><td>".$row['intakeYear']."</td></tr>";
		  }
		} 
	}


	//------------- Insert Record ----------------
	function insert_record($stdID, $name, $email, $intake){
		global $conn;
		$sql = "INSERT INTO students(stdID, stdName, stdEmail, intakeYear) VALUES($stdID, '$name', '$email', $intake)";

		if ($conn->query($sql) === TRUE)
			echo "New record created successfully.";
		else
			echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
?>