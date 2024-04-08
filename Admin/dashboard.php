<?php 
include_once '../includes/cdn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-8 col-lg-10">
                        <canvas id="myChart" class="py-1 card"></canvas>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="card">
                            <h6 class="text-center my-3">ATTENDANCE TODAY</h6>
                            <ul class="list-unstyled news-list mt-3">
                                <!-- Your list items -->
                                <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Alen </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li> 
                                        
                                        <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Jay  </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li> 

                                        <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Jerick  </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li> 
                                        
                                        <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Kurt  </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Lemuel  </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Jeriru  </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="row mx-0 mb-4">
                                            <a class="col-1">
                                                <div class="mt-3 mx-2 fa-regular fa-user "></div>
                                            </a>
                                                <div class="col h-2">
                                                    <a href="#">
                                                        <h2 class="h6 mx-3">Anthony  </h2>
                                                    </a>
                                                    <div>
                                                        <a class="text-secondary d-flex justify-content-center">
                                                            <span class="lni lni-exit-down me-2"></span>7:00am
                                                            <span class="lni lni-exit-up ms-2 me-2"></span>4:00pm
                                                        </a>
                                                            
                                                    </div>
                                                </div>
                                        </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 col-lg-2">
                        <div class="px-3 py-3 bg-white d-flex flex-column justify-content-center align-items-center mb-3 card">
                            <img src="../Resources/widgetlogo/check.png" alt="">
                                <h3 class="mt-3 mb-3">Checked In</h3>
                                    <p class="mb-0 ">
                                <span class="text-nowrap">36</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="px-3 py-3 bg-white d-flex flex-column justify-content-center align-items-center mb-3 card">
                            <img src="../Resources/widgetlogo/check.png" alt="">
                                <h3 class="mt-3 mb-3">Checked In</h3>
                                    <p class="mb-0 ">
                                <span class="text-nowrap">36</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="px-3 py-3 bg-white d-flex flex-column justify-content-center align-items-center mb-3 card">
                            <img src="../Resources/widgetlogo/check.png" alt="">
                                <h3 class="mt-3 mb-3">Checked In</h3>
                                    <p class="mb-0 ">
                                <span class="text-nowrap">36</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="px-3 py-3 bg-white d-flex flex-column justify-content-center align-items-center mb-3 card">
                            <img src="../Resources/widgetlogo/check.png" alt="">
                                <h3 class="mt-3 mb-3">Checked In</h3>
                                    <p class="mb-0 ">
                                <span class="text-nowrap">36</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="px-3 py-3 bg-white d-flex flex-column justify-content-center align-items-center mb-3 card">
                            <img src="../Resources/widgetlogo/check.png" alt="">
                                <h3 class="mt-3 mb-3">Checked In</h3>
                                    <p class="mb-0 ">
                                <span class="text-nowrap">36</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="px-3 py-3 bg-white d-flex flex-column justify-content-center align-items-center mb-3 card">
                            <img src="../Resources/widgetlogo/check.png" alt="">
                                <h3 class="mt-3 mb-3">Checked In</h3>
                                    <p class="mb-0 ">
                                <span class="text-nowrap">36</span>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            Exceptions
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            Pending Requests
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
    <script src="../Scripts/barchart.js"></script>
</body>
</html>