<?php

// $pass = isset($_GET['pass']) ? ($_GET['pass']) : "Randompassword" ;

// echo(md5($pass));

$tobi = <<< EOL
The Crime Branch–Criminal  (CB-CID), in collaboration with Self Made Ninja Academy and Saveetha Engineering College,.
EOL;

$md5 = md5($tobi);
$md5_len = strlen($md5);

$b64 = base64_encode($tobi);
$b64_len = strlen($b64);

echo("md5 :$md5\n");
echo("Data length : $md5_len \n");

echo("base64 : $b64\n");
echo("Data length : $b64_len\n");
