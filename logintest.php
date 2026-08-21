<?php

include 'libs/load.php';

$user = "itachi";
$pass = "saro";

$solution = User::login($user, $pass);
$result = null;

if((Session::get('is_loggedin'))){
    $userdata = Session::get("Session_user");
    print("WELCOME BACK! , $userdata[username]");
    $result = $userdata;
}else{
    printf("No Session found");
    $result = User::login($user, $pass);
}

if($solution){
    echo "Login success";
    Session::set('is_loggedin', true);
    Session::set('Session_user', $result);
}else{
    echo "Login failed";
}

