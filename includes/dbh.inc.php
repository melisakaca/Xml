<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "my_schema";

$conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn) { 
    echo "Unable to connect database".mysqli_error($conn);die; 
} else { 
    //echo "Database connected successfully"; 
}


?>