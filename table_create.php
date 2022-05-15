<?php
include "db_connect.php";
$dbname ="utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}

$sqlid = "CREATE TABLE mahasiswa (
    nim INT (6) NOT NULL PRIMARY KEY,
    nama VARCHAR (30) NOT NULL,
    prodi VARCHAR (30) NOT NULL,
    gender ENUM ('L','P'),
    foto BLOB NOT NULL,
    tempatlhr VARCHAR (10),
    tgllhr DATE,
    stat VARCHAR (12),
    agama VARCHAR (10),
    skill VARCHAR (40),
    quote VARCHAR (40)
)";

$sqlcp = "CREATE TABLE contact (
    email VARCHAR (50) NOT NULL PRIMARY KEY,    
    alamat VARCHAR (40),
    telephone BIGINT (13),
    nim INT(6) NOT NULL,
    FOREIGN KEY (nim) REFERENCES mahasiswa(nim)
)";

$sqlsch = "CREATE TABLE sekolah (
    namasekolah VARCHAR (30) NOT NULL PRIMARY KEY,
    tahunlulus YEAR,
    jurusan VARCHAR (20),
    nim INT(6) NOT NULL,
    keterangan VARCHAR (10),
    FOREIGN KEY (nim) REFERENCES mahasiswa(nim)
)";

$sqljob = "CREATE TABLE job (
    tempatkerja VARCHAR (30) NOT NULL PRIMARY KEY,
    tahunmasuk YEAR,
    tahunkeluar YEAR,
    jabatan VARCHAR (20),
    nim INT(6) NOT NULL,
    deskripsi  VARCHAR (30),
    FOREIGN KEY (nim) REFERENCES mahasiswa(nim)
)";

$sqlorg = "CREATE TABLE org (
    namaorg VARCHAR (30) NOT NULL PRIMARY KEY,
    tahunmasuk YEAR,
    tahunkeluar YEAR,
    jabatan VARCHAR (20),
    nim INT(6) NOT NULL,
    deskripsi  VARCHAR (30),
    FOREIGN KEY (nim) REFERENCES mahasiswa(nim)
)";

if ($conn->query($sqlid)===TRUE){
    echo "Table ID create sucessfully";
}else {
    echo "Error creating table ".$conn->error;
}

if ($conn->query($sqlcp)===TRUE){
    echo "Table CP create sucessfully";
}else {
    echo "Error creating table ".$conn->error;
}

if ($conn->query($sqlsch)===TRUE){
    echo "Table SCH create sucessfully";
}else {
    echo "Error creating table ".$conn->error;
}

if ($conn->query($sqljob)===TRUE){
    echo "Table JOB create sucessfully";
}else {
    echo "Error creating table ".$conn->error;
}

if ($conn->query($sqlorg)===TRUE){
    echo "Table ORG create sucessfully";
}else {
    echo "Error creating table ".$conn->error;
}

$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>