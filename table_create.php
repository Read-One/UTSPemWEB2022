<?php
include "db_connect.php";
$dbname ="utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}

$sql = "CREATE TABLE Mahasiswa (
    nim INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR (30) NOT NULL,
    prodi VARCHAR (30) NOT NULL,
    gender ENUM ('L','P'),
    email VARCHAR (50),
    foto BLOB NOT NULL
)";

if ($conn->query($sql)===TRUE){
    echo "Table Contact create sucessfully";
}else {
    echo "Error creating table".$conn->error;
}
$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>