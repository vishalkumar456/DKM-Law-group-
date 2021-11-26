<?php

require '../includes/config_inc.php';
require 'check.php';
$id=$_GET['id'];

$query2=mysqli_query($conn,"delete FROM users where ID='$id'");

  if(!mysqli_error($conn)){
                header("location:S_User.php");
                
            }else{
                echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
                
            }   


?>

