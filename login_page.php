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
	echo "Connected to database successfully<br>";
	
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
	
	$query = "SELECT email, password FROM users WHERE email=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$success = 0;
	
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["email"] == $email && $row["password"] == $password) {
				$success = 1;
				break;
			}
		}
	} 
	if ($success == 1) {
		echo"Login Successful!";
	} else {
		echo"Login Failed...";
	}
	
?>