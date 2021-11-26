<?php
//require '../includes/config_inc.php';

require '../includes/functions_inc.php';
include("config_inc.php");

if (isset($_POST["submit"])) {
    $Username=$_POST["Username"];
    $password=$_POST["Password"];

    LoginUser($Username,$password);
    // if (emptyInputlogin( $Username, $Password) !== false) {
    //     header("location:../login.php?error=emptyinput");
    //     exit();
    // }
    // if (emptyInputLogin($Username, $Password) === true) {
    //     header("location: ../login.php?error=emptyinput");
    //         exit();
    //   }


}
else{
    //header("location:../login.php");
    exit();
}
?>