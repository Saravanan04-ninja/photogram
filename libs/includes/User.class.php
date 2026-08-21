<?php

class User{
    public static function signup($user, $pass, $email, $phone)


{
  $pass = md5($pass);
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

public static function login($user, $pass){
  $pass = md5($pass);
  $query = "SELECT * FROM `auth1` WHERE `username` = '$user'";
  $conn = Database::getconnection();
  $solution = $conn->query($query);
  if($solution->num_rows ==1){
    $row = $solution->fetch_assoc();
    if($row['password']==$pass){
      return $row;

    }else{
      return false;
    }
  }
    else{
      return false;
    }

  }

}

