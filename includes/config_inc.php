<?php

//database credenttials

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','dkm');

//attempt to connect to database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//checking connection to database

if($conn===false){
    die("ERROR COULD NOT CONNECT TO DATABASE .". mysqli_connect_error());
}
else{
    //echo"Working ok";
}

session_start();



?>