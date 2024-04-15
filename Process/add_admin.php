<?php
// start session
session_start();

// Include the file containing the database connection code
include "db_connection.php";

// Get values from text fields but escape user and pass to avoid SQL injection attacks
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = isset($_POST["password"]) ? $_POST["password"] : "swuphinmashsadmin"; // Default password if not provided
$contactnumber = $_POST["contactNumber"];

// Check if username already exists
$stmt_check = $conn->prepare("SELECT username FROM tbl_users WHERE username = ?");
$stmt_check->bind_param("s", $username);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    // Username already exists, alert failure
    $_SESSION["error_message"] = "Username already exists.";
    header("Location: ../SuperAdmin/Features/dashboard.php?alert=duplicate");
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Set default role to "admin"
$role = "admin";

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, username, password, contact_number, role) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstname, $lastname, $username, $hashed_password, $contactnumber, $role);

// Execute the statement
if ($stmt->execute()) {
    // Admin added successfully
    header("Location: ../SuperAdmin/Features/dashboard.php?alert=success");
    exit();
} else {
    // Error occurred
    $_SESSION["error_message"] = "Error: " . $stmt->error;
    header("Location: ../SuperAdmin/Features/dashboard.php?alert=failure");
    exit();
}

// Close statements
$stmt->close();
$stmt_check->close();

// Close database connection
$conn->close();
?>