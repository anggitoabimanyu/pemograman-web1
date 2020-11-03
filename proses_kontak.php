<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $nomer = $_POST['nomer'];
    

    $strsql = "UPDATE kontak SET email='$email', instagram='$instagram', nomer='$nomer' WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_kontak.php?status=sukses');
    } else {
        die("Location: list_kontak.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}