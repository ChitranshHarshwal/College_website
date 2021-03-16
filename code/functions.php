<?php include("db.php"); ?>
<?php


function clean($string){

    return htmlentities($string);

}


function redirect($location) {

    return header("Location: {$location}");
}



function set_message($message) {

    if(!empty($message)) {

        $_SESSION['message'] = $message;

    } else {

        $message = "";
    }
}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];

        unset($_SESSION['message']);
    } 
   
}


function token_generator() {

    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    
    return $token;


}


function validation_errors($error_message) {
    
    $error_message = <<<DELIMITER
    
    <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Warning!</strong> $error_message
     </div>
DELIMITER;
    
    return $error_message;
            
}



function rollno_exists($signup_rollno) {

    $sql = "SELECT id FROM stud_admitted WHERE adstud_rollno = '$signup_rollno'";

    $result = query($sql);
    
    if(row_count($result) == 1) {

       return false;

    } else {

        return true;
    
    }

}


function email_exists($signup_email) {

    $sql = "SELECT id FROM user_register WHERE user_email = '$signup_email'";

    $result = query($sql);
    if(row_count($result) == 1) {

        return true;

    } else {

        return false;
    }


}



/******************* VALIDAITON FUNCTION ****************************/

function validate_user_reg() {

    $errors = [];
    
    $min_max_rollno = 8;
    

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $signup_1 = clean($_POST['signup-rollno']);
        $signup_2 = clean($_POST['signup-email']);
        $signup_3 = clean($_POST['signup-pwd']);
        $signup_4 = clean($_POST['signup-repwd']);

                
        /* $error_message_rollno = <<<DELIMITER
        <div class="alert alert-danger fade show" role="alert">
            Rollno should be<strong> $min_max_rollno</strong> Characters.
        </div>
DELIMITER; */ 


        if(strlen($signup_1) !== $min_max_rollno) {

            $errors[] = "rollno must be <strong>'$min_max_rollno'</strong>characters.";
                            
        } 

        if(rollno_exists($signup_1)){ 

            $errors[] = "you cant sign up";
        }

        if(email_exists($signup_2)) {

            $errors[] = "email address taken";
        }
        

        if($signup_3 !== $signup_4) {

            $errors[] = "Passwords do not match";

        }

        if(!empty($errors)) {

            foreach ($errors as $error) {

                echo display_validaiton_error($error);
            }

        } else {

            if(signup_user($signup_1,$signup_2,$signup_3,$signup_4)) {

                set_message('<p class="display-1">Check your inbox to activate account</p>');
                redirect("login.php"); 
                exit();
            }
            else {
                set_message('<p class="display-1">Check your inbox to activate account</p>');
                header("Location: ../try_login/login.php"); 
                exit();
            }

        }

    }
}


function signup_user($signup_1,$signup_2,$signup_3,$signup_4) {

    $signup_1 = escape($signup_1);
    $signup_2 = escape($signup_2);
    $signup_3 = escape($signup_3);
    $signup_4 = escape($signup_4);


    if(rollno_exists($signup_1)) {

        return false;

    } else if (email_exists($signup_2)) {

        return false;

    } else {

        $signup_3 = md5($signup_3);
        $sql = "INSERT INTO user_register (user_rollno, user_email, user_password) VALUES ('$signup_1', '$signup_2', 
                '$signup_3')";
        $result = query($sql);
        confirm($result);
        
        return true;
    }
}




/*********************** VALIDATE LOGIN ************************************/



function validate_login_user() {

    if($_SERVER['REQUEST_METHOD'] == "POST")

    {
            $login_1 = $_POST['member-rollno'];
            $login_2 = $_POST['member-password'];

        if(login_user($login_1, $login_2)) {

            echo "well you are logged in";
            redirect("dashboard.php");
     
        }

        else {

            echo '<small style="color:red; font-weight:500;">Invalid Email or Password</small>';
        }

    }
}





function login_user ($login_1, $login_2) {


  $sql = "SELECT user_password, id FROM user_register WHERE user_rollno = '".escape($login_1)."'";
  $result = query($sql);

  if(row_count($result) == 1) {

        $row = fetch_array($result);

        $db_password = $row['user_password'];

        if(md5($login_2) === $db_password) {

            $_SESSION['user_rollno'] = $login_1;

            return true;

        }

        else {

                return false;
        }


        return true;
  }
  else {

    return false;
  }
}




/********************************** LOGGED IN FUNCTION **********************************/

function logged_in() {

    if(isset($_SESSION['user_rollno'])) {
        
        return true;
    }
    else {

        return false;

    }
}



/**********************************************************************************************************************
 *                                           SUBSCRIBE FORM                                                            *
 **********************************************************************************************************************/


function validate_subs_form() {


    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $subs = clean($_POST['subs-email']); 

        if(insert_subscribe($subs)) {

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Unable to submit;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
        else {

                echo '<div class="alert alert-success alert-dismissible fade show col-sm-5 mx-auto" role="alert">
                        Thanks for your Interest
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>';

        }

        }

    }



function insert_subscribe ($subs) {

    $subs = escape($subs);

    $sql = "INSERT INTO subscribe (subs_email) VALUES ('$subs')";
    $result = query($sql);
    confirm($result);


}



/**********************************************************************************************************************
 *                                          CONTACT FORM                                                              *
 **********************************************************************************************************************/


/*************** CONTACT FORM ***************/

function validate_contact_form() {

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $contact_1 = $_POST['question-contact'];
        $contact_2 = $_POST['subj-contact'];
        $contact_3 = $_POST['fname-contact'];
        $contact_4 = $_POST['lname-contact'];
        $contact_5 = $_POST['email-contact'];
        $contact_6 = $_POST['que-desc-contact'];


        $error_num_spaces = <<<DELIMITER

        <div class="alert alert-danger alert-dismissible" role="alert">
            Check for whitespaces or Numeric Characters
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
DELIMITER;

        if(!preg_match("/^[a-zA-z]*$/", $contact_3)){


            echo $error_num_spaces;

            
        } else if(!preg_match("/^[a-zA-z]*$/", $contact_4)){


            echo $error_num_spaces;


        } elseif (!filter_var($contact_5, FILTER_VALIDATE_EMAIL)){

            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    Recheck Email you have entered
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }  else {

            if(insert_contact_form($contact_1,$contact_2,$contact_3, $contact_4, $contact_5, $contact_6)) {

    
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Unable to send
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';


            } else {
                
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sent</strong> Successfully;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

            }
        } // else

    } // post request

} // function validate_contact_form



function insert_contact_form($contact_1,$contact_2,$contact_3, $contact_4, $contact_5, $contact_6) {

    $contact_1 = escape($contact_1);
    $contact_2 = escape($contact_2);
    $contact_3 = escape($contact_3);
    $contact_4 = escape($contact_4);
    $contact_5 = escape($contact_5);
    $contact_6 = escape($contact_6);


    $sql = "INSERT INTO form_test (two_question, two_subject, two_fname, two_lname, two_email,two_que_desc) VALUES
            ('$contact_1','$contact_2','$contact_3','$contact_4','$contact_5','$contact_6')";
    $result = query($sql);
    confirm($result);
}


/**********************************************************************************************************************
 *                                        APPLICATION FORM                                                            *
 **********************************************************************************************************************/


/*************** APPLICATION FORM ***************/

function insert_application_form() {

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $field_1 = clean($_POST['fname-apply']);
        $field_2 = clean($_POST['lname-apply']);
        $field_3 = clean($_POST['faname-apply']);
        $field_4 = clean($_POST['email-apply']);
        $field_5 = clean($_POST['mob-apply']);
        $field_6 = clean($_POST['altr-apply']);
        $field_7 = clean($_POST['qua-apply']);
        $field_8 = clean($_POST['mark10-apply']);
        $field_9 = clean($_POST['pass10-apply']);
        $field_10 = clean($_POST['mark12-apply']);
        $field_11 = clean($_POST['pass12-apply']);
        $field_12 = clean($_POST['markgrad-apply']);
        $field_13 = clean($_POST['passgrad-apply']);
        $field_14 = clean($_POST['pincode-apply']);
        $field_15 = clean($_POST['hos-apply']);
        $field_16 = clean($_POST['st-apply']);
        $field_17 = clean($_POST['city-apply']);    
        $field_18 = clean($_POST['state-apply']);
        $field_19 = clean($_POST['land-apply']);
        $field_20 = clean($_POST['schl-apply']);
        $field_21 = clean($_POST['cors-apply']);
        $field_22 = clean($_POST['i-declear']);



    if (insert_function($field_1,$field_2,$field_3,$field_4,$field_5,$field_6,$field_7,$field_8,$field_9,$field_10,
        $field_11, $field_12,$field_13,$field_14,$field_15,$field_16,$field_17,$field_18,$field_19,$field_20,$field_21,
        $field_22)) {

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Unable to send
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

    }
    else {
        sleep(10);
        redirect("index.php");

        }
    }
}



function insert_function($field_1,$field_2,$field_3,$field_4,$field_5,$field_6,$field_7,$field_8,$field_9,$field_10,
$field_11, $field_12,$field_13,$field_14,$field_15,$field_16,$field_17,$field_18,$field_19,$field_20,$field_21,
$field_22)  {

        
    $field_1 = escape($field_1);
    $field_2 = escape($field_2);
    $field_3 = escape($field_3);
    $field_4 = escape($field_4);
    $field_5 = escape($field_5);
    $field_6 = escape($field_6);
    $field_7 = escape($field_7);
    $field_8 = escape($field_8);
    $field_9 = escape($field_9);
    $field_10 = escape($field_10);
    $field_11 = escape($field_11);
    $field_12 = escape($field_12);
    $field_13 = escape($field_13);
    $field_14 = escape($field_14);
    $field_15 = escape($field_15);
    $field_16 = escape($field_16);
    $field_17 = escape($field_17);
    $field_18 = escape($field_18);
    $field_19 = escape($field_19);
    $field_20 = escape($field_20);
    $field_21 = escape($field_21);
    $field_22 = escape($field_22);



    $sql = "INSERT INTO application_test (fname_apply, lname_apply, faname_apply, email_apply, mob_apply, alt_apply
                , qua_apply, mark10_apply, pass10_apply, mark12_apply, pass12_apply, markgrad_apply, passgrad_apply,
                pincode_apply, hos_apply, street_apply, city_apply, state_apply, land_apply, schl_apply, cors_apply,
                check_apply) VALUES ('$field_1', '$field_2', '$field_3', '$field_4', '$field_5', 
                '$field_6', '$field_7', '$field_8', '$field_9', '$field_10', '$field_11', '$field_12', '$field_13',
                '$field_14', '$field_15', '$field_16', '$field_17', '$field_18', '$field_19', '$field_20', 
                '$field_21', '$field_22')";       
    $result = query($sql);
    confirm($result);

}
?>