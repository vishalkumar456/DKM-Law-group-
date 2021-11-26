<?php

require '../includes/config_inc.php';
require 'check.php';
$query="SELECT * FROM lawyers WHERE Role=1";

$query2=mysqli_query($conn,"SELECT * FROM law_types ORDER BY Type_Name");

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
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
                        <h4 class="page-title">Add New Admin</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            
                             
                        </div>
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
                           
                            <form action="add-S.php" method="post">
                                <div class = "form-row">
                                    <div class = "form-group col-md-6">
                                        <label for = "inputEmail4">Name</label>
                                        <input type = "text" class =" form-control" 
                                            id = "inputEmail4" placeholder = "Admin's Full Name" name="L_Name">
                                    </div>
                                    
                                    <div class = "form-group col-md-6">
                                        <label for = "inputPassword4">CNIC</label>
                                        <input type = "tel" class = "form-control" 
                                            id = "inputPassword4" placeholder = "Admin's CNIC" name="CNIC">
                                    </div>
                                    </div>
                                    
                                    <div class = "form-group col-md-6">
                                    <label for = "inputAddress">Date of Birth</label>
                                    <input type = "date" class = "form-control"  name="DOB">  
                                    </div>
                                    
                                   
                                    <!-- <div class = "form-group col-md-6">
                                        <label for = "inputZip"> Lawyer Office Locatione</label>
                                        <input type = "text" class = "form-control"   required="" id = "inputZip" name="Law_LOC"
                                            placeholder = "Enter Lawyer's Office Location">
                                    </div> -->
                                    <!-- <div class = "form-group col-md-6">
                                        <label for = "fees"> Lawyer's fees</label>
                                        <input type = "tel" class = "form-control"   required="" id = "Fees" name="Fees"
                                            placeholder = "Enter Lawyer's Fees">
                                    </div> -->
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip">Admin's Email</label>
                                        <input type = "email" class = "form-control"   required="" id = "inputZip" name="Law_Email"
                                            placeholder = "Enter Lawyer's Email"> 
                                    </div>
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip">Admin's Contact Number</label>
                                        <input type = "tel" class = "form-control"   required="" id = "inputZip" name="Law_Con"
                                            placeholder = "Lawyer's Contact Number">
                                    </div>
                                    <div class = "form-group col-md-6">
                                        <label for = "inputZip">Admin's Password for login</label>
                                        <input type = "password" class = "form-control"   required="" id = "inputZip" name="Password"
                                            placeholder = "Lawyer's Password">
                                    </div>
                                   
                                    <!-- <div class = "form-group col-md-4">
                                            
                                        <label for = "Profession">Lawyer's Profession</label>
                                        <select id = "Profession" class = "form-control"  required="" name="Law_Pro">
                                            <?php
                                                while($data = mysqli_fetch_assoc($query2)){
                                            ?>
                                            
                                            <option value="<?=$data['Type_Name'];?>"><?=$data['Type_Name'];?></option>
                                            <?php
                                                }
                                            
                                            ?>
                                        </select>
                                        
                                            
                                    </div> -->
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