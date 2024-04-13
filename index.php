<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SWU Scheduling System</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./Styles/styles.css" />
</head>

<body>
    <section class="loginpage">
        <div class="container">
            <div>
                <img src="././Resources/swubg.jpg" class="img-fluid loginbg" />
                <div class="black-film"></div>
            </div>

            <div class="row d-flex justify-content-center text-align-center login">
                <div class="col-4">
                    <div class="login-frame">
                        <form action="Process/login_process.php" method="post" class="needs-validation" novalidate>
                            <div class="row flex-column text-center align-items-center">
                                <div class="col-4">
                                    <img src="./Resources/swuphinmared.png" class="logoswu img-fluid" alt="swulogo" />
                                </div>
                                <div class="col pt-3">
                                    <h3>Login to your account</h3>
                                </div>
                                <div class="col">
                                    <input type="text" name="txtusername" id="name" class="form-control"
                                        placeholder="Username" required />
                                </div>
                                <div class="col">
                                    <input type="password" name="txtpassword" id="pass" class="form-control <"
                                        placeholder="Password" required />
                                    <input type="hidden"
                                        class="form-control <?php if(isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') echo 'is-invalid'; ?>"
                                        placeholder="Username" required />
                                    <!-- Display error message if it exists -->
                                    <?php
                                        if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
                                            echo "<div class='invalid-feedback'>Login failed. Please check your username and password and try again.</div>";
                                        }
                                    ?>
                                </div>
                                <div class="col">
                                    <input type="submit" name="submit" class="btn btn-primary">Login</input>
                                </div>
                                <div class="p-3">
                                    <a href="#"> Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <span>© Southwestern University PHINMA 2024. All Rights Reserved | Design
                by: Kurt Hydein P. Imperial
            </span>
        </div>
    </section>

    <script>
    (() => {
        'use strict';

        document.querySelectorAll('.needs-validation').forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
    </script>

</body>

</html>