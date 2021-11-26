<?php
require '../includes/config_inc.php';
require 'check.php';

if(isset($_POST['submit'])){
    
    $L_Name=mysqli_real_escape_string($conn,$_REQUEST['L_Name']); 
    $Password=mysqli_real_escape_string($conn,$_REQUEST['Password']);
    $Fees=mysqli_real_escape_string($conn,$_REQUEST['Fees']);
    $CNIC=mysqli_real_escape_string($conn,$_REQUEST['CNIC']);
    $DOB=mysqli_real_escape_string($conn,$_REQUEST['DOB']);
    $Law_Pro=mysqli_real_escape_string($conn,$_REQUEST['Law_Pro']);
    $Law_LOC=mysqli_real_escape_string($conn,$_REQUEST['Law_LOC']);
    $Law_Email=mysqli_real_escape_string($conn,$_REQUEST['Law_Email']);
    $Law_Con=mysqli_real_escape_string($conn,$_REQUEST['Law_Con']);
    
	$query="INSERT INTO `lawyers`( `Law_Name`, `Law_CNIC`, `Law_DOB`, `Law_Pro`, `Law_Loc`, `Law_Con`, `Law_Email`, `Password`, `Fees`)
     VALUES ('$L_Name','$CNIC','$DOB','$Law_Pro','$Law_LOC','$Law_Con','$Law_Email','$Password','$Fees')";
			
            if(mysqli_query($conn,$query)){
                header("location:S_Law.php");
                
            }else{
                echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
                
            }   
    // $L_Name=mysqli_real_escape_string($conn,$_REQUEST['L_Name']);
    // $CNIC=mysqli_real_escape_string($conn,$_REQUEST['CNIC']);
    // $DOB=mysqli_real_escape_string($conn,$_REQUEST['DOB']);
    // $Law_Pro=mysqli_real_escape_string($conn,$_REQUEST['Law_Pro']);
    // $Law_LOC=mysqli_real_escape_string($conn,$_REQUEST['Law_LOC']);
    // $Law_Email=mysqli_real_escape_string($conn,$_REQUEST['Law_Email']);
    // $Law_Con=mysqli_real_escape_string($conn,$_REQUEST['Law_Con']);
    
   

    // $query="INSERT INTO `lawyers`(`Law_ID`, `Law_Name`, `Law_CNIC`, `Law_DOB`, `Law_Pro`, `Law_Loc`, `Law_Con`, `Law_Email`)
    //  VALUES (NULL,'$L_Name','$CNIC','$DOB','$Law_Pro','$Law_LOC','$Law_Con','$Law_Email')";

    // if(mysqli_query($conn,$query)){
    //     header("location:S_Law.php");
        
    // }else{
    //     echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
    //     echo "ERROR";
    // }
}

?>