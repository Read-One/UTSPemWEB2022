<?php 
include "db_connect.php";
$dbname ="utspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
$sqlid = "INSERT INTO Mahasiswa (`nim`, `nama`, `prodi`, `gender`, `foto`, `tempatlhr`, `tgllhr`, `stat`, `agama`, `skill`, `quote`)
VALUES ('201110190','Muhamad Ridwan','Informatika','L',LOAD_FILE('C:/localhost/UTS/UTSPemWEB2022/1.png'),'Sleman','1999-04-03','Belum Kawin','Islam','Networking','Urip agawe URUP')";

$sqlcp = "INSERT INTO contact(`email`, `alamat`, `telephone`, `nim`) 
VALUES ('muridwan34@gmail.com','Jagalan 02/27, Sukoharjo, Ngaglik, Sleman, DIY','081336467694','201110190')";

$sqlsch1 ="INSERT INTO sekolah(`namasekolah`, `tahunlulus`, `jurusan`, `nim`, `keterangan`) 
VALUES ('SDN SUKOMULYO','2011','-','201110190','FORMAL')";

$sqlsch2 ="INSERT INTO sekolah(`namasekolah`, `tahunlulus`, `jurusan`, `nim`, `keterangan`) 
VALUES ('SMPN 2 NGAGLIK','2014','-','201110190','FORMAL')";

$sqlsch3 ="INSERT INTO `sekolah`(`namasekolah`, `tahunlulus`, `jurusan`, `nim`, `keterangan`) 
VALUES ('SMKN 2 DEPOK SLEMAN','2018','TKJ','201110190','FORMAL')";

$sqljob1 = "INSERT INTO job(`tempatkerja`, `tahunmasuk`, `tahunkeluar`, `jabatan`, `nim`, `deskripsi`) 
VALUES ('JogjaMediaNet','2017','2018','Staff Network EGOV','201110190','MAGANG')";

$sqljob2 = "INSERT INTO job(`tempatkerja`, `tahunmasuk`, `tahunkeluar`, `jabatan`, `nim`, `deskripsi`) 
VALUES ('CitrawebSolusiTeknologi','2018','-','Technical Support','201110190','TETAP')";

$sqlorg1 = "INSERT INTO `org`(`namaorg`, `tahunmasuk`, `tahunkeluar`, `jabatan`, `nim`, `deskripsi`) 
VALUES ('Ikatan remaja Jagalan','2017','-','Ketua','201110190','Aktif')";

$sqlorg2 = "INSERT INTO `org`(`namaorg`, `tahunmasuk`, `tahunkeluar`, `jabatan`, `nim`, `deskripsi`) 
VALUES ('Karang Taruna Karya Muda','2019','-','Divisi UKS','201110190','Aktif')";

$sqlorg3 = "INSERT INTO `org`(`namaorg`, `tahunmasuk`, `tahunkeluar`, `jabatan`, `nim`, `deskripsi`) 
VALUES ('Karang Taruna Desa Sukoharjo','2018','-','Divisi Humas','201110190','Aktif')";

if ($conn->query($sqlorg3)===true){
    echo "New Record created succesfully";
}else{
    echo "ERROR".$sqlid."<br/>".$conn->error;
}

$conn->close();
echo "<br /> NIM = 201110190 <br />"; 
echo "Nama = MUHAMAD RIDWAN <br />";
?>
