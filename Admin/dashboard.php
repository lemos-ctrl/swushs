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
                        <div class="list list-row block card2">
                            <h6 class="text-center mt-2">ATTENDANCE TODAY</h6>
                            <div class="list-item" data-id="19">
                                <div><a href="#" data-abc="true"><span class="w-48 avatar gd-warning">S</span></a></div>
                                <div class="flex">
                                    <a href="#" class="item-author text-color" data-abc="true">Sam Kuran</a>
                                    <div class="item-except text-muted text-sm h-1x">7:00am</div>
                                </div>
                                <div class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                                </div>
                            </div>

                            <div class="list-item" data-id="7">
                                <div><a href="#" data-abc="true"><span class="w-48 avatar gd-primary"><img src="https://img.icons8.com/color/48/000000/administrator-male.png" alt="."></span></a></div>
                                <div class="flex">
                                    <a href="#" class="item-author text-color" data-abc="true">Kinley Adolf</a>
                                    <div class="item-except text-muted text-sm h-1x">7:00am</div>
                                </div>
                                <div class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block">21 July</div>
                                </div>
                            </div>

                            <div class="list-item" data-id="17">
                                <div><a href="#" data-abc="true"><span class="w-48 avatar gd-warning">H</span></a></div>
                                <div class="flex">
                                    <a href="#" class="item-author text-color" data-abc="true">Velden Kamut</a>
                                    <div class="item-except text-muted text-sm h-1x">7:00am</div>
                                </div>
                                <div class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block">13/3/19</div>
                                </div>
                            </div>

                            <div class="list-item" data-id="16">
                                <div><a href="#" data-abc="true"><span class="w-48 avatar gd-info">F</span></a></div>
                                <div class="flex">
                                    <a href="#" class="item-author text-color" data-abc="true">Stuart Kim</a>
                                    <div class="item-except text-muted text-sm h-1x">7:00am</div>
                                </div>
                                <div class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block">03/1/19</div>
                                </div>
                            </div>

                            <div class="list-item" data-id="4">
                                <div><a href="#" data-abc="true"><span class="w-48 avatar gd-success"><img src="https://img.icons8.com/color/48/000000/guest-male.png" alt="."></span></a></div>
                                <div class="flex">
                                    <a href="#" class="item-author text-color" data-abc="true">Simply Fry</a>
                                    <div class="item-except text-muted text-sm h-1x">7:00am</div>
                                </div>
                                <div class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block">2 hours ago</div>
                                </div>
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