<?php
require '../includes/config_inc.php';
require 'check.php';

$id=$_SESSION['Law_ID'];
mysqli_query($conn,"update notification set is_read=1 where User_Id='$id'");
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
        <!-- ============================================================== -->
        <?php
            require 'includes/header.inc.php';
            require 'includes/leftsidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">All Appointments</h4>
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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Appointments</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Lawyer</th>
                                            <th class="border-top-0">Message</th>
                                            <th class="border-top-0">Lawyer Type</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Current Status</th>
                                            <th class="border-top-0">Fuctions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            
                                            $query = "SELECT * FROM bookings  JOIN lawyers on lawyers.Law_ID=bookings.Law_ID  JOIN users on users.ID=bookings.User_ID";
                                            $exec_query= mysqli_query($conn,$query);
                                            $i=1;
                                                while ($data =mysqli_fetch_assoc($exec_query)) {
                                                  
                                                    
                                                
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$data['Username'];?></td>
                                            <td><?=$data['Law_Name'];?></td>
                                            <td><?=$data['requirements'];?></td>
                                            <td><?=$data['Law_Pro'];?></td>
                                            <td><?=$data['Book_Date'];?></td>
                                            <td><?php 
                                                                                                          
                                                       if($data['Book_Status'] == 0){
                                                           $appointment_status = "Pending";
                                                           echo"<button  class='btn btn-primary'>Pending</button>";
                                                       }
                                                       if($data['Book_Status'] == 1){
                                                           $appointment_status = "Approved";
                                                           echo"<button  class='btn btn-success'>Approved</button>";
                                                       }if($data['Book_Status'] == 2){
                                                           $appointment_status = "Rejected";
                                                           echo"<button  class='btn btn-danger'>Rejected</button>";
                                                       }
 
                                                    //    if($appointment_status=="Pending"){
                                                    //        echo"Pending";
                                                    //    }if($appointment_status=="Approved"){
                                                    //        echo"Approved";
                                                    //    }if($appointment_status=="Rejected"){
                                                    //        echo"Rejected";
                                                    //    }
                                            
                                            ?></td>
                                            <!-- <td><?=$data['status'];?></td> -->
                                            <td><a  href="change-status.php?id=<?php echo $data['Book_ID']; ?>&status=1" class="btn btn-info">Approve</a>
                                            <a    href="change-status.php?id=<?php echo $data['Book_ID']; ?>&status=2"  type="button" class="btn btn-secondary">Reject</a></td>
                                        </tr>
                                        <?php
                                                }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
</body>

</html>