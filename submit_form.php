<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default user for localhost
$password = ""; // Default password for localhost
$dbname = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind SQL query
    $stmt = $conn->prepare("INSERT INTO messages (full_name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullName, $email, $message);

    if ($stmt->execute()) {
        echo "Hey Nestor Your Message were sent successfuly!!!!";
    } else {
        echo "Error: " . $stmt->error;
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
