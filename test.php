<pre>
<?php

include 'libs/load.php';

// print("_SERVER\n");
// print_r($_SERVER);
// print("_GET\n");
// print_r($_GET);
// print("_POST\n");
// print_r($_POST);
// print("_FILES\n");
// print_r($_FILES);
// print("_COOKIE\n");
// print_r($_COOKIE);

if(signup("saravanan","password","saro@gmail.com","9876543210")){
    echo "success";

}else{
    echo "fail";
}

// $mic = new Mic();

$mic1 = new Mic("splendor");
$mic2 = new Mic("pulsor");

// $mic1 ->brand = "Roda";
// $mic2 ->brand = "Honda";

// $mic1 ->light = "RGB";
$mic1 ->setlight("Red"); //function($light)
$mic2 ->setlight("black");

// print($mic1 -> light); //Red
// print($mic2 -> light);

$mic1->setModel("hyper cast");
print("model of first mic is ".$mic1->getModelproxy());
print("\n".$mic1->getbrand());
print("\n".$mic2->getbrand());


 $conn = Database::getconnection();
 $conn = Database::getconnection();
  $conn = Database::getconnection();
   $conn = Database::getconnection();
    $conn = Database::getconnection();






?>
</pre>