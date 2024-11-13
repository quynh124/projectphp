<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodorder";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO feedback (name, email,mobile,subject, message) VALUES (?, ?, ? ,? ,?)");
$stmt->bind_param("sssss", $name, $email,$mobile,$subject, $message);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
