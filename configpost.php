

<?php

$serverName="localhost";
$userName="root";
$passworld="";
$dbName="test";


$conn = mysqli_connect($serverName,$userName,$passworld,$dbName);

if(!$conn){
    die(
        "connection field". mysqli_connect_error());
}

else{
    
}



?>