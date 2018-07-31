<?php

$host = "fluidsdesign6.ipagemysql.com";
$user  = "amissah";
$password =  "10337467";
$database1 = "jobportal";




$db1 = new mysqli($host, $user, $password, $database1);
if($db1->connect_error > 0){
    die('Unable to connect to database' . $db1->connect_error);
}

else{
    echo "Database jobportal is connected.";
}
?>
