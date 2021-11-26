<?php
include("config_inc.php");

function emptyInputSignup($Name, $Username, $Email, $Password, $confirm_password){
   $result;
   if (empty($Name) || empty($Username) || empty($Email) || empty($Password) || empty($confirm_password)) {
    $result = true;
   } 
   else{
       $result = false;
   }
   return $result;
}

function invalidUsername($Username){
    
    $result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $Username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
 }

 function invalidEmail($Email){
    $result;
    if (!filter_var($Email , FILTER_VALIDATE_EMAIL)) {
     $result = true;
    } 
    else{
        $result = false;
    }
    return $result;
 }
 function Password_Match($Password, $confirm_password){
    $result;
    if ($Password !==$confirm_password) {
     $result = true;
    } 
    else{
        $result = false;
    }
    return $result;
 }
 // Check if username is in database, if so then return data
 function UsernameExists($conn, $Username, $Email){
$sql = "SELECT * FROM users WHERE Username = ? OR Email = ?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: ../signup.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, "ss", $Username, $Username);
mysqli_stmt_execute($stmt);

// "Get result" returns the results from a prepared statement
$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
}
else {
    $result = false;
    return $result;
}

mysqli_stmt_close($stmt);
}

function CreateUser($conn,$Name, $Username, $Email, $Password){
    
    $sql = "INSERT INTO users (Name, Username, Email, Password) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

    $hashedPassword= password_hash($Password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",$Name, $Username, $Email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../index.php?error=none");
    exit();
    
}

 //login section

 function emptyInputlogin( $Username, $Password){
    //$result;
    if (empty($Username) || empty($Password)) {
     $result = true;
    } 
    else{
        $result = false;
    }
    return $result;
 }
 
 function LoginUser( $Username, $Password){
     $UsernameExists = UsernameExists($conn, $Username,'');

     if ($UsernameExists === false) {
         header("location:../login.php?error=incorrectUsername");
         exit();
     }

     $PasswordHashed = $UsernameExists ["Password"];
     $checkPassword = password_verify($Password, $PasswordHashed);

     if ($checkPassword ===false) {
        header("location:../login.php?error=incorrectPassword");
        exit();
     }elseif ($checkPassword ===true) {
         session_start();
         $_SESSION["UserID"]=$UsernameExists ["ID"];
         $_SESSION["UserName"]=$UsernameExists ["Username"];
        header("location:../index.php?error=loginsuccessfull");
        exit();
     }
 }





 
//  $query = "SELECT * FROM lawyers";
//  $exec_query = mysqli_query($conn,$query);
//  $html = "";
//  while($data = mysqli_fetch_array($exec_query)){
//      $html .="<tr>";
//      $html .="<td>".$data["Law_Name"]."</td>";
//      $html .="<td>".$data["Law_Pro"]."</td>";
//      $html .="<tr>";
//  }
 

 ?>