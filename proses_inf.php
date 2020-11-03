<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $autor = $_POST['autor'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];


    $strsql = "UPDATE blog SET judul='$judul', autor='$autor', tanggal='$tanggal', isi='$isi' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_inf.php?status=sukses');
    } else {
        die("Location: list_inf.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}