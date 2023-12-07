<?php
 function connect(){
    $servername = "127.0.0.1:3309";
    $username = "root";
    $password = "";
    $dbname = "tiemanh";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
 }
//  function connect_db()
// {   
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "tiemanh2004";

    
//     // Create connection
//     $conn = new mysqli($servername, $username, $password,$dbname);
    
//     // Check connection
//     if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }
//     // echo "Connected successfully";
//     return $conn;
// }
?>