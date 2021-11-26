<?php

include("includes/config_inc.php");
 if(!isset($_SESSION['loggedin'])){

    header('location:index.php');
      }
  
    $message='';
      $currentUser = $_SESSION['ID'];
                                 $username_err=$email_err='';   
    if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($conn,$_POST['Name']);
        $email=mysqli_real_escape_string($conn,$_POST['Email']);
        $password=mysqli_real_escape_string($conn,$_POST['Password']);
        $Username=mysqli_real_escape_string($conn,$_POST['Username']);
      

        $check=mysqli_query($conn,"select * from users where Username='$Username' and ID!='$currentUser' ");
 
        if(mysqli_num_rows($check)>0){
                $username_err="Username Already Exist";
        }
        $checkkk=mysqli_query($conn,"select * from users where Email='$email' and ID!='$currentUser' ");
 
        if(mysqli_num_rows($checkkk)>0){
                $email_err="Email Already Exist";
        }
        else{

        $qry=mysqli_query($conn,"update  users set  Name='$name',Email='$email',Password='$password',Username='$Username' where ID='$currentUser'");

        if(mysqli_error($conn)){
            echo mysqli_error($conn);
        }
        else{
            $message='Profile Updated Successfully';
        }
    }   
}
    
  $query = "select * from users where  ID =".$_SESSION['ID'];
    $user_data = mysqli_fetch_array(mysqli_query($conn,$query));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Account</title>
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
                            <h2>My Account</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
							<a href="team.php">Account</a>
                            <a href="javascript:void();">My Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <div class="container">
		<div class="main-body">
            <form action="" method="post">
  <div class="row">
                        <div class="col-lg-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                             <?php if($message!=''){ ?>
                                            <div class="alert alert-success">Profile Updated Successfully</div>
                                        <?php } ?>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="hidden" name="Law_ID" value="<?=$user_data['ID'];?>"  readonly>
                                    <input type="text" class="form-control" name="Name" value="<?=$user_data['Name'];?>"  >
                                    
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="Email" value="<?=$user_data['Email'];?>"  >
                                    <span style="color:red">
                                        <?php echo  $email_err; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="Username" value="<?=$user_data['Username'];?>"  >
                                    <span style="color:red">
                                        <?php echo  $username_err; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="password" class="form-control"  name="Password" value="<?=$user_data['Password'];?>"  >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" name="submit" value="Save Changes">
                                </div>
                            </div>
                  </div>
              </div>
                    
                </div>
	</div>
</form>
</div>
</div>
</div>
</body>
</html>

<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

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
