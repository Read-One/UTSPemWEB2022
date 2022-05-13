<?php 
include "db_connect.php";
$dbname ="utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}

$sql = "DELETE FROM Mahasiswa WHERE nim=201110190";

if($conn->query($sql)===true){
    echo "Record deleted successfully";
}else{
    echo "Error deleting record".$conn->error;
}

$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>