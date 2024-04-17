<?php
// Include the file containing the database connection code

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../../Process/db_connection.php";

// Check if the user ID is provided in the POST request
if (isset($_POST['userID'])) {
    // Retrieve the user ID from the POST request
    $userID = $_POST['userID'];

    // Prepare a SQL statement to retrieve the admin data by user ID
    $stmt = $conn->prepare("SELECT first_name, last_name, username, contact_number FROM tbl_users WHERE id = ?");
    $stmt->bind_param("i", $userID); // Assuming user ID is an integer
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if admin data is found
    if ($result->num_rows == 1) {
        // Fetch admin data
        $admin_data = $result->fetch_assoc();

        // Return admin data as JSON response
        echo json_encode($admin_data);
    } else {
        // Admin data not found
        echo json_encode(array('error' => 'Admin not found'));
    }
} else {
    // User ID not provided in the POST request
    echo json_encode(array('error' => 'User ID not provided'));
}
?>