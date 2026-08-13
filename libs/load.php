<?php

function load_template($name){

    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php"; //not consistent
}

function validate_credential($username, $password){
    if($username == "saro@gmail.com" and $password == "12345"){
        return true;
    }else{
        return false;
    }
}