<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact -- DKM Law Group</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="DKM Law Group" name="keywords">
        <meta content="DKM Law Group" name="description">

        <!-- Favicon -->
        <link href="img/incon.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
           <!-- top bar and navbar starts here  -->          
           <?php 
                require 'includes/topbar.php';
                require 'includes/header.php';
            ?>
            <!-- top bar and navbar ends here  -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="javascript:void();">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>123 Street, New York, USA</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+012 345 67890</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>Contactus@DKM.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form method="post" action="contact.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" required="required" name="Help_Name"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email" required="required" name="Help_Email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" required="required" name="Help_Subject" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message" required="required" name="Help_Message"></textarea>
                                    </div>
                                    <div>
                                        <input class="btn" type="submit" name="submit"></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
            <?php
                require 'includes/config_inc.php';
                if(isset($_POST['submit'])){
                    $Help_Name=mysqli_real_escape_string($conn,$_REQUEST['Help_Name']);
                    $Help_Email=mysqli_real_escape_string($conn,$_REQUEST['Help_Email']);
                    $Help_Subject=mysqli_real_escape_string($conn,$_REQUEST['Help_Subject']);
                    $Help_Message=mysqli_real_escape_string($conn,$_REQUEST['Help_Message']);
                    
                $query="INSERT INTO `help`(`Help_Name`, `Help_Email`, `Help_Subject`, `Help_Message`) 
                    VALUES ('$Help_Name','$Help_Email','$Help_Subject','$Help_Message')";

                    if(mysqli_query($conn,$query)){?>
                            <script>swal({
                                title: 'Good job!',
                                text: 'You clicked the button!',
                                icon: 'success',
                                button: 'Aww yiss!',
                            });
                            </script>
                        <?php
                    }else{
                        echo "ERROR: Could not able to excute $query.". mysqli_error($conn);
                        echo "ERROR";
                    }
                    
                }
            ?>

            <!-- News letter and footer  start -->
            <?php
            require 'includes/newsletter.php';
                require 'includes/footer.php';
            ?>
                <!-- News letter and footer  start -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <!-- Sweet Alert cdn -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
