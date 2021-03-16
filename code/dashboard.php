
<?php ob_start();

session_start();
include("functions.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icon.png" type="image/png" sizes="16x16">
    <title>Dashboard | Hogwarts</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
        <div class="contianer">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">
                    <?php if(logged_in()) {

                        echo "Logged in";

                    }
                    else{

                        redirect("index.php");

                    }
                    ?></h1>

                    <div class="row">
                        <button class="btn btn-danger" type="button" name="logout-btn">
                            <a href="logout.php" style="color:white; text-decoration:none;">Logout</a>
                        </button>
                    </div>                    
                </div>  
            </div>
        </div>


        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>


