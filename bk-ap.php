<?php
require 'includes/config_inc.php';
if(!isset($_SESSION['loggedin'])){
    header('location:login.php');
}

if(isset($_POST['submit'])){
            $TC=$_POST['TC'];
            $requirements=$_POST['requirements'];
            $id=$_POST['id'];
            $user_id=$_SESSION['ID'];
            $date=$_POST['date'];
            mysqli_query($conn,"INSERT INTO `bookings`( `Law_ID`, `User_ID`, `requirements`, `Book_Date`, `Book_Status`) VALUES ('$id','$user_id','$requirements','$date','0')");
        $messageLawyer=$_SESSION['Username'].' has booked An Appointment With You On '.date('d-m-Y H:i:s',strtotime($date));
                            mysqli_query($conn,"INSERT INTO `notification`( `Message`,  `User_ID`) VALUES ('$messageLawyer' ,'$id' )");
                $LawyerQry=mysqli_query($conn,"SELECT * FROM `lawyers` WHERE  Law_ID='$id'");
                    $LawyerRow=mysqli_fetch_assoc($LawyerQry);
                $qry=mysqli_query($conn,"SELECT * FROM `lawyers` WHERE role=1");
                while($row=mysqli_fetch_array($qry)){
                    $id=$row['Law_ID'];
                    $messageAdmin=$_SESSION['Username'].' has booked An Appointment With Lawyer  '.$LawyerRow['Law_Name'].' On '.date('d-m-Y H:i:s',strtotime($date));;
                           mysqli_query($conn,"INSERT INTO `notification`( `Message`,  `User_ID`) VALUES ('$messageAdmin' ,'$id' )");   
                }
                header('location:attorney.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Book Lawyer Appointment -- DKM Law Group</title>
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
            
            

<form method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

            <!-- Single Page Start -->
            <div class="single">
                <div class="container">                  
                    <div class="row">
                        <div class="col-12">    
                       
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Terms & Conditions</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Legal Advice: This consultation is not legal representation and does not otherwise form a solicitor-client relationship. Your agreement is for a limited-scope retainer with DKM Law Gurop with respect to limited immigration advice and information for immigration to Canada. Any formation of a full solicitor-client relationship or as an authorized representative for the purposes of immigration must be done through DKM Law's regular retainer agreement. 
                                            <br><br> <br>
                                        Cancellation: This appointment may be cancelled up to 48 hours in advance of the scheduled appointment for a full refund, less any credit card processing fees. Cancellations up to 24-hours prior to the appointment will be refunded 50%. After 24-hours prior to the scheduled appointment there will be no refunds. This is subject to the sole discretion of DKM Law Gurop taking into account all of the circumstances. 
                                        </td>                            
                                    </tr>
                                </tbody>
                            </table>
                            <input type="checkbox" name="TC" id="" required="">    I have read and agree to the terms above <span style="color: red;">*</span> <br><br><br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Terms & Conditions - REVIEW</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>

                                            Purpose of Application Review: The purpose of the Application Review is for us to view your application data as well as supporting evidence in your application for Permanent Residence to be submitted to Immigration, Refugee and Citizenship Canada (IRCC). To the best of our ability, we will advise as to the completeness of the application, the necessary supporting documents required to meet the Eligibility Criteria for the program of immigration, and the adequacy of the documents you will use to support your application for permanent residence.
                                                <br> <br>
                                            We are not being retained to represent you generally except as set out above (the “Mandate”). The above does not include any necessary appeals or applications for judicial review related to these matters. For any work required outside of the scope of these objects, we will have to enter into a further retainer agreement.
                                                <br><br>
                                            No Legal Authority Granted. You agree and understand that this agreement does not constitute your engagement of DKM Law Gurop to act as your Authorized Representative in respect of any matters relating to Immigration, Refugees and Citizenship Canada, and/or the Canada Border Services Agency.
                                                <br><br>
                                            You are also agreeing to the following terms and conditions:
                                            • I am NOT hiring DKM Law Gurop to be my full immigration representative at this time. I am only seeking general advice and assistance in completing my application. I plan to represent myself in my immigration application.
                                            • DKM Law Gurop will NOT be responsible for any changes, additions or deletions I make to my immigration application AFTER this consultation has been completed.
                                            • After this consultation is concluded, DKM Law Gurop is NOT obligated to advise me of any changes to immigration programs that may impact my profile and/or my eligibility in any program of immigration.
                                                <br><br>
                                            The fees paid to us do not guarantee a favourable result, nor have any representations been made by us that a favourable result is guaranteed.
                                                <br><br>
                                            DKM Law Gurop is acting for you only in this matter. While we do not anticipate a conflict, if a conflict of interest does arise at any time before or after completion of the application and cannot be resolved by mutual agreement, DKM Law Gurop generally and myself specifically may not be able to act for you and reserve the right to refuse to continue to act for you. This may require you to seek other solicitors, as applicable. 
                                        </td>                            
                                    </tr>
                                </tbody>
                            </table>
                            <label for="Your Add">Appointment Date<span style="color: red;">*</span> </label><br>
                            <input type="datetime-local" name="date"  required="" class="form-control"> <br>
                           
                            <label for="Your Add">Your Requirements ?<span style="color: red;">*</span></label><br>
                            <textarea type="text" name="requirements"  required="" class="form-control"></textarea><br>
                           
                            <input type="submit" value="Book Now" class="btn mt-2 btn-primary" name="submit">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Page End -->
</form>

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
