<?php require_once('../../includes/cdn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHS Faculty</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
    <script src="../../Scripts/script.js"></script>
</head>

<body>

<div class="wrapper">
    <?php include('../includes/sidebar.php'); ?> 
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
            
                <!-- SAME ROW OF DASHBOARD BANNER BUT LIKE I JUST PUT IT HERE KAY FOR EVERY PAGE LAHE LAHE -->
                <div class="col-12 col-md-2 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">
                                        class ni
                                    </h4>
                                    <p class="mb-2">
                                        kani kay button ni
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
            <!-- ENDS HERE -->
                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title m-0">
                            Strands
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
                </main>  
            </div>
        </div>
    </body>
</html>