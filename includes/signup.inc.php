<?php

require '../includes/config_inc.php';


if (isset($_POST["submit"])){

    $Name = $_REQUEST['Name'];
    $Username = $_REQUEST['Username'];
    $Email=$_REQUEST['Email'];
    $Password = $_REQUEST['Password'];
    $confirm_password = $_REQUEST['confirm_password'];
    if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
     } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($Password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
    }

    $insert_query = "INSERT INTO `users`(Name, Username, Email, Password) 
    VALUES ('".$Name."','".$Username."','".$Email."','".$Password."')";

    $exec_query = mysqli_query($conn,$insert_query);

    if($exec_query === FALSE){
    
        echo mysqli_error($conn);
    }
    else{
        
       header('location:login.php');
    }
}

?>