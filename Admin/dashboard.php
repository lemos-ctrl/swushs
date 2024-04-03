<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>SWU-SHS AMS Admin Dashboard</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="../Styles/dashboard.css" />
              <!-- Fontawesome CDN Link -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
                </head>
                  <body>
                    <nav class="sidebar">
                      <a href="#" class="logo">Admin Portal</a>

                          <div class="menu-content">
                              <ul class="menu-items">
                                <!--<div class="menu-title">Your menu title</div>--> <!-- basta tanawn lang ug magamit -->
                                <li class="item">
                                  <a href="../Admin/dashboard.php">Dashboard</a>
                                </li>

                                  <li class="item">
                                    <a href="../Admin/attendance.php">Attendance</a>
                                  </li>

                                    <li class="item">
                                      <a href="../Admin/leaves.php">Leave Management</a>
                                    </li>

                                      <li class="item">
                                        <a href="../Admin/master-data.php">Master Data</a>
                                      </li>

                                        <li class="item">
                                          <a href="../Admin/settings.php">Settings</a>
                                        </li>
                                </ul>
                            </div>
                      </nav>

                    <nav class="navbar">
                      <i class="fa-solid fa-bars" id="sidebar-close"></i>
                    </nav>

                      <div class="main">
                        <!--<h1>Admin Dashboard Content</h1>-->
                          <div class="grid-container">
                            <div class="angry-grid">
                                <div id="item-0">
                                  <canvas id="chartjs-bar"></canvas>
                                </div>
                                <div id="item-1">
                                  <div class="table-responsive">
                                    <table class="table">
                                      ...
                                    </table>
                                  </div>
                                </div>
                                <div id="item-2">&nbsp;</div>
                                <div id="item-3">&nbsp;</div>
                            </div>
                          </div>          
                      </div>

                          <script src="../Scripts/dashboard-main.js"></script>
                            <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
                              <script src="../Scripts/chart.js"></script>+
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                  </body>
  </html>