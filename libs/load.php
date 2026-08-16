<?php

include_once 'includes/mic.class.php';

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

function signup($username, $password, $email, $phone)
{

$servername = "mysql.selfmade.ninja";
$username = "Saravanan04";
$password = "Saravanan123#";
$dbname = "Saravanan04_newdb2";
$port = "3306";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    


$sql = "INSERT INTO `auth1` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$username', '$password', '$email', '$phone', '0', '1')";
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