<?php
    // Include the file containing the database connection code
    include "db_connection.php";

    //get value from text field but escape user and pass to avoid sql injection attacks
    $username = mysqli_real_escape_string($conn, $_POST["txtusername"]);
    $password = mysqli_real_escape_string($conn, $_POST["txtpassword"]);

    // Perform a query to check if the username and password match in the database
    $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql) or die("Error in query: " . mysqli_error($con));

    // Check if there is a matching row in the database
    if (mysqli_num_rows($result) > 0) {
        
        // Login successful
        header("Location: ./Admin/Features/dashboard.php");
        exit();
    } else {

        // Redirect back to the login page with an error message
        header("Location: ../index.phpp");
        exit();
    }
?>