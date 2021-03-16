<?php ob_start();

session_start();
include("functions.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hogwarts</title>
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

<body class="body-index">
    <section>
        <div>
            <nav class="navbar navbar-dark navbar-expand-md navbar-indx">
                <div class="container-fluid">
                    <a href="index.php" class="navbar-brand">
                        <img src="assets/img/logo.png" height="70" class="logo-index" />
                    </a>
                    <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li role="presentation" class="nav-item">
                                <a href="admission.php" class="nav-link active" id="nav-item-color">Admission</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="courses.php" class="nav-link active" id="nav-item-color">Courses</a>
                            </li>
                            <li role="presentation" class="nav-item" id="nav-item-color">
                                <a href="newsstand.php" class="nav-link active" id="nav-item-color">Newsstand</a>
                            </li>
                            <li role="presentation" class="nav-item" id="nav-item-color">
                                <a href="aboutus.php" class="nav-link active" id="nav-item-color">About us</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="contactus.php" class="nav-link active mr-4" id="nav-item-color">Contact us</a>
                            </li>
                        </ul>
                        <button class="btn btn-secondary mr-4 btn-login-indx" type="button">
                            <a href="login.php" class="login-link-indx">Login</a>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section>
        <section id="sec-1-index" class="hero-background">
            <div class="div-hero-head-index">
                <div class="col-4 col-12">
                    <h1 class="hero-head-index">Hogwarts<br />
                        <div class="head-inst-2-index">College
                        </div>
                    </h1>
                    <p class="para-hero-index">Start with a Dream, Finish With a<br />Future<br /></p>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-2-index">
            <div class="row">
                <div class="col-12 col-md-5 col-img-1">
                    <div>
                        <img class="img-fluid sec-2-img-3-index" src="assets/img/sec-2-img-1-indx.png" data-aos="fade-right" data-aos-duration="500">
                    </div>
                </div>
                <div class="col-11 col-md-7 mx-auto sec-2-bg-img-index" data-aos="fade" data-aos-duration="1150">
                    <div class="container">
                        <div class="sec-2-vec-3-index"><img class="img-fluid" src="assets/img/sec-2-vec-3.png"></div>
                        <h1 class="sec-2-head-index sec-2-head-margin-index">
                            Our Campus Offers Students Dozen of Opportunites
                        </h1>
                        <p class="sec-2-para-index">
                            Our beautiful campus offers students the best of education and entertainment opportunities 
                            available in the area for every student and university entrant.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-3-index">
            <div class="row">
                <div class="col-11 col-md-6 sec-3-col-left-index mx-auto">
                    <div>
                        <img class="img-fluid" src="assets/img/new-sec-3-img-1.png" data-aos="fade-up" data-aos-duration="500">
                    </div>
                </div>
                <div class="col-11 col-md-6 sec-3-col-right-index mx-auto">
                    <div>
                        <h1 class="sec-3-head1-index">Why Campus life ?</h1>
                        <p class="lead sec-3-para1-index">
                            <br>
                            Campus Life is the hub to a talented and diverse student community. If you’re serious 
                            about academics and driven to turn opportunities into success, we want to hear from you.
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-2-sec-3-index">
                <div class="col-11 col-md-6 order-2 mx-auto">
                    <div>
                        <h1 class="sec-3-head2-index discver-us-sec-2-index">Discover Us</h1>
                        <p class="lead sec-3-para2-index spl-sec-2-index">
                            <br>
                            Campus Life is always ready to give new students a way to develop themselves in order to enjoy the life at the University. Discover the life at CL by taking a virtual tour through our facilities and getting to know our staff
                            and students.
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="col-11 col-md-6 mx-auto order-md-2">
                    <div>
                        <img class="img-fluid" src="assets/img/new-sec-3-img-2.png" data-aos="fade" data-aos-duration="500">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 col-md-6 mx-auto sec-3-col-left-index">
                    <div>
                        <img class="img-fluid" src="assets/img/new-sec-3-img-3.png" data-aos="fade-right" data-aos-duration="500">
                    </div>
                </div>
                <div class="col-11 col-md-6 mx-auto vector-2-index">
                    <div>
                        <h1 class="sec-3-head1-index">Apply</h1>
                        <p class="lead sec-3-para1-index">
                            <br>
                            Living on campus is an essential part of the College experience. Studies show that it can help you earn a 
                            higher GPA and graduate on time. If you’re thinking of making your home in one of our 14 residence halls, 
                            Apply today !... and lets make your dream come true.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-4-index">
            <section>
                <div>
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center sec-2-col">
                            <img class="img-fluid class-topc" src="assets/img/Siemens.png">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center sec-2-col">
                            <img class="img-fluid class-topc" src="assets/img/linkedin.png">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center sec-2-col">
                            <img class="img-fluid class-topc" src="assets/img/OneDrive.png">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center sec-2-col">
                            <img class="img-fluid class-topc" src="assets/img/TATA.png">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center sec-2-col">
                            <img class="img-fluid class-topc" src="assets/img/Tesla.png">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center sec-2-col">
                            <img class="img-fluid class-topc" src="assets/img/android.png">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section>
        <section id="sec-5-index">
            <h1 class="col-11 mx-auto uni-head-index">Academic Degree</h1>
            <div>
                <div class="row row-1-sec-5-index">
                    <div class="col-11 mx-auto col-md-4 cols-sec-5-index mx-auto">
                        <div class="container cont-1">
                            <h1 class="text-left sec-5-col-head-index">School of Commerce</h1>
                            <div class="mx-auto">
                                <img class="img-fluid sec-5-img-1-index" src="assets/img/sec-5-img-1.png" width="230">
                            </div>
                            <ul class="sec-5-col-list-index">
                                <li>B.Com</li>
                                <li>B.Com Hons</li>
                                <li>M.Com</li>
                                <li>M.Com Hons</li>
                                <li>M.Com Economics</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-11 mx-auto col-md-4 sec-5-col-width mx-auto">
                        <div class="container cont-1">
                            <h1 class="text-left sec-5-col-head-index">School of Engineering</h1>
                            <div class="mx-auto">
                                <img class="img-fluid sec-5-img-1-index" src="assets/img/sec-5-img-2.png" width="230">
                            </div>
                            <ul class="sec-5-col-list-index">
                                <li>B.Tech Mechanical Engineering</li>
                                <li>B.Tech Computer Science and Engineering</li>
                                <li>B.Tech Civil Engineering</li>
                                <li>B.Tech Electrical Engineering</li>
                                <li>B.Tech Electronics and Communication Engineering</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-11 mx-auto col-md-4 cols-sec-5-index mx-auto">
                        <div class="container cont-1">
                            <h1 class="text-left sec-5-col-head-index">School of Science</h1>
                            <div class="mx-auto">
                                <img class="img-fluid sec-5-img-1-index" src="assets/img/sec-5-img-3.png" width="230">
                            </div>
                            <ul class="sec-5-col-list-index">
                                <li>B.Sc Applied Science&nbsp;</li>
                                <li>B.Sc Biophysics<br></li>
                                <li>B.Sc Computer Science</li>
                                <li>B.Sc Earth Science</li>
                                <li>B.Sc Mathematics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-6-index">
            <div class="row">
                <div class="col-11 col-md-8 mx-auto sec-6-col-left-index">
                    <div><h1 class="uni-head-index">Words that leads to path of <br />enligntenment</h1>
                        <h4 class="dr-name-index">Dr. Renu Gopal Ramakrishnan</h4>
                    </div>
                    <div>
                        <p class="lead dr-message-index">
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam amet, pharetra aliquam dapibus 
                            adipiscing vitae nec arcu. Iaculis eget nulla aliquam velit et. Et ipsum amet pellentesque f
                            elis commodo maecenas quam pretium. Tellus
                            mauris ipsum ornare feugiat sit cursus. Elementum eros, at ac ut sed.
                            <br></p>
                    </div>
                </div>
                <div class="col-11 col-md-4 mx-auto">
                    <div>
                        <img src="assets/img/dr-image.png" class="dr-image">
                    </div>
                    <div>
                        <h5 class="dr-qua">Director<br />Ex-IRS, Ex-ISRO Scientist</h5>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-7-index">
            <div class="col-md-10 mx-auto">
                <h1 class="uni-head-index text-center">Why We are the Best&nbsp;</h1>
                <p class="sec-2-para-index text-center">
                    Its not about getting education, what more important is gaining the true values which helps not only 
                    to grow but making a good person of ouf you. That’s what drives us to be who we are now
                    <br><br><br>
                </p>
            </div>
            <div>
                <div class="row row-1-sec-7-index">
                    <div class="col-11 mx-auto col-md-4 side-col-sec-7-index">
                        <div class="container side-cont-sec-7-index">
                            <div><img src="assets/img/sec-7-img-1-index.png" class="sec-7-num-img-index"></div>
                            <div>
                                <p class="lead para-sec-7-index">
                                    <br>
                                    graduted students have got the jobs related to degree they recieved and have been 
                                    supporting to freshers by various events
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 col-center-sec-7-index mx-auto">
                        <div class="container center-cont-sec-7-index">
                            <div class=".sec-7-num-img-index">
                                <img src="assets/img/sec-7-img-2-index.png" class="sec-7-num-img-index">
                            </div>
                            <div>
                                <p class="lead text-center para-sec-7-index">
                                    <br>
                                    According to CQ ranking we have been marked as the No. 1 Institute among various fiels such as infrastructure, academics, cirrculum and placements from 2015-2020.<br>Its the professors and are students who makes the
                                    effort worthy.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 mx-auto col-md-4 side-col-sec-7-index">
                        <div class="container side-cont-sec-7-index">
                            <div>
                                <img src="assets/img/sec-7-img-3-index.png" class="sec-7-num-img-index">
                            </div>
                            <div>
                                <p class="lead para-sec-7-index">
                                    <br>
                                    is the overall student GPA average for the summer-fall of 2020 and made it to the 
                                    top universities across the gloabe for future studies
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-8-index">
            <div class="row">
                <div class="col-11 align-self-center mx-auto col-md-5">
                    <div class="container cont-left-sec-8-index">
                        <div data-aos="fade-right" data-aos-duration="550">
                            <h1 class="uni-head-index">Our<br />Alumini</h1>
                            <p class="para-sec-7-index text-left lead">
                                we have such a string community of alumini who have been working in different fields and 
                                always ready to support our students 
                                <br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto col-md-7 col-right-sec-8-index" data-aos="fade" data-aos-duration="600">
                    <img class="img-fluid" src="assets/img/sec-8-bg-index.png">
                </div>
            </div>
        </section>
    </section>
    <div class="newsletter-subscribe">
        <div class="container">
            <div class="intro">
                <h2 class="text-center uni-head-index">Subscribe to our Newsletter</h2>
                <p class="sec-2-para-index text-center">
                    Want the latest information from us straight to your inbox ? Chuck us your details and get a 
                    weekly email
                </p>
            </div>
            <?php validate_subs_form(); ?>
            <form class="form-inline" method="post">
                <div class="form-group">
                    <input class="form-control subs-field" type="email" name="subs-email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark active subs-btn" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
    <section>
        <section id="footer">
            <section>
                <div>
                    <div class="row row-footer">
                        <div class="col col-footer">
                            <div class="container-fluid cont-1-footer">
                                <div class="row">
                                    <div class="col-7 col-of-foot-links-icons">
                                        <div class="row row-of-foot-links">
                                            <div class="col col-of-foot-links">
                                                <ul class="nav nav-tabs foot-links">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="admission.php" id="foot-link-1">Admission</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="courses.php" id="foot-link-2">Courses</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="aboutus.php" id="foot-link-3">About Us</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="contactus.php" id="foot-link-4">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row row-icons">
                                            <div class="col col-icons">
                                                <div class="row">
                                                    <div class="col col2-of-foot-icons">
                                                        <i class="fab fa-facebook face-icon"></i>
                                                        <i class="fa fa-twitter twit-icon"></i>
                                                        <i class="fab fa-instagram insta-icon"></i>
                                                        <i class="fab fa-youtube yout-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-center foot-logo">
                                        <div class="row foot-logo-row">
                                            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 col-img">
                                                <img class="img-fluid footer-logo-img" src="assets/img/foot-logo.png">
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6 text-left align-self-center col-hog-head">
                                                <h1 class="hogwarts-footer-head">Hogwarts<br /> College</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-footer-copyright">
                            <p class="text-center footer-para">
                                Copyright © 2020 by Hogwarts College All rights reserved.<br></p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
   
    
</body>

</html>