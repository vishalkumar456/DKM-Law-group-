<?php
require 'includes/config_inc.php';
 if (isset($_POST["submit"])){

    $Name = $_REQUEST['Name'];
    $Username = $_REQUEST['Username'];
    $Email=$_REQUEST['Email'];
    $Password = $_REQUEST['Password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $username_err='';
    
    // Validate password
    if(empty(trim($_POST["Password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["Password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $Password = trim($_POST["Password"]);
    }
    // Validate confirm password
    $confirm_password_err='';
    if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
     } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($Password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
    }


        $check=mysqli_query($conn,"select * from users where Username='$Username' ");
 
        if(mysqli_num_rows($check)>0){
                $username_err="Username Already Exist";
        }
        else{
        $insert_query = "INSERT INTO `users`(Name, Username, Email, Password) 
    VALUES ('".$Name."','".$Username."','".$Email."','".$Password."')";

    
    $exec_query = mysqli_query($conn,$insert_query);

    if($exec_query === FALSE){
    
        echo mysqli_error($conn);
    }
    else{
        
       header('location:login.php');
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Signup -- DKM Law Group</title>
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
                            <h2>Sign Up With US Now</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- signup form Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Sign Up</h2>
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
                                        <p>contactus@DKM.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form  action="" method="POST">
                                    <div class="form-group">
                                    
                                        <input type="text" class="form-control" placeholder="Your Name..." name="Name" required="required" />
                                    </div>
                                        
                                    <div class="form-group">
                                        <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" placeholder="Your Username..." name="Username" required="required"  >
                                            <span class="invalid-feedback" style="color: red;"><?php echo $username_err; ?></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email..." name="Email" required="required" />
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="Password" required="required"   >
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" placeholder="confirm Passoword" name="confirm_password" required="required" >
                                        <span class="invalid-feedback" style="color: red;"><?php echo $confirm_password_err; ?></span>
                                    </div>
                                    <div>
                                   
                                        <button class="btn" type="submit" name="submit">Sign UP</button>
                                    </div>
                                    <div class="form-group">
                                        <p>Already Have An Account <a href="login.php">Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- signup form End -->


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

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
