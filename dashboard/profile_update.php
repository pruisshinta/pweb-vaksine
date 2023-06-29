<?php
session_start();
    require_once "config.php";
    $connection=getconnection();
    $id=$_GET['id'];
    $ambilData=mysqli_query($connection,"SELECT * FROM users WHERE user_id = '$id'");
    $data=mysqli_fetch_array($ambilData);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body> 
    <div class="box">
        <input type="hidden" name="id" value="<?php echo $user["user_id"] ?>">
        <div class="atas">Update Profile</div>
        <div class="kiri">
            <div class="gambar"></div>
        </div>
        <div class="tengah">
            <div class="atasnya">
                <span>Nama</span>
                <input type="text" value="<?php echo $data["nama_lengkap"]; ?>">
            </div>
            <div class="atasnya">
                <span>Gender</span>
                <input type="text" value="<?php echo $data["gender"]; ?>"disabled>
            </div>
            <div class="atasnya">
                <span>Email</span>
                <input type="text" value="<?php echo $data["email"]; ?>">
            </div>
        </div>
        <div class="kanan">
            <div class="atasnya">
                <span>Tanggal lahir</span>
                <input type="date" value="<?php echo $data["tanggal_lahir"]; ?>" disabled>
            </div>
            <div class="atasnya">
                <span>No. Handphone</span>
                <input type="text" value="<?php echo $data["no_hp"]; ?>">
            </div>
            <div class="button">
                <span></span>
                <a href="profile.php"> <input type="button" value="Simpan"> </a>
            </div>
            <div class="button">
                <span></span>
                <a href="logout.php"><input type="button" value="Logout"></a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $nama=$_POST['nama'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];

    mysqli_query($connection,"UPDATE users SET nama_lengkap='$nama',no_hp='$no_hp',email='$email'
    WHERE user_id='$id'") or die(mysqli_error($connection));
    echo "<script> alert('User berhasil ditambhakan')</script>";
    header("Location: profile.php");
    exit;
}
?>