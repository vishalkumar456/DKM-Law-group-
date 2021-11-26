<?php
require '../includes/config_inc.php';
require 'check.php';

if(isset($_POST['submit'])){
    
    $L_Name=mysqli_real_escape_string($conn,$_REQUEST['L_Name']); 
    $Password=mysqli_real_escape_string($conn,$_REQUEST['Password']); 
    $CNIC=mysqli_real_escape_string($conn,$_REQUEST['CNIC']);
    $DOB=mysqli_real_escape_string($conn,$_REQUEST['DOB']);
    $Law_Email=mysqli_real_escape_string($conn,$_REQUEST['Law_Email']);
    $Law_Con=mysqli_real_escape_string($conn,$_REQUEST['Law_Con']);
    
	$query="INSERT INTO `lawyers`( `Law_Name`, `Law_CNIC`, `Law_DOB`,`Law_Pro`, `Law_Con`, `Law_Email`, `Password`, `Role`)
     VALUES ('$L_Name','$CNIC','$DOB','Admin','$Law_Con','$Law_Email','$Password','1')";
			
            if(mysqli_query($conn,$query)){
                header("location:S_Admin.php");
                
            }else{
                echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
                
            }   
    
}

?>