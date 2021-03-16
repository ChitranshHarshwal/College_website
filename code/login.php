<?php ob_start();

session_start();
include("functions.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login | Hogwarts</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="icon" href="assets/img/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300,400,500,600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="assets/css/aboutus.css">
    <link rel="stylesheet" href="assets/css/admission.css">
    <link rel="stylesheet" href="assets/css/applicationform.css">
    <link rel="stylesheet" href="assets/css/contact-us.css">
    <link rel="stylesheet" href="assets/css/courses.css">
    <link rel="stylesheet" href="assets/css/error%20404.css">
    <link rel="stylesheet" href="assets/css/first-year-applicant.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/nav-bar-home.css">
    <link rel="stylesheet" href="assets/css/navbar-uni.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/newsstand.css">
</head>

<body id="hero">
    <section id="nav-bar">
        <section id="nav-bar-uni">
            <div>
                <nav class="navbar navbar-light navbar-expand-md ">
                    <a href="index.php" class="navbar-brand" id="logo">
                        <img src="assets/img/logo.png" class="logo-img-login" height="70">
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                            <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-5">
                            <li role="presentation" class="nav-item">
                                <a id="nav-admission-log" href="admission.php" class="nav-link active">Admission</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="courses.php" class="nav-link active">Courses</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="newsstand.php" class="nav-link active">Newsstand</a>
                            </li>
                            <li role="presentation"class="nav-item">
                                <a href="aboutus.php" class="nav-link active">About Us</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="contactus.php" class="nav-link active mr-3" >Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </section>
    <section>
        <div class="row row-1_log-log">
            <div class="col-11 mx-auto parent-col-log">
                <div class="container-fluid cont_login-log">
                    <div class="row row-1_log-log">
                        <div class="col-12 col-md-6 col-left_login-log offset-1">
                            <img class="img-fluid img-1-log" src="assets/img/img-1-login.png">
                        </div>
                        <div class="col-12 col-md-5 col-right_login-log">
                        <h1 class="text-center form_head-log">Sign in to your<br />Account</h1>
                        <div>
                            <img class="img-fluid d-flex mx-auto" src="assets/img/img-2-login.png">
                        </div>
                        <div class="form-login-log mx-auto">
                        
                            <form action="" method="POST">
                                <input type="text" class="form-control email-field-log" id="user_email" name="member-rollno" placeholder="Roll no." required>
                                <input type="password" class="form-control password-field-log" id="user_pass" name="member-password" placeholder="Password" required>
                                <?php validate_login_user(); ?>
                                <div class="form-check">
                                    <input id="rem_check" class="form-check-input-log" type="checkbox" />
                                    <label class="form-check-label-log" for="rem_check">Remember me</label>
                                </div> 
                                <div class="text-center">
                                    <button class="btn login-btn-log mx-auto" type="submit" id="submit_btn">LOGIN</button>
                                </div>           
                            </form>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>