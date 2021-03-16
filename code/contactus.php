<?php ob_start();

session_start(); ?>
<?php include("functions.php"); ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact us | Hogwarts</title>
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

<body>
    <section>
        <section id="nav-bar-uni">
            <div>
                <nav class="navbar navbar-light navbar-expand-md ">
                    <a href="index.php" class="navbar-brand mr-auto" id="logo">
                        <img src="assets/img/logo.png" class="logo-img-uni" height="70">
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li role="presentation" class="nav-item">
                                <a id="nav-admission-uni" href="admission.php" class="nav-link active">Admission</a>
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
                        <button class="btn btn-dark-uni mr-5 " type="button">
                            <a href="login.php" class="login-link">Login</a>
                        </button>
                    </div>
                </nav>
            </div>
        </section>
    </section>
    <section>
        <section>
            <div class="container-fluid sec-1-cont-contact">
                <h1 class="head1-contact">Contact us</h1>
                <hr class="line-1-grad-contact">
                <hr class="line-1-contact">
            </div>
        </section>
    </section>
    <section>
        <section id="sec-2-contact">
            <div class="row">
                <div class="col-11 col-md-11 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-5 mx-auto">
                            <h1 class="block-head-contact">Thank you for your interest in Hogwarts College!<br></h1>
                        </div>
                        <div class="col-12 col-md-7 mx-auto sec-2-right-contact">
                            <p class="block-para-contact">
                                We receive a very large number of emails every day and may not always be able to respond 
                                as quickly as we would like. Please reference our Frequently Asked Questions for more 
                                information on admissions, financial aid, and other questions about Hogwarts. To 
                                expedite the response to your questions, select a topic from the list below.
                                <br>
                                <br>
                                You can also join our mailing list to learn more about the Harvard College experience.
                                <br>
                            </p>
                            <?php validate_contact_form(); ?>
                                <form action="" method="POST">
                                    <select class="form-control form-group select-drop-contact" name="question-contact" required="">
                                        <option value="" selected="">What is Your Question about ? </option>
                                        <option value="Admission">Admission</option>
                                        <option value="College">College</option>
                                        <option value="Student Aid">Student Aid</option>
                                    </select>
                                    <select class="form-control form-group select-drop-contact" name="subj-contact" required="">
                                        <option value="" selected="">Subject</option>
                                        <option value="Applicant Question">Applicant question ( if you've already submitted your application )</option>
                                        <option value="First Year Admission">First Year Admission</option>
                                        <option value="Transfer Admission">Transfer Admission</option>
                                        <option value="Visitor Center">Visitor Center ( tour and information session) </option>
                                    </select>
                                    <input class="form-group form-control form-field field-1" type="text" name="fname-contact" placeholder="First Name" required="" >
                                    <input class="form-group form-control form-field" type="text" name="lname-contact" placeholder="Last Name" required="">
                                    <input class="form-group form-control form-field" type="email" name="email-contact" placeholder="Email Address" required="">
                                    <textarea class="form-group form-control form-field-question" rows="3" name="que-desc-contact" required="" placeholder="Question" maxlength="250"></textarea>
                                    <div class="justify-content-center">
                                        <button class="btn btn-primary active submit-contact" type="submit" name="contact-submit">Submit</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-3-contact">
            <div class="row">
                <div class="col-11 col-md-11 mx-auto">
                    <hr class="line-2-contact">
                    <div class="row sec-3-row-paraent-contact">
                        <div class="col-12 col-md-5 mx-auto">
                            <h1 class="block-head-contact">Contact Information<br></h1>
                        </div>
                        <div class="col-12 col-md-7">
                            <p class="block-para-contact">
                                <span class="subpara-head-contact">Phone:</span> 
                                <br />
                                You can reach us by phone from 9 a.m. to 5 p.m. ET Monday through Friday.
                                <br /><br /><br />
                                <span class="subpara-head-contact">Hogwarts College Admissions</span>
                                <br />
                                617-495-1551 
                                <br />
                                The Admissions phone line is closed Tuesdays from 10:30 AM to 12
                                PM and Wednesdays from 4 to 5 PM Eastern Time.
                                <br /><br /><br />
                                <span class="subpara-head-contact">Hogwarts College
                                    <br />
                                    Griffin Financial Aid Office
                                </span>
                                <br /><br />
                                617-495-1581
                                <br />
                                The Griffin Financial Aid Office phone line is currently not accessible while
                                staff are working remotely. Please use the contact form above and we will respond via 
                                email.
                                <br /><br /><br /><br />
                                <span class="subpara-head-contact">Mail:</span>
                                <br />
                                <br />
                                Office of Admissions and Financial Aid, Committee on Transfer Admissions, or Committee 
                                on Visiting Undergraduate Admissions
                                <br />
                                <br />
                                <span class="clg-address-contact">Hogwarts College
                                    <br />
                                    98 Brattle Street
                                    <br />
                                    Cambridge, MA 021338
                                </span>
                                <br /><br /><br /><br/>
                                <span class="subpara-head-contact">Admissions Visitor Center</span>
                                <br />
                                <span class="clg-address-contact" style="text-decoration:underline; text-decoration-color:rgba(0,0,0,0.25);">
                                    Agassiz House
                                    <br />
                                    Radcliffe Yard
                                    <br />
                                    5 James Street
                                    <br />
                                    Cambridge, MA 02138
                                </span>
                                <br /><br /><br />
                                <span class="subpara-head-contact">Fax:</span>
                                <br />
                                Hogwarts College Admissions   
                                <br />
                                617-495-88213
                                <br /><br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section id="footer">
            <section>
                <div>
                    <div class="row row-footer">
                        <div class="col col-footer">
                            <div class="container-fluid cont-1-footer">
                                <div class="row">
                                    <div class="col-7 col-of-foot-links-&amp;-icons">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>