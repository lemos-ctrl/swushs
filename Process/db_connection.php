<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "swushsdb";
    $conn = "";

    // Create connection
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    error_reporting(E_ALL);
ini_set('display_errors', 1);
    
?>