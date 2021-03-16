<?php

$db = mysqli_connect('localhost', 'root', '', 'student');




function row_count_login($result){

    return mysqli_num_rows($result);
}


function escape_login($string) {

    global $db;

    return mysqli_real_escape_string($db, $string);

}

function query($query) {

    global $db;

    return mysqli_query($db, $query);

}


function confirm($result){

    global $db;

    if(!$result) {
        die("Connection failed, Mtt maan".mysqli_error($db));
    }

}

function fetch_array($result) {

    global $db;

    return mysqli_fetch_array ($result);

}



function validate_login_user() {

    if($_SERVER['REQUEST_METHOD'] == "POST")   {
    
        $login_1 = $_POST['member-rollno'];
        $login_2 = $_POST['member-password'];
    

        if(login_user($login_1, $login_2)) {

            header("location: ../code/applicationform.html");
        
        }
        else {

            echo "credentials not match";
        }
    }
                     
       
}



function login_user($login_1, $login_2){

    $sql = "SELECT user_password, id FROM user_register WHERE user_rollno = '".escape_login($login_1)."'";
    $result = query($sql);

    if(row_count_login($result) == 1) {

        return true;
    }

    else {

        return false;
    }

}