<?php
// $user = 'nirappdev';
// $password = 'negrosisland';
// $db = 'NIR01';
// $host = '166.62.10.47:3306';

// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link, 
//    $host, 
//    $user, 
//    $password, 
//    $db
// );

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=onlineclearance", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    // echo "Connection failed: " . $e->get/Message();
    }

?>