<?php
// Assuming you have a MySQL database set up
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $bloodType = $_POST["blood_type"];
    $contact = $_POST["contact"];

    // Insert data into the database
    $sql = "INSERT INTO donors (name, blood_type, contact) VALUES ('$name', '$bloodType', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>