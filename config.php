<?php
    $host ="localhost";
    $dbusername ="root";
    $dbpassword ="";
    $dbname ="corweb";
    $koneksi =mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    // cek konektion
    if(mysqli_connect_errno()){
      echo "koneksi database gagal : " . mysqli_connect_error();
    }else{
      echo"koneksi berhasil";
    }
    ?>
