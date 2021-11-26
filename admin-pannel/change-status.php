<?php
require '../includes/config_inc.php';
require 'check.php';
$status=$_GET['status'];
$id=$_GET['id'];
mysqli_query($conn,"update bookings set Book_status='$status' where Book_ID='$id' ");
header('location:Appointments.php');

?>