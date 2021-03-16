<?php 

$conn = mysqli_connect('sql201.epizy.com', 'epiz_26075908', 'hKeAPASVmhn', 'epiz_26075908_student');


function row_count($result){

    return mysqli_num_rows($result);
}


function escape($string) {

    global $conn;

    return mysqli_real_escape_string($conn, $string);

}

function query($query) {

    global $conn;

    return mysqli_query($conn, $query);

}


function confirm($result){

    global $conn;

    if(!$result) {
        die("Connection failed, Mtt maan".mysqli_error($conn));
    }

}

function fetch_array($result) {

    global $conn;

    return mysqli_fetch_array ($result);

}


    
    


?>