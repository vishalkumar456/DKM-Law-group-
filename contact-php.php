<?php
require 'includes/config_inc.php';
if(isset($_POST['submit'])){
    $Help_Name=mysqli_real_escape_string($conn,$_REQUEST['Help_Name']);
    $Help_Email=mysqli_real_escape_string($conn,$_REQUEST['Help_Email']);
    $Help_Subject=mysqli_real_escape_string($conn,$_REQUEST['Help_Subject']);
    $Help_Message=mysqli_real_escape_string($conn,$_REQUEST['Help_Message']);
    
 $query="INSERT INTO `help`(`Help_Name`, `Help_Email`, `Help_Subject`, `Help_Message`) 
    VALUES ('$Help_Name','$Help_Email','$Help_Subject','$Help_Message')";

    if(mysqli_query($conn,$query)){
        echo"Your Query Has Been Recived You Will BE Contacted Soon Thank You!";
        
    }else{
        echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
        echo "ERROR";
    }
    
}
?>