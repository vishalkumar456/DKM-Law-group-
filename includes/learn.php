<?php
while($data = mysqli_fetch_assoc($conn)){


if($data['status'] == 0){
    $appointment_status = "Pending";
}
if($data['status'] == 1){
    $appointment_status = "Approved";
}

else{
    $appointment_status = "Rejected";
}
}

?>