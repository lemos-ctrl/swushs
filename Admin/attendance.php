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
                                        <h2 class="text-left" style="color: maroon;">Attendance List for Today</h2>
                                    <div class="table-responsive">
                                        <table id="example" style="width:100%" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th>Name</th>
                                                <th>Employee ID</th>
                                                <th>Login Time</th>
                                                <th>Logout Time</th>
                                                <th>Profile</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Tsiger Nixon</td>
                                                <td>684564531</td>
                                                <td>7:00 am</td>
                                                <td>6:00 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> John Doe</td>
                                                <td>123456789</td>
                                                <td>8:15 am</td>
                                                <td>5:45 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Jane Smith</td>
                                                <td>987654321</td>
                                                <td>9:00 am</td>
                                                <td>7:30 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Alice Johnson</td>
                                                <td>456789123</td>
                                                <td>7:30 am</td>
                                                <td>6:30 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Bob Williams</td>
                                                <td>135792468</td>
                                                <td>8:00 am</td>
                                                <td>5:00 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Emily Davis</td>
                                                <td>369258147</td>
                                                <td>8:30 am</td>
                                                <td>6:15 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Michael Brown</td>
                                                <td>582964731</td>
                                                <td>7:45 am</td>
                                                <td>6:45 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Sarah Miller</td>
                                                <td>814725936</td>
                                                <td>9:15 am</td>
                                                <td>7:00 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> David Taylor</td>
                                                <td>632841975</td>
                                                <td>8:20 am</td>
                                                <td>6:10 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Lisa Martinez</td>
                                                <td>759318462</td>
                                                <td>7:20 am</td>
                                                <td>6:20 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> William Rodriguez</td>
                                                <td>297186543</td>
                                                <td>8:10 am</td>
                                                <td>5:50 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-regular fa-id-card"></i> Olivia Garcia</td>
                                                <td>931674258</td>
                                                <td>9:30 am</td>
                                                <td>7:45 pm</td>
                                                <td><a href="#" class="view-link">View</a></td>
                                            </tr>

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>





                            <button type="button" class="btn btn-primary btn-lg">Generate Attendance Report <i class="fa fa-database" aria-hidden="true"></i></button>


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