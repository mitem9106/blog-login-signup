<?php
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
	$port = "";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname, $port);
	
	//Check connection
	if ($conn->connect_error) {
		echo "Connection failed: " . $conn->connect_error;
	}
	echo "Connected successfully";
	
	//initialize
	$email = $password = "";
	
	//grab the posted user input from the sign up form
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = test_input($_POST["email"]);
		$password = test_input($_POST["psw"]);
	}
	
	//strip uneccesary characters from data
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	//run insert query with raw mysqli
	$query = "INSERT INTO users (email, password)
	VALUES(?, ?)";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $email, $password);
	$stmt->execute();
	
	$conn->close();
?>