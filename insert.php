<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

// Create connection
$conn = new mysqli($servername, 
	$username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
else 
{
	echo "Success...";
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$email_address = mysqli_real_escape_string($conn, $_POST['email']);
$phone_number = mysqli_real_escape_string($conn, $_POST['Phone Number']);
$blood_group=mysqli_real_escape_string($conn,$_POST['Blood Group']);
// attempt insert query execution
$sqlquery = "INSERT INTO second (fname, email, phone numb,blood group) VALUES ('$first_name', '$email_address','$phone_number','$blood_group')";
if ($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sqlquery. "<br>" . $conn->error;
}
?>