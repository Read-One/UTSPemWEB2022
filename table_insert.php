<?php 
include "db_connect.php";
$dbname ="utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
$sql = "INSERT INTO Mahasiswa (nim,nama,prodi,gender,email)
VALUES ('201110190','Muhamad Ridwan','Informatika','L','muridwan34@gmail.com',LOAD_FILE('C:/localhost/P7/1.png')";

if ($conn->query($sql)===true){
    echo "New Record created succesfully";
}else{
    echo "ERROR".$sql."<br/>".$conn->error;
}

$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>
