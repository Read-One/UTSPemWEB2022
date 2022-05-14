<?php
include "db_connect.php";
$dbname = "utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
/*echo "Connection Successfully <br/>";
echo "NIM = 201110190 <br/>"; 
echo "Nama = MUHAMAD RIDWAN <br/>";*/
?>