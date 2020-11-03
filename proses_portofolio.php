<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $profil = $_POST['profil'];
    

    $strsql = "UPDATE portofolio SET profil='$profil' WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_portofolio.php?status=sukses');
    } else {
        die("Location: list_portofolio.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}