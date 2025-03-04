<?php

$host="localhost";
$user="root";
$pass="";
$db="db_workimmersion";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Fail to connect DB".$conn->connect_error;
    exit();
}

echo "Connected successfully";
?>
