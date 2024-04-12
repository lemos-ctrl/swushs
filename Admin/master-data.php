<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <?php include '../Admin/includes/sidebar.php'; ?>
        <div class="main">
            <nav class="navbar custom-toggler navbar-expand-lg px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Lemuel</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>

            <main class="content px-3 py-2 ">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <h2 class="text-left d-flex justify-content-between" style="color: maroon;">
                            Master Data
                            <div>
                                <a href="#" class="btn btn-secondary">
                                    <i class="material-icons">&#xE147;</i> <span>Add New User</span>
                                </a>

                            </div>
                        </h2>




                        <div class="table-responsive">

                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Employee ID</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa-solid fa-user"></i> Tiger Nixon</td>
                                        <td>684564531</td>
                                        <td>Admin</td>
                                        <td>Active</td>
                                        <td><a href="#" class="view-link">View</a></td>

                                    </tr>




                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="#" class="btn btn-secondary">
                                <i class="material-icons">&#xE147;</i> <span>Import Data</span>
                            </a>
                            <a href="#" class="btn btn-secondary">
                                <i class="material-icons">&#xE24D;</i> <span>Export Data</span>
                            </a>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="../Scripts/barchart.js"></script>
</body>

</html>