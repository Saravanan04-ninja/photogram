<?php

include_once 'includes/mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/Session.class.php';

session::start();

function load_template($name){

    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php"; //not consistent
    // $__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../project/photogramconfig.json');


}

function validate_credential($username, $password){
    if($username == "saro@gmail.com" and $password == "12345"){
        return true;
    }else{
        return false;
    }
}

function signup($user, $pass, $email, $phone)
{
  $conn = Database::getconnection();

$sql = "INSERT INTO `auth1` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1')";
$error = false;
if ($conn->query($sql) === TRUE) {
  $error = false;
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
  $error = $conn->error;
}

$conn->close();
return $error;

}