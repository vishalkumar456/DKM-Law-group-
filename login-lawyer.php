<?php
require 'includes/config_inc.php';

 
$error='';

if(isset($_POST['submit'])){
	$Law_Email=$_POST['Law_Email'];
	$Password=$_POST['Password'];
    
	$sql="select * from  lawyers  where Law_Email='$Law_Email' and Password='$Password'";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
        $_SESSION = array();
        $_SESSION['Law_ID']=$row['Law_ID'];
        $_SESSION['Law_Name']=$row['Law_Name'];
        $_SESSION['Law_ID']=$row['Law_ID'];
		$_SESSION['Role']=$row['Role'];
		$_SESSION['loggedin']='yes';
		if($row['Role']==0){
			header('location:Lawyer-panel/index.php');
			die();
		}if($row['Role']==1){
			header('location:admin-pannel/index.php');
			die();
		}
	}else{
		$error='Please enter correct login details';
	}
}
// Check if the user is already logged in, if yes then redirect him to index page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login -- DKM Law Group</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="DKM Law Group" name="keywords">
        <meta content="DKM Law Group" name="description">

        <!-- Favicon -->
        <link href="../img/incon.png" rel="icon">

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
                            <h2>Login </h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="Javasctipy:void();">Sign in For Lawyers</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- login form Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Sign in</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Teen Talwar Karachi,Pakistan</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+922 345 67890</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>contact@DKM.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                
                                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email" name="Law_Email" required="required" >
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="Password" class="form-control" placeholder="Passowrd" name="Password" required="required" />
                                        
                                    </div>
                                    <div class="form-group"><span style="font-size: larger; color: red; margin-top: 15px;"><?php echo $error?></span></div>
                                    <div>
                                        <button class="btn" type="submit" name="submit">Sign UP</button>
                                    </div>
                                    <div class="form-group">
                                        <p>Dont Have An Account <a href="signup.php">Sign In</a>Now</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login form End -->


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
