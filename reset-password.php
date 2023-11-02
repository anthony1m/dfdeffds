<?php
// Check if the token is valid (e.g., in the database)
$token = $_GET["token"];

// You need to implement a way to check the token's validity, typically by querying a database.
// Here's a simplified example of checking a token (assuming you have a database connection):

include("config.php"); // Include your database connection script

// Query the database to check if the token is valid
$sql = "SELECT id FROM users WHERE token = ? AND expiration >= NOW()";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Valid token
    // Display a form for the user to reset their password
    echo "Token is valid. You can reset your password here.";
    // Include your password reset form here
} else {
    // Invalid or expired token
    echo "Invalid token or token has expired.";
}

$stmt->close();
$conn->close();
?>
