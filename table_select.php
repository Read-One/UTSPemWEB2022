<?php 
include "db_connect.php";
$dbname ="utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}

$sql = "SELECT nim, nama, prodi, gender, email FROM Mahasiswa";

$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "nim :".$row["nim"]."<br/>"."nama :".$row["nama"]."<br/>"."gender :".$row["gender"]."<br/>";
        echo'
        <tr>
            <td>
            <img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'" alt="">
            </td>
        </tr>';
    }
}else{
    echo "0 results";
}

$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>