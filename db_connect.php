<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
/*echo "Connection Successfully <br/>";
echo "NIM = 201110190 <br/>"; 
echo "Nama = MUHAMAD RIDWAN <br/>";*/
?>