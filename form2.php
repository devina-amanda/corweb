<?php

    include 'config.php';

    $email = (@$_POST['Email']);
    $password = (@$_POST['Password']);

    $query = "SELECT * FROM `user` WHERE email ='$email' AND password ='$password'";
    $sql = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($sql)){
      session_start();
      $_SESSION['Email'] = $email;
      // header("Location : user.php");
      header("Location: halamanlogin.php");

    }else{
      echo"<h1> Email atau Password salah! </h1>";
      echo"<div class='form'>
              <h3>
                 <br/> Klik untuk <a href='awalan.php'>Login lagi</a>
              </h3>
           </div>";
    }
 ?>
