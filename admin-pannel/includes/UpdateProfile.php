<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

        include('../../includes/config_inc.php');

         $NLaw_DP=$_FILES['Law_DP'];
         $NLaw_Name =$_POST['Law_Name'];
         $NLaw_CNIC=$_POST['Law_CNIC'];
         $NLaw_Loc=$_POST['Law_Loc'];
         $NLaw_Con=$_POST['Law_Con'];
         $NLaw_Email=$_POST['Law_Email'];
         $NLaw_Password=$_POST['Password'];
         $NLaw_Fess=$_POST['Fees'];
         
        if(!empty($NLaw_DP) && !empty($NLaw_Name)&& !empty($NLaw_CNIC)&& !empty($NLaw_Loc)&& !empty($NLaw_Con)
        && !empty($NLaw_Email)&& !empty($NLaw_Password)&& !empty($NLaw_Fess)){

            
            
            $imageName = $NLaw_DP ['name'];
            $fileType  = $NLaw_DP['type'];
            $fileSize  = $NLaw_DP['size'];
            $fileTmpName = $NLaw_DP['tmp_name'];
            $fileError = $NLaw_DP['error'];

            $fileImageData = explode('/',$fileType);
            $fileExtension = $fileImageData[count($fileImageData)-1];

            
            if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg'){
                //Process Image
                
                if($fileSize < 5000000){
                    //var_dump(basename($imageName));

                    $fileNewName = "../public/userImages/".$imageName;
                    
                    $uploaded = move_uploaded_file($fileTmpName,$fileNewName);
                    
                    if($uploaded){
                        $loggedin = $_SESSION['Law_ID'];
                        
                        //$sql = "UPDATE lawyers SET Law_DP = '$NLaw_DP', Law_Email ='$NLaw_Email', Law_DP='$NLaw_DP' WHERE ID = '$loggedin'";
                            $sql = "UPDATE `lawyers` SET `Law_DP`='$NLaw_ID',`Law_Pro`='$NLaw_Pro',`Law_Loc`='$NLaw_Loc',`Law_Con`='$NLaw_Con',`Law_Email`='$NLaw_Email',`Password`='$NPassword'`Fees`='$NFees' WHERE Law_ID ='$loggedin'";
                        
                            $results = mysqli_query($conn,$sql);

                        header('Location:../pages/userProfile.php?success=userUpdated');
                    exit;
                    }


                }else{
                    header('Location:../profile.php?error=invalidFileSize');
                    exit;
                }
                exit;
            }else{
                header('Location:../profile.php?error=invalidFileType');
                exit;
            }
            


        }else{
            header('Location:../profile.php?error=emptyNameAndEmail');
            exit;
        }
        



}

?>