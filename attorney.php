<?php

include("includes/config_inc.php");
if(!isset($_SESSION['loggedin'])){

    header('location:index.php');
      }

if(isset($_GET['id'])){
    $query = "select * from lawyers where Law_ID =".$_GET['id'];
    $user_data = mysqli_fetch_array(mysqli_query($conn,$query));
 
    $Law_ID = $user_data['Law_ID'];
    $Law_Name = $user_data['Law_Name'];
    $Law_Email = $user_data['Law_Email'];
    $Law_Con = $user_data['Law_Con'];
    $Law_DOB = $user_data['Law_DOB'];
	$Law_Pro = $user_data['Law_Pro'];
}
else{
    $Law_ID = "";
    $Law_Name = "";
    $Law_Email = "";
	$Law_Con="";
	//header('location:team.php');
}

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
                            <h2>My Attorney</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
							<a href="team.php">Account</a>
                            <a href="javascript:void();">My Attorney</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <div class="container">
		<div class="main-body">
  <div class="row">
                        <!-- <div class="col-lg-3 col-md-6"> -->
                            <?php
                                               	$user_id=$_SESSION['ID'];
                                                $FL_Data = "SELECT * from bookings as b join lawyers as l on l.LAW_ID=b.LAW_ID  where  b.User_ID='$user_id'   "; 
                                             

                                                            $exec_FL_Data=mysqli_query($conn,$FL_Data);
                                                            if(mysqli_num_rows($exec_FL_Data)>0){
                                                                $i=0;
                                                                while ($data = mysqli_fetch_assoc($exec_FL_Data)){
                                                                     
                                    ?>
   <div class=" col-sm-4 mt-6 x">
                                    <div class="card p-3  mt-3">
                                        <div class="first">
                                            <h6 class="heading"><?=$data['Law_Pro'];?></h6>
                                            <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                                                <div class="d-flex align-items-center"> <i class="fa fa-clock-o clock"></i> <span class="hour ml-1">3 hrs</span> </div>
                                                <div> <span class="font-weight-bold">$<?=$data['Fees'];?></span> </div>
                                            </div>
                                        </div>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3"> <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="60" /> </div>
                                            <div class="">
                                                <div class="d-flex flex-row mb-1"> <span><?=$data['Law_Name'];?></span>
                                                    <div class="ratings ml-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                </div>
                                                <div>  <button class="btn btn-outline-dark btn-sm"><a href="lawyer-profile.php?id=<?php echo $data['Law_ID'];?>">View Profile</a></button>  </div>
                                            </div>
                                        </div>
                                        <hr class="line-color">
                                        <h6><?= $data['Law_Loc']?></h6>
                                         <h6><?= $data['Book_Date']?></h6>
                                        <div class="third mt-4">
                                        	<?php

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
                                        	?>
                                        </div>
                                    </div>
                                </div>
                               
                            <?php
                                //$i++;
                                        }
                                    }
                            ?>
                             </div>
	</div>
</div>
</div>
</body>
<

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
