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
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">Add School Years</button>
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
                                <h5 class="modal-title" id="exampleModalLongTitle">Add School Years</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> </span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="addSubjectForm">
                                    <div class="mb-3">
                                        <label for="subjectName" class="form-label">School Year Name:</label>
                                        <input type="text" class="form-control" id="schoolYearName" name="subjectName"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectCode" class="form-label">School Year Duration:</label>
                                        <input type="text" class="form-control" id="subjectCode" name="subjectCode"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectDescription" class="form-label">Subject Description</label>
                                        <input type="text" class="form-control" id="subjectDescription"
                                            name="subjectDescription">
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

                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title m-0">
                            Schoolyears
                        </h5>
                    </div>
                    <div class="card-body">

                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Schoolyear ID</th>
                                    <th>Schoolyear Duration</th>
                                    <th># of Subjects</th>
                                    <th># of Strands</th>
                                    <th># of Faculty</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2223</td>
                                    <td>January 2022 - March 2023</td>
                                    <td>45</td>
                                    <td>10</td>
                                    <td>89</td>
                                    <td>Delete | Edit</td>
                                </tr>
                                <tr>
                                    <td>2223</td>
                                    <td>January 2022 - March 2023</td>
                                    <td>45</td>
                                    <td>10</td>
                                    <td>89</td>
                                    <td>Delete | Edit</td>
                                </tr>
                                <tr>
                                    <td>2223</td>
                                    <td>January 2022 - March 2023</td>
                                    <td>45</td>
                                    <td>10</td>
                                    <td>89</td>
                                    <td>Delete | Edit</td>
                                </tr>
                                <tr>
                                    <td>2223</td>
                                    <td>January 2022 - March 2023</td>
                                    <td>45</td>
                                    <td>10</td>
                                    <td>89</td>
                                    <td>Delete | Edit</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Schoolyear ID</th>
                                    <th>Schoolyear Duration</th>
                                    <th># of Subjects</th>
                                    <th># of Strands</th>
                                    <th># of Faculty</th>
                                    <th>Options</th>
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