<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Biodata</title>
</head>

<body>
    <?php
    include "db_koneksidb.php";
    $sql1 = "SELECT * FROM mahasiswa";

    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {

            echo '
            <div class="utama" style="height: 300px;">
            <div class="gambar"> 
                <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" style="width:200px;height:260px;"  alt="foto identitas">
            </div>
            <div class="palet"> 
                <h2> NAMA   : ' . $row['nama'] . '</br>
                                        NIM  : ' . $row['nim'] . '</br>
                                        PRODI : ' . $row['prodi'] . '</br>
                </h2>
                <h2>Enthusiast On ' . $row['skill'] . '</h2>
                <h4>For Me : <i>' . $row['quote'] . '<i></h4>
            </div>
            </div>';
        }
    }
    ?>

    <?php
    include "db_koneksidb.php";
    $sql2 = "SELECT * FROM mahasiswa JOIN contact ON mahasiswa.nim=contact.nim";

    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "
        <div class='utama' style='height: 450px'>
        <div class='kiri'>
            <hr class='tebal'>
            <h3>Personal Info</h3>
            <h6>Nama : " . $row['nama'] . "</h6>
            <h6>Tempat, Tgl Lahir : " . $row['tempatlhr'] . " , " . $row['tgllhr'] . "</h6>
            <h6>Jenis Kelamin : " . $row['gender'] . "</h6>
            <h6>Agama : " . $row['agama'] . "</h6>
            <h6>Status : " . $row['stat'] . "</h6>
        </div>
        ";
            echo '
        <div class="kanan">
            ';
            echo "
            <hr class='tebal'>
            <h3>Contact Info</h3>
            <h6>Alamat : " . $row['alamat'] . "</h6>
            <h6>NO Handphone : " . $row['telephone'] . "</h6>
            <h6>email : " . $row['email'] . "</h6>
            <h6>Linkedin :</h6>
            <h6>Socmed :</h6>
        </div>
        ";
            echo '
        </div>
    ';
        }
    }
    ?>

    <div class='utama' style="height: 400px";>
        <?php
        include "db_koneksidb.php";
        $sql3 = "SELECT * FROM mahasiswa JOIN org ON mahasiswa.nim=org.nim";

        $result = $conn->query($sql3);

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "
        <div class='org'>
            <hr class='tebal'>            
            <h3>ORGANIZATION</h3>
            <h6>" . $row['namaorg'] . "</h6>
            <h6>Jabatan : ".$row['jabatan']."</h6>
            <h6>Masa Jabatan : ".$row['tahunmasuk']." - Sekarang</h6>
            <h6>Status : ".$row['deskripsi']."</h6>
        </div>
        ";
            }
        }
        ?>
    </div>

    <div class='utama' style="height: 400px";>
        <?php
        include "db_koneksidb.php";
        $sql4 = "SELECT * FROM mahasiswa JOIN sekolah ON mahasiswa.nim=sekolah.nim ORDER BY `sekolah`.`tahunlulus` ASC";

        $result = $conn->query($sql4);

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "
        <div class='org'>
            <hr class='tebal'>            
            <h3>ACADEMIC HISTORY</h3>
            <h6>Nama Sekolah : " . $row['namasekolah'] . "</h6>
            <h6>Jurusan : ".$row['jurusan']."</h6>
            <h6>Tahun Lulus : ".$row['tahunlulus']."</h6>
            <h6>Status : ".$row['keterangan']."</h6>
        </div>
        ";
            }
        }
        ?>
    </div>
</body>

</html>