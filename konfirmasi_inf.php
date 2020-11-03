<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    include_once "header.php";
    if (isset($_POST['tombolSubmit'])) {
        $judul = $_POST['judul'];
        $autor = $_POST['autor'];
        $tanggal= $_POST['tanggal'];
        $isi= $_POST['isi'];

        $sql = "INSERT INTO blog (judul, autor, tanggal, isi)
        VALUES ('$judul','$autor','$tanggal', '$isi')";

        if (mysqli_query($conn, $sql)) {
        header('Location: list_inf.php?status=sukses');
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dg error: ".mysqli_error($conn);
        }
    
?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses";
   }
?>
</body>
</html>
