<?php
require_once ('../../includes/cdn.php');

// start session
session_start();

// check if user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect back to the login page with an error message
    header("Location: ../../index.php");
    exit();
}

// check if user has access to this page
if ($_SESSION["user_role"] != "admin") {
    // Redirect back to the login page with an error message
    header("Location: /schedulingsystem/swushs/process/authorization_error.php");
    exit();
}

// Include database connection
include_once ("../../Process/db_connection.php");

// Fetch school years from the database
$sql = "SELECT * FROM tbl_schoolyear";
$result = $conn->query($sql);

// Function to format date strings
function formatDate($dateString)
{
    // Convert date string to timestamp
    $timestamp = strtotime($dateString);

    // Format the timestamp in a human-readable format
    $formattedDate = date("M d, Y", $timestamp); // Example format: Jan 01, 2023

    return $formattedDate;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHS Faculty</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php include ('../includes/sidebar.php'); ?>
        <div class="main">
            <nav class="navbar custom-toggler navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Kurt</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <?php include '../../Admin/includes/dashboardBanner.php'; ?>
                    <!-- SAME ROW OF DASHBOARD BANNER BUT LIKE I JUST PUT IT HERE KAY FOR EVERY PAGE LAHE LAHE -->
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addSchoolYear">Add School Years</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addSchoolYear" tabindex="-1" role="dialog"
                    aria-labelledby="addSchoolYearTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSchoolYearTitle">Add School Years</h5>
                            </div>
                            <div class="modal-body">
                                <form id="addSchoolYearForm" method="post" action="../Process/add_schoolyear.php">
                                    <div class="mb-3">
                                        <label for="schoolYearName" class="form-label">School Year Name:</label>
                                        <input type="text" class="form-control" id="schoolYearName"
                                            name="schoolYearName" required>
                                    </div>
                                    <div class="mb-1">
                                        <h5>School Year Duration</h5>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="schoolYearStartDate" class="form-label">Start Date:</label>
                                            <input type="date" class="form-control" id="schoolYearStartDate"
                                                name="schoolYearStartDate" required>
                                        </div>
                                        <div class="col">
                                            <label for="schoolYearEndDate" class="form-label">End Date:</label>
                                            <input type="date" class="form-control" id="schoolYearEndDate"
                                                name="schoolYearEndDate" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <h6>1st Semester</h6>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="1stSemStartDate" class="form-label">Start Date:</label>
                                            <input type="date" class="form-control" id="1stSemStartDate"
                                                name="1stSemStartDate" required>
                                        </div>
                                        <div class="col">
                                            <label for="1stSemEndDate" class="form-label">End Date:</label>
                                            <input type="date" class="form-control" id="1stSemEndDate"
                                                name="1stSemEndDate" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <h6>2nd Semester</h6>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="2ndSemStartDate" class="form-label">Start Date:</label>
                                            <input type="date" class="form-control" id="2ndSemStartDate"
                                                name="2ndSemStartDate" required>
                                        </div>
                                        <div class="col">
                                            <label for="2ndSemEndDate" class="form-label">End Date:</label>
                                            <input type="date" class="form-control" id="2ndSemEndDate"
                                                name="2ndSemEndDate" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add School Year</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php include ('../modals/logoutModal.php'); ?>
                <?php
                // Display alerts based on URL parameter
                if (isset($_GET['alert'])) {
                    $alert = $_GET['alert'];
                    if ($alert === 'success') {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Schoolyear added successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                    } elseif ($alert === 'failure') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Error occurred while adding Schoolyear.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                    } elseif ($alert === 'duplicate') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Username already exists. Choose another one.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                    }
                }
                ?>

                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title m-0">
                            Schoolyears
                        </h5>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Schoolyear ID</th>
                                    <th>Schoolyear Name</th>
                                    <th>School Year Duration</th>
                                    <th>1st Semester</th>
                                    <th>2nd Semester</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if there are any school years
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['schoolyear_name'] . "</td>";
                                        echo "<td>" . formatDate($row['schoolyear_start_date']) . " - " . formatDate($row['schoolyear_end_date']) . "</td>";
                                        echo "<td>" . formatDate($row['1stsem_start_date']) . " - " . formatDate($row['1stsem_end_date']) . "</td>";
                                        echo "<td>" . formatDate($row['2ndsem_start_date']) . " - " . formatDate($row['2ndsem_end_date']) . "</td>";
                                        echo "<td class='text-center'><a class='fa-solid fa-trash'></a> | <a class='fa-solid fa-pen-to-square'></a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    // If no records found
                                    echo "<tr><td colspan='6' class='text-center'>No schoolyears found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>