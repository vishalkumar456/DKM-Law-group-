<?php
// $receiver = "jitices491@w3boats.com";
// $subject = "Email Test via PHP using Localhost";
// $body = "Hi, there...This is a test email send from Localhost.";
// $sender = "From:sender email address here";
// if(mail($receiver, $subject, $body, $sender)){
//     echo "Email sent successfully to $receiver";
// }else{
//     echo "Sorry, failed while sending mail!";
// }
?>

 <!-- Newsletter Start -->
 <div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>Subscribe Our Newsletter</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
                <input class="form-control" placeholder="Email here" name="News_Email" type="email" required>
                <input class="btn" type="submit" name="submit"></input>
            </form>
        </div>
    </div>
</div>
            <!-- Newsletter End -->
            <?php
                //require 'includes/config_inc.php';
                if(isset($_POST['submit'])){
                    $News_Email=mysqli_real_escape_string($conn,@$_REQUEST['News_Email']);
                    
                    
                $query="INSERT INTO `news`(`News_Email`)  
                    VALUES ('@$News_Email')";

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
                error_reporting(0);
            ?>

