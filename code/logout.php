<?php  ob_start();

session_start();


include("functions.php");

session_destroy();

redirect("login.php");