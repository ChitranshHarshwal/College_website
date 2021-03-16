<?php ob_start();

session_start(); ?>
<?php include("functions.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icon.png" type="image/png" sizes="16x16">
    <title>Sign-up</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    
        <div class="row mt-5">
            <div class="col-sm-4 mt-5">
                <?php validate_user_reg();?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input class="form-control" name="signup-rollno" type="text" placeholder="Rollno" required> 
                            <small style="color:red;"></small>
                        </div>
                        <input class="form-group form-control" name="signup-email" type="email" placeholder="Email Address" required>
                        <input class="form-group form-control" name="signup-pwd" type="password" placeholder="Password" required>
                        <input class="form-group form-control" name="signup-repwd" type="password" placeholder="Re-enter Paassword" required>
                        <button class="btn btn-outline-dark" name="signup-submit" type="submit">Sign up</button>
                    </form>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>







