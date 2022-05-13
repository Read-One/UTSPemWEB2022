<?php
include "db_connect.php";

$sql = "CREATE DATABASE utspemweb";

if($conn->query($sql)=== TRUE){
    echo "Database Created Successfully";
}else {
    echo "Error Creating Database :".$conn->error;
}
$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>
