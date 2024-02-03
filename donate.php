<?php
// Process the donation form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected blood type
    $bloodType = $_POST["bloodType"];

    // Add the donor to the database (in a real-world scenario, you'd use a database)
    // For simplicity, let's just display a message here
    echo "Thank you for donating blood of type $bloodType!";
}
?>