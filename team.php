<?php

require "includes/config_inc.php";

if(isset($_GET['filter'])){
      $country=$_GET['country'];
 $query = mysqli_query($conn, "select * from lawyers as l inner join law_types as lt on lt.id = l.Law_Pro where l.Law_Loc='%$country%' ");
 
}
else{
$query = mysqli_query($conn, "select * from lawyers inner join law_types on law_types.id = lawyers.Law_Pro; ");
}
  
$query1= mysqli_query($conn,"SELECT * FROM  law_types");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Team -- DKM Law Group</title>
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
                            <h2>Attorneys</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">Attorneys</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
   

            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>About Attorneys</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                Our attorneys often advise and work directly with the executive offices and their general counsel’s offices handling matters that have a national reach. The firm’s attorneys have represented clients in hundreds of mediations, arbitrations and trials in state and federal courts and venues throughout the country. Learn more about our attorneys.
                                </p>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p> -->
                                <a class="btn" href="portfolio.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">

                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
                     <div class="card">
                            <div class="card-body">
                      <form>
                                         <div class="row">
                               
                <div class="col-sm-4">
            <select name="type"  class="form-control">
                <option value="">All Types</option>
                 <?php
                                while($data =mysqli_fetch_assoc($query1)){
                                ?>
                                    <option class="dropdown-item" value="<?=$data['Type_Name']?>" <?php echo $data['Type_Name']==@$_GET['type']?'selected':'' ?>><?=$data['Type_Name']?></option>
                                 <?php
                                }
                            ?>
            </select>
            </div>
            <div class="col-sm-4">
                     
                        <input name="country" class="form-control mr-sm-2" type="search" value="<?php echo @$_GET['country'] ?>" placeholder="Country" aria-label="Country">
                </div>
                <div class="col-sm-4">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="filter" type="submit">Search</button>
                      
                   </div>
               </div>
       </form>
               </div>
  </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-md-6"> -->
                            <?php
                                                        $user_id=@$_SESSION['ID'];    
                                                if(isset($_GET['filter'])){
                                                      $country=$_GET['country'];
                                                      $type=$_GET['type']; 
                                                        
                                                            $FL_Data = 'SELECT *,(select count(*) from bookings where Law_Id=lawyers.Law_Id and User_ID="'.$user_id.'" and Book_Status!=2 ) as booked FROM `lawyers` WHERE `Role`=0  and  Law_Loc like "%'.$country.'%" and Law_Pro like "%'.$type.'%" ';
                                                    }
                                                else{
                                                $FL_Data = "SELECT *,(select count(*) from bookings where Law_Id=lawyers.Law_Id and User_ID='$user_id' and Book_Status!=2 ) as booked from lawyers where  `Role`=0; ";
                                                }
               

                                                            $exec_FL_Data=mysqli_query($conn,$FL_Data);
                                                            if(mysqli_num_rows($exec_FL_Data)>0){
                                                                $i=0;
                                                                while ($data = mysqli_fetch_assoc($exec_FL_Data)){
                                                                    
                                                                    
                                        // $query="SELECT * FROM lawyers;";
                                        // $Select_Data= mysqli_query($conn,$query);
                                        // //$i=0;
                                        // while($data=mysqli_fetch_assoc($Select_Data)){
                                    ?>
                            <!-- <div class="team-item">
                                <div class="team-img">    
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2><a href="lawyer-profile.php"><?//=$data['Law_Name'];?></a></h2>
                                    <p><?//=$data['Law_Pro'];?></p>
                                    <div class="team-social">
                                         <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a> 
                                        <a href="lawyer-profile.php?id=<?php //echo $data['Law_ID'];?>">View Profile</a>
                                    </div>
                                </div>
                            </div> -->
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

                                        <div class="third mt-4">
                                                <?php  if($data['booked']>0){ ?>
                                         <a href="javascript:;"  class="btn btn-primary btn-block"><i class="fa fa-clock-o"></i>  Already Booked</a>
                                                <?php }else{ ?>
                                         <a  href="bk-ap.php?id=<?php echo $data['Law_ID'] ?>" class="btn btn-success btn-block"><i class="fa fa-clock-o"></i>  Book Now</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                               
                            <?php
                                //$i++;
                                        }
                                    }
                            ?>
                             </div>
                        <!-- </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Criminal Consultant</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Gloria Edwards</h2>
                                    <p>Divorce Consultant</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Immigration Consultant</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Team End -->


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
