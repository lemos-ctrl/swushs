<?php require_once('../../includes/cdn.php');
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
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">Add Subjects</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Subject</h5>
                            </div>
                            <div class="modal-body">
                                <form id="addSubjectForm">
                                    <div class="mb-3">
                                        <label for="subjectName" class="form-label">Subject Name</label>
                                        <input type="text" class="form-control" id="subjectName" name="subjectName"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectCode" class="form-label">Subject Code</label>
                                        <input type="text" class="form-control" id="subjectCode" name="subjectCode"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectDescription" class="form-label">Subject Description</label>
                                        <input type="text" class="form-control" id="subjectDescription"
                                            name="subjectDescription">
                                    </div>
                                    <div class="mb-3">
                                        <label for="strand" class="form-label">Strand</label>
                                        <select class="form-select" id="strand" name="strand">
                                            <option value="">Select Strand</option>
                                            <option value="Strand 1">Strand 1</option>
                                            <option value="Strand 2">Strand 2</option>
                                            <option value="Strand 3">Strand 3</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="creditedUnits" class="form-label">Credited Units</label>
                                        <input type="text" class="form-control" id="creditedUnits" name="creditedUnits">
                                    </div>
                                    <!-- Add more fields as needed -->
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="addSubject()">Add
                                    Subject</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ENDS HERE -->
                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title  m-0">
                            Subjects
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive"> -->
                        <table id="myTable" class="table table-hover table-bordered display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th rowspan="2" data-dt-order="disable">Code</th>
                                    <th rowspan="2">Subject</th>
                                    <th rowspan="2">Strand</th>
                                    <th rowspan="2">Year Level</th>
                                    <th colspan="3">Units</th>
                                    <th colspan="4">Hours/Week</th>
                                    <th>Students</th>
                                    <th colspan="3">Class Size</th>
                                    <th colspan="3">Sections</th>
                                    <th colspan="4">Total Teaching Hours</th>
                                    <th rowspan="2">Actual</th>
                                </tr>
                                <tr>
                                    <!-- units -->
                                    <td data-dt-order="disable">Lec</td>
                                    <td data-dt-order="disable">Lab</td>
                                    <td data-dt-order="disable">Total Units</td>
                                    <!-- hours/week -->
                                    <td data-dt-order="disable">Lec</td>
                                    <td data-dt-order="disable">Lab</td>
                                    <td data-dt-order="disable">RLE</td>
                                    <td data-dt-order="disable">Total Hours</td>
                                    <!-- students -->
                                    <td data-dt-order="disable">Projected</td>
                                    <!-- Class size -->
                                    <td data-dt-order="disable">Lec</td>
                                    <td data-dt-order="disable">Lab</td>
                                    <td data-dt-order="disable">RLE</td>
                                    <!-- sections -->
                                    <td data-dt-order="disable">Lec</td>
                                    <td data-dt-order="disable">Lab</td>
                                    <td data-dt-order="disable">RLE</td>
                                    <!-- total teaching hours -->
                                    <td data-dt-order="disable">Lec</td>
                                    <td data-dt-order="disable">Lab</td>
                                    <td data-dt-order="disable">RLE</td>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ABM 002</td>
                                    <td>Fundamentals of Accountancy, Business and Management 1 (SHS)</td>
                                    <td>ABM</td>
                                    <td>11</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td></td>
                                    <td>6</td>
                                    <td>80</td>
                                    <td>50</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>