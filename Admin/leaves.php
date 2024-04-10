<?php 
include_once '../includes/cdn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
</head>
  <body>      
    <div class="wrapper">
              <?php include '../Admin/includes/sidebar.php';?>
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
                                        <h2 class="text-left" style="color: maroon;">Leave Management</h2>
                                    <div class="table-responsive">
                                        <table id="example" style="width:100%" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th>Name</th>
                                                <th>Employee ID</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Leave Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Tiger Nixon</td>
                                                    <td>684564531</td>
                                                    <td>February 29, 2024</td>
                                                    <td>March 13, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i>John Doe</td>
                                                    <td>123456789</td>
                                                    <td>January 15, 2024</td>
                                                    <td>February 1, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Jane Smith</td>
                                                    <td>987654321</td>
                                                    <td>March 5, 2024</td>
                                                    <td>March 20, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Alice Johnson</td>
                                                    <td>456789123</td>
                                                    <td>April 10, 2024</td>
                                                    <td>April 25, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Bob Williams</td>
                                                    <td>135792468</td>
                                                    <td>May 20, 2024</td>
                                                    <td>June 5, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Emily Davis</td>
                                                    <td>369258147</td>
                                                    <td>July 1, 2024</td>
                                                    <td>July 15, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Michael Brown</td>
                                                    <td>582964731</td>
                                                    <td>August 10, 2024</td>
                                                    <td>August 25, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Sarah Miller</td>
                                                    <td>814725936</td>
                                                    <td>September 15, 2024</td>
                                                    <td>October 1, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> David Taylor</td>
                                                    <td>632841975</td>
                                                    <td>November 5, 2024</td>
                                                    <td>November 20, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Lisa Martinez</td>
                                                    <td>759318462</td>
                                                    <td>December 10, 2024</td>
                                                    <td>December 25, 2024</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> William Rodriguez</td>
                                                    <td>297186543</td>
                                                    <td>January 1, 2025</td>
                                                    <td>January 15, 2025</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa-solid fa-user"></i> Olivia Garcia</td>
                                                    <td>931674258</td>
                                                    <td>February 20, 2025</td>
                                                    <td>March 7, 2025</td>
                                                    <td><a href="#" class="view-link">View</a></td>
                                                </tr>


                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </main>
            </div><!-- main -->
        </div><!-- wrapper -->



            <script src="../Scripts/barchart.js"></script>
            <script>
                $(function() {
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                    });
            </script>
  </body>
</html>