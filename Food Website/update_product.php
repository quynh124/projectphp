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
$price = $_POST['price'];
$description = $_POST['description'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
$stmt->bind_param("sds", $name, $price, $description);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Product updated successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
