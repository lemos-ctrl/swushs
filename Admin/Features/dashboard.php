<?php 
include_once '../../includes/cdn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link rel="stylesheet" href="../../Styles/styles.css">
    <script src="../../Scripts/script.js"></script>
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
                    <div class="row">
                        <div class="col-12 col-md-10 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100 dashboard-card">
                                        <div class="col-2">
                                            <div class="px-3 py-2 m-1">
                                                <span>School Year</span>
                                                <h6 class="mb-0">Mar 2024 - <br> Jan 2025</h6>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="px-3 py-2 m-1">
                                                <span>People</span>
                                                <div class="d-flex flex-row dashboard-icons justify-content-start">
                                                    <div class="d-flex align-items-center pe-2 user-card">
                                                        <h1>20</h1>
                                                        <div class="ms-1 mt-2">
                                                            <i class="fa-solid fa-users"></i>
                                                            <p>Users</p>
                                                        </div>  
                                                    </div>
                                                    <div class="d-flex align-items-center user-card">
                                                        <h1>20</h1>
                                                        <div class="ms-1 mt-2">
                                                            <i class="fa-solid fa-chalkboard-user"></i>
                                                            <span>Teachers</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="px-3 py-2 m-1">
                                                <span>Particulars</span>
                                                <div class="d-flex flex-row dashboard-icons justify-content-start">
                                                    <div class="d-flex align-items-center pe-2 user-card">
                                                        <h1>20</h1>
                                                        <div class="ms-1 mt-2">
                                                            <i class="fa-solid fa-users"></i>
                                                            <p>Users</p>
                                                        </div>  
                                                    </div>
                                                    <div class="d-flex align-items-center user-card">
                                                        <h1>20</h1>
                                                        <div class="ms-1 mt-2">
                                                            <i class="fa-solid fa-chalkboard-user"></i>
                                                            <span>Teachers</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="px-3 py-2 m-1">
                                                <span>Subjects</span>
                                                <div class="d-flex flex-row dashboard-icons justify-content-start">
                                                    <div class="d-flex align-items-center pe-2 user-card">
                                                        <h1>20</h1>
                                                        <div class="ms-1 mt-2">
                                                            <i class="fa-solid fa-users"></i>
                                                            <p>Users</p>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                
                                            </h4>
                                            <p class="mb-2">
                                               
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    <p>olah</p>
                                                </span>
                                                <span class="text-muted">
                                          
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Curriculum
                        </h5>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </body>
        
            </main>
            <!-- <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a> -->
        </div>
    </div>
</body>
</html>