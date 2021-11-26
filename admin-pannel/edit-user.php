<?php

require '../includes/config_inc.php';
require 'check.php';
$id=$_GET['id'];

$username_err = $password_err = $confirm_password_err = "";


if(isset($_POST['submit'])){
    
    $Name=mysqli_real_escape_string($conn,$_REQUEST['Name']);
    $Username=mysqli_real_escape_string($conn,$_REQUEST['Username']);
    $Password=mysqli_real_escape_string($conn,$_REQUEST['Password']);
    $CNIC=mysqli_real_escape_string($conn,$_REQUEST['CNIC']);
    $DOB=mysqli_real_escape_string($conn,$_REQUEST['DOB']);
    $User_Pro=mysqli_real_escape_string($conn,$_REQUEST['User_Pro']);
    $User_Add=mysqli_real_escape_string($conn,$_REQUEST['User_Add']);
    $User_Country=mysqli_real_escape_string($conn,$_REQUEST['User_Country']);
    $Email=mysqli_real_escape_string($conn,$_REQUEST['Email']);
    $Phone_Number=mysqli_real_escape_string($conn,$_REQUEST['Phone_Number']);
    $id=$_POST['id'];
    //$query=mysqli_query($conn,"update  `users` set   `Name`='$L_Name', `CNIC`='$CNIC', `DOB`='$DOB', `User_Pro`='$Law_Pro', `User_Add`='$Law_LOC', `Phone_Number`='$Law_Con', `Email`='$Law_Email', Password='$Password' where ID='$id'");
            $query=mysqli_query($conn,"UPDATE `users` SET `Name`='$Name',`Username`='$Username',`Email`='$Email',`Phone_Number`='$Phone_Number',`Password`='$Password',`CNIC`='$CNIC',`User_Pro`='$User_Pro',`User_Add`='$User_Add',`User_Country`='$User_Country',`DOB`='$DOB' WHERE ID='$id'");
            if(!mysqli_error($conn)){
                header("location:S_User.php");
                
            }else{
                echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
                
            }   
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="DKM-- Law Gurop">
    <meta name="description"
        content="DKM-- Law Gurop">
    <meta name="robots" content="noindex,nofollow">
    <title>DKM-- Law Gurop</title>
    <link rel="canonical" href="javascript:void();" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/incon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <?php
            require 'includes/header.inc.php';
            require 'includes/leftsidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit User</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?php $query=mysqli_query($conn,"SELECT * FROM users where ID='$id'");
                            $row=mysqli_fetch_assoc($query);

                            ?>
                           
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class = "form-row">
                                    <div class = "form-group col-md-6">
                                        <label for = "inputEmail4">Name</label>
                                        <input type = "text" class =" form-control" id = "inputEmail4" placeholder = "User's Full Name" value="<?php echo $row['Name'];?>" name="Name">
                                    </div>

                                    <div class = "form-group col-md-6">
                                        <label for = "inputEmail4">UserName</label>
                                        <input type = "text" class =" form-control" id = "inputEmail4" placeholder = "User's Username" value="<?php echo $row['Username'];?>" name="Username">
                                    </div>
                                    <div class = "form-group col-md-6">
                                        <label for = "inputPassword4">CNIC</label>
                                        <input type = "tel" class = "form-control" 
                                            id = "inputPassword4" placeholder = "Lawyer's CNIC"  value="<?php echo $row['CNIC'];?>" name="CNIC">
                                    </div>
                                    <!-- </div> -->
                                    
                                    <div class = "form-group col-md-6">
                                    <label for = "inputAddress">Date of Birth</label>
                                    <input type = "date" class = "form-control"   value="<?php echo $row['DOB'];?>" name="DOB">  
                                    </div>
                                    
                                    
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip"> User  Locatione</label>
                                        <input type = "text" class = "form-control"   value="<?php echo $row['User_Add'];?>"   id = "inputZip" name="User_Add"
                                            placeholder = "Enter User's  Location">
                                    </div>
                                    
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip">User's Email</label>
                                        <input type = "email" class = "form-control"     value="<?php echo $row['Email'];?>" id = "inputZip" name="Email"
                                            placeholder = "Enter Lawyer's Email"> 
                                    </div>
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip">user's Contact Number</label>
                                        <input type = "tel" class = "form-control"  value="<?php echo $row['Phone_Number'];?>"   id = "inputZip" name="Phone_Number"
                                            placeholder = "Lawyer's Contact Number">
                                    </div>
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip">User's Password for login</label>
                                        <input type = "password" class = "form-control"    value="<?php echo $row['Password'];?>" id = "inputZip" name="Password"
                                            placeholder = "Lawyer's Password">
                                            
                                    </div>
                                    
                                   <div class = "form-group col-md-6">
                                        <label for = "inputZip">User's Profession</label>
                                        <input type = "text" class = "form-control"    value="<?php echo $row['User_Pro'];?>" id = "inputZip" name="User_Pro"
                                            placeholder = "User's Profession">
                                    </div>
                                        <button type="submit" class = "btn btn-primary mx-auto" name="submit">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            </div>
            <?php
                require 'includes/footer.inc.php';
            ?>
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>