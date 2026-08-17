<pre>
<?php
session_start();
setcookie("testcookie", "testvalue", time() + (86400 * 30), "/");

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


print("_SESSION\n");
print_r($_SESSION);


if(isset($_SESSION['a'])){
    print("A already exists... value: $_SESSION[a]\n");
}else{
    $_SESSION['a'] = time();
    print("Assigning new value... value: $_SESSION[a]\n");
}




?>
</pre>