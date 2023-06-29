<?php
session_start();
require_once "funtionmin.php";
$result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '".$_SESSION["id"]."' ");
$_SESSION
// $result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '".$_SESSION["id"]." ");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="riwayat.css">
    <title>Document</title>
</head>
<body>
<div class="title">Riwayat Pendaftaran</div>
<?php foreach ($result as $row){ ?>
    <div class="wrapper">
    <form action="" method="post">
        <!-- nama -->
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <span>Nama</span>
            <input type="text" value="<?php echo $row["nama"]; ?>" disabled>
        </div>
        <!-- nik -->
        <div class="field">
            <span>NIK</span>
            <input type="text" value="<?php echo $row["nik"]; ?>" disabled>
        </div>
        <!-- tanggal lahir -->
        <div class="field">
            <span>Tanggal Lahir</span>
            <input type="text" value="<?php echo $row["tanggal_lahir"]; ?>" disabled>
        </div>
        <!-- gender -->
        <div class="field">
            <span>Jenis Kelamin</span>
            <input type="text" value="<?php echo $row["gender"]; ?>" disabled>
        </div>
        <!-- alamat -->
        <div class="field">
            <span>Alamat</span>
            <input type="text" value="<?php echo $row["alamat"]; ?>" disabled>
        </div>
        <!-- city -->
        <div class="field">
            <span>Kota</span>
            <input type="text" value="<?php echo $row["nama_city"]; ?>" disabled>
        </div>
        <!-- rumah sakit -->
        <div class="field">
            <span>Rumah Sakit</span>
            <input type="text" value="<?php echo $row["nama_rs"]; ?>" disabled>
        </div>

        <!-- submit -->
        <div class="field btn">
            <a href="../dashboard/dashboard.php"><input type="button" value="Kembali ke menu"></a>
        </div>

        <div class="field btn">
            <a href="delete.php"?id=<?= $row['daftar_id'];?>><input type="button" value="Batalkan Pendaftaran" style="background-color:rgb(209, 31, 31) ;">
        </div>

    </form>
    </div>
<?php }; ?> 
</body>
</html>