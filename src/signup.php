<?php
session_start();
include "register.php";
// print_r($_SESSION);die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>

</head>

<body>
    <section class="vh-80 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                        <div class="card" style="border-radius: 15px;">
                        <h2 class="text-uppercase text-center mb-5"><a href="index.html">Back to Home</a> </h2>
                            <div class="card-body p-5">
                                <?php 
                                if (isset($_SESSION['status'])) {
                                    echo $_SESSION['status'];
                                    echo "<a href='login.php'><b>&nbsp;&nbsp;Login!</b></a>";
                                    unset($_SESSION['status']);
                                }
                                ?><br>
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <form action="register.php" method="POST" >
                                    <div class="form-outline mb-4">
                                    

                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Confirm password</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="confirm_password" />
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="register" value="Register">
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>