<?php require_once ('../../includes/cdn.php');

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
                                    data-bs-target="#addStrand">Add Strands</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addStrand" tabindex="-1" role="dialog" aria-labelledby="addStrandTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addStrandTitle">Add Strands</h5>
                            </div>
                            <div class="modal-body">
                                <form id="addStrandForm">
                                    <div class="mb-3">
                                        <label for="strandName" class="form-label">Strand Name</label>
                                        <input type="text" class="form-control" id="strandName" name="strandName"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="strandCode" class="form-label">Strand Code (STEM)</label>
                                        <input type="text" class="form-control" id="strandCode" name="strandCode"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="classSize" class="form-label">Class Size</label>
                                        <input type="number" class="form-control" id="classSize" name="strandName"
                                            required>
                                    </div>
                                    <div class="mb-1">
                                        <h4>Strand Specializations</h4>
                                    </div>
                                    <div id="specializationsContainer">
                                        <!-- Specialization input boxes will be added here dynamically -->
                                    </div>
                                    <button type="button" class="btn btn-primary mt-3" onclick="addSpecialization()">Add
                                        Another Specialization</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    onclick="clearSpecializations()">Close</button>
                                <button type="button" class="btn btn-primary" onclick="clearSpecializations()">Add
                                    Strand</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include ('../modals/logoutModal.php'); ?>

                <!-- ENDS HERE -->
                <div class="card border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title m-0">Strand</h5>
                            </div>
                            <div class="col-auto">
                                <select name="semester-dropdown" id="semester-dropdown"
                                    class="form-select form-select-sm">
                                    <option value="Semester 1">Semester 1</option>
                                    <option value="Semester 2">Semester 2</option>
                                    <option value="Semester 2">Display all</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Specialization</th>
                                    <th>Class Size</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Science, Technology, Engineering, and Mathematics</td>
                                    <td>STEM</td>
                                    <td>Health</td>
                                    <td>50</th>
                                    <td class="text-center"><a class="fa-solid fa-trash"></a> | <a
                                            class="fa-solid fa-pen-to-square"></a>
                                    </td>
                                </tr>
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