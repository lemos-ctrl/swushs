<?php require_once('../../includes/cdn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php include '../../Admin/includes/sidebar.php';?>
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
                    <?php include '../../Admin/includes/dashboardBanner.php';?>
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0 dashboard-dropdown">
                            <!-- dropdown button -->
                            <h6 class="pt-2 ps-2 ">Select School Year</h6>
                            <div class="btn-group dropdown-center px-2">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                    data-bs-toggle="dropdown" id="schoolYearDropdown" aria-expanded="false">
                                    Select School Year
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="schoolYearSelectConfirmationLabel">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#schoolYearSelectConfirmation"
                                            data-school-year="2023-2024">2023-2024</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#schoolYearSelectConfirmation"
                                            data-school-year="2024-2025">2024-2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modals -->
                <?php include('../modals/schoolyearSwitchModal.php'); ?>
                <?php include('../modals/logoutModal.php'); ?>
                <div id="search-section">
                    <!-- Search bar goes here -->
                </div>

                <div id="info-section">
                    <!-- Info section goes here -->
                </div>

                <div class="card border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title m-0">Curriculum</h5>
                            </div>
                            <div class="col-auto">
                                <select name="semester-dropdown" id="semester-dropdown"
                                    class="form-select form-select-sm">
                                    <option value="Semester 1">Semester 1</option>
                                    <option value="Semester 2">Semester 2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <!-- <h3 class="text-center">Grade 11</h3>
                        <h4 class="text-center">STEM-Health</h4> -->
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Descriptive Title</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Total Units</th>
                                    <th>Hours per week</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ITE-325</td>
                                    <td>Research Capstone</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>24</td>
                                    <td>Edit | Delete</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>