<?php
session_start();
require_once "../register/getfuntion.php";
$result= mysqli_query($connection,"SELECT * FROM users WHERE user_id = '".$_SESSION["id"]."' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Profile</title>
</head>
<body>
<?php foreach ($result as $row){ ?>
    <div class="box">
        <div class="atas">Profile</div>
        <div class="kiri">
            <div class="gambar"></div>
        </div>
        <div class="tengah">
            <div class="atasnya">
                <span>Nama</span>
                <input type="text" value="<?php echo $row["nama_lengkap"]; ?>" disabled>
                
            </div>
            <div class="atasnya">
                <span>Gender</span>
                <input type="text" value="<?php echo $row["gender"]; ?>"disabled>
            </div>
            <div class="atasnya">
                <span>Email</span>
                <input type="text" value="<?php echo $row["email"]; ?>"disabled>
            </div>
        </div>
        <div class="kanan">
            <div class="atasnya">
                <span>Tanggal lahir</span>
                <input type="date" value="<?php echo $row["tanggal_lahir"]; ?>" disabled>
            </div>
            <div class="atasnya">
                <span>No. Handphone</span>
                <input type="text" value="<?php echo $row["no_hp"]; ?>" disabled>
            </div>
            <div class="button">
                <span></span>
                <a href="profile_update.php?id=<?= $row["user_id"]; ?>"><input type="button" value="Edit"> </a>
            </div>
            <div class="button">
                <span></span>
                <a href="logout.php"><input type="button" value="Logout"></a>
            </div>
        </div>
    </div>
    <?php };?>
</body>
</html>