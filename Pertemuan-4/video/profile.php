<?php
    session_start();
    if(isset($_SESSION['nama_user']) ){
        echo 'ini halaman profil ' .$_COOKIE['nama_user'];
    }else{
        echo 'login dulu cuy';
    }
?>

<br>
<a href="logout.php">Logout</a>