<?php

if (isset($_POST['tombolsubmit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
     
    if ($username=="hadid" && $password=="1234"){
        echo"Sukses";
    }
    else{
        echo"Username / Password salah";
    }
}
else{
    echo"login tidak bisa";
}

?>