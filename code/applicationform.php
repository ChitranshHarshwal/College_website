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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
</head>
<script>
		function validateForm() 
		{
		  var a = document.forms["myForm"]["fname-apply"].value;
		  var b = document.forms["myForm"]["lname-apply"].value;
		  var c = document.forms["myForm"]["faname-apply"].value;
		  var d = document.forms["myForm"]["email-apply"].value;
		  var e = document.forms["myForm"]["mob-apply"].value;
		  var f = document.forms["myForm"]["altr-apply"].value;
		  var g = document.forms["myForm"]["qua-apply"].value;
		  var h = document.forms["myForm"]["mark10-apply"].value;
		  var i = document.forms["myForm"]["pass10-apply"].value;
		  var j = document.forms["myForm"]["mark12-apply"].value;
		  var k = document.forms["myForm"]["pass12-apply"].value;
		  var l = document.forms["myForm"]["markgrad-apply"].value;
		  var m = document.forms["myForm"]["passgrad-apply"].value;
		  var n = document.forms["myForm"]["pincode-apply"].value;
		  var o = document.forms["myForm"]["hos-apply"].value;
		  var p = document.forms["myForm"]["st-apply"].value;
		  var q = document.forms["myForm"]["city-apply"].value;
		  var r = document.forms["myForm"]["state-apply"].value;
		  var s = document.forms["myForm"]["land-apply"].value;
		  var t = document.forms["myForm"]["schl-apply"].value;
		  var u = document.forms["myForm"]["cors-apply"].value;
		  var reg = /^[A-Za-z]+$/;
		  var reg1 = /^[A-Za-z\s]+$/;
          var reg2 = /^[0-9]+$/;
          var reg3 = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
          
		  if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "" || h == "" || i == "" || j == "" || k == "" || l == "" || m == "" || n == "" || o == "" || p == "" || q == "" || r == "" || s == "" || t == "" || u == "") 
		  {
			Swal.fire({
                                'title': 'Empty Field',
                                'text' : 'All fields are required',
                                'type' : 'error'
                            })
			return false;
		  }
          else if ((reg.test(a)==false) || (reg.test(b)==false) || (reg1.test(c)==false) ||(reg.test(q)==false) || (reg.test(r)==false))
          {
              if(reg.test(a)==false)
              {
                Swal.fire({
                                'title': 'Incorrect first name',
                                'text' : 'Numeric characters not allowed',
                                'type' : 'error'
                            })
              }
              else if(reg.test(b)==false)
              {
                Swal.fire({
                                'title': 'Incorrect last name',
                                'text' : 'Numeric characters not allowed',
                                'type' : 'error'
                            })
              }
              else if(reg1.test(c)==false)
              {
                Swal.fire({
                                'title': 'Incorrect father name',
                                'text' : 'Numeric characters not allowed',
                                'type' : 'error'
                            })
              }
              else if(reg1.test(q)==false)

              {
                Swal.fire({
                                'title': 'Incorrect city name',
                                'text' : 'Numeric characters not allowed',
                                'type' : 'error'
                            })
              }
              else if(reg.test(r)==false)
              {
                Swal.fire({
                                'title': 'Incorrect state name',
                                'text' : 'Numeric characters not allowed',
                                'type' : 'error'
                            })
              }
            
			return false;
          }
          else if ((reg2.test(e)==false) || (reg2.test(f)==false) || (reg2.test(n)==false))
          {
            if(reg2.test(e)==false)
              {
                Swal.fire({
                                'title': 'Incorrect phone number',
                                'text' : 'Only numeric charachters allowed',
                                'type' : 'error'
                            })
              }
              else if(reg2.test(f)==false)
              {
                Swal.fire({
                                'title': 'Incorrect alternate number',
                                'text' : 'Only numeric charachters allowed',
                                'type' : 'error'
                            })
              }
              else if(reg2.test(n)==false)
              {
                Swal.fire({
                                'title': 'Incorrect pincode',
                                'text' : 'Only numeric charachters allowed',
                                'type' : 'error'
                            })
              }
			return false;
          }
          else if (reg3.test(d) == false)
          {
            Swal.fire({
                                'title': 'Invalid Email',
                                'text' : "Recheck email you've entered",
                                'type' : 'error'
                            })
			return false;
          }
          else
          {
                alert('Data has been Sucessfully Submitted');
          }

          
          
		}
	</script>

<body>
    <section>
        <section id="nav-bar-uni">
            <div>
                <nav class="navbar navbar-light navbar-expand-md ">
                    <!-- <a href="index.php" class="navbar-brand mr-auto" id="logo"> -->
                        <img src="assets/img/logo.png" class="logo-img-uni" height="70">
                    <!-- </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li role="presentation" class="nav-item">
                                <a id="nav-admission-uni" href="admission.html" class="nav-link active">Admission</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="courses.html" class="nav-link active">Courses</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="newsstand.html" class="nav-link active">Newsstand</a>
                            </li>
                            <li role="presentation"class="nav-item">
                                <a href="aboutus.html" class="nav-link active">About Us</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="contactus.html" class="nav-link active mr-3" >Contact Us</a>
                            </li>
                        </ul>
                        <button class="btn btn-dark-uni mr-5 " type="button">
                            <a href="login.php" class="login-link">Login</a>
                        </button>
                    </div> -->
                </nav>
            </div>
        </section>
    </section>
    <section>
        <section id="sec-main" class="sec-main">
            <section id="sec-1-app">
                <div class="row">
                    <div class="col-lg-8 text-center">
                        <h3 class="head_col_left-sec1-app">Application Form</h3>
                        <h4 class="sub-head">Session 2020-2021</h4>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div>
                            <img class="img-fluid img-1-app" src="assets/img/img-1-application.png">
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section id="sec-2-apply">
            <?php insert_application_form(); ?>
            <form class="col-11 col-md-10 col-lg-11 mx-auto" action="" method="POST" name= "myForm" onsubmit="return validateForm()">
                <section id="form-1" class="form-1-apply">
                    <div class="form-row form-group">
                        <div class="col-lg-6 form-apply">
                            <button class="btn btn-primary" type="button" disabled="disabled" id="btn-1-apply">
                                Personal Details
                            </button>
                            <div class="form-row form-group">
                                <div class="col-lg-6 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="fname-apply" placeholder="First Name" required="">
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control form-field-apply" type="text" name="lname-apply" placeholder="Last Name" required="">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-lg-6">
                                    <input class="form-control form-field-apply" type="text" name="faname-apply" placeholder="Father's Name" maxlength="30" required="">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-lg-12">
                                    <input class="form-control form-field-apply" type="email" name="email-apply" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="mob-apply" placeholder="Mobile No." maxlength="10"required="">
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control form-field-apply" type="text" name="altr-apply" placeholder="Alternate No." maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </section>
                <section id="form-2" class="form-1-apply">
                    <div class="form-row">
                        <div class="col-lg-6 form-apply col-2-sec-2-apply">
                            <button class="btn btn-primary" type="button" disabled="disabled" id="btn-1-apply">Education Qualification</button>
                            <div class="form-row form-group">
                                <div class="col-lg-7">
                                    <select class="form-control form-field-apply select-color-apply" name="qua-apply" required="">
                                        <option value="" selected="">Current Qualification</option>
                                        <option value="12th Appearing">12th Appearing</option>
                                        <option value="12th Passed">12th passed</option>
                                        <option value="Graduate">Graduate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row form-group apply">
                                <div class="col-lg-7 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="mark10-apply" placeholder="Marks Secured in 10th grade (%)">
                                </div>
                                <div class="col-lg-4 offset-lg-1">
                                    <select class="form-control form-field-apply select-color-apply" name="pass10-apply">
                                        <option value="" selected="">Year Passed</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row form-group apply">
                                <div class="col-lg-7 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="mark12-apply" placeholder="Marks Secured in 12th grade (%)">
                                </div>
                                <div class="col-lg-4 offset-lg-1">
                                    <select class="form-control form-field-apply select-color-apply" name="pass12-apply">
                                        <option value="" selected="">Year Passed</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="markgrad-apply" placeholder="Marks Secured in Graduation if any (in gpa)">
                                </div>
                                <div class="col-lg-4 offset-lg-1">
                                    <select class="form-control form-field-apply select-color-apply" name="passgrad-apply">
                                        <option value="" selected="">Year Passed</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 form-apply">
                            <button class="btn btn-primary" type="button" disabled="disabled" id="btn-2-apply">Residential Details</button>
                            <div class="form-row form-group">
                                <div class="col-lg-5 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="pincode-apply" placeholder="Pincode" maxlength="6">
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control form-field-apply" type="text" name="hos-apply" placeholder="Hos. No, Building No.">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                    <input class="form-control form-field-apply" type="text" name="st-apply" placeholder="Street Name">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-lg-5 spcl-margin-apply">
                                    <input class="form-control form-field-apply" type="text" name="city-apply" placeholder="City">
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control form-field-apply" type="text" name="state-apply" placeholder="State">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                    <input class="form-control form-field-apply" type="text" name="land-apply" placeholder="Landmark">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="form-3" class="form-1-apply">
                    <div class="form-row">
                        <div class="col form-apply">
                            <button class="btn btn-primary" type="button" id="btn-3-apply">Applying for</button>
                            <div class="form-row form-group">
                                <div class="col-md-5">
                                    <select class="form-control form-field-apply select-color-apply" name="schl-apply">
                                        <option value="" selected="">Select the School</option>
                                        <option value="School of Commerce">School of Commerce</option>
                                        <option value="School of Technology">School of Technology</option>
                                        <option value="School of Science">School of Science</option>
                                    </select>
                                </div>
                                <div class="col-md-5 ml-auto">
                                    <select class="form-control form-field-apply select-color-apply" name="cors-apply">
                                        <option value="" selected="">Select the Course</option>
                                        <optgroup label="School of Commerce">
                                            <option value="B.Com">B.Com</option>
                                            <option value="B.Com Hons">B.Com Hons</option>
                                            <option value="B.Com Economics">B.Com Economics</option>
                                            <option value="M.Com">M.Com</option>
                                            <option value="M.Com Hons">M.Com Hons</option>
                                        </optgroup>
                                        <optgroup label="School of Technology">
                                            <option value="B.Tech Mechanical Engineering">B.Tech Mechanical Engineering</option>
                                            <option value="B.Tech Computer Science and  Engineering">B.Tech Computer Science and  Engineering</option>
                                            <option value="B.Tech Civil Engineering">B.Tech Civil Engineering</option>
                                            <option value="B.Tech Electrical and Comm. Engineering">B.Tech Electrical and Comm. Engineering</option>
                                            <option value="B.Tech Electrical Engineering">B.Tech Electrical Engineering</option>
                                        </optgroup>
                                        <optgroup label="School of Science">
                                            <option value="B.Sc Physics">B.Sc Physics</option>
                                            <option value="B.Sc Biophysics">B.Sc Biophysics</option>
                                            <option value="B.Sc Computer Science">B.Sc Computer Science</option>
                                            <option value="B.Sc Earth Science">B.Sc Earth Science</option>
                                            <option value="B.Sc Mathematics">B.Sc Mathematics</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        <div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="formCheck-1" required>
                                        <label class="form-check-label label-apply" for="formCheck-1">
                                            I hereby declear that all the information is filled by me and is correct. If there is any fraud regarding 
                                            documents i’ll be guilty and ready to face proper actions againts me.
                                            <br>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-primary submit-apply" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
            </form>
        </section>
    </section>
    <section>
        <section id="footer" class="footer-apply">
            <div class="row">
                <div class="col text-center col-footer-apply">
                    <p class="foot-para">
                        Copyright © 2020 by Hogwarts College All rights reserved.<br></p>
                </div>
            </div>
        </section>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    
</body>

</html>