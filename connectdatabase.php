<?php
$servername = "localhost";
$database = "webtruyen";
$username = "root";
$password = "";
// kết nối với database
$conn = new mysqli($servername, $username, $password, $database);
// //Check connection
// if ($conn->connect_error) {    
//     die("Kết nối thất bại: " . $conn->connect_error);
// }echo "Kết nối thành công:ok";
?>