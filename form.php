<?php

$name = filter_input(INPUT_POST, 'Name');
$email = filter_input(INPUT_POST, 'Email');
$password = filter_input(INPUT_POST, 'Password');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "corweb";

//create koneksi
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
  $sql = "INSERT into user (name, email, password)
  values ('$name', '$email', '$password')";
  if ($conn->query($sql)){
    header("Location: halamanlogin.php");
  }
  else{
    echo"<h1> Error! </h1>";
    echo"<div class='form'>
            <h3>
               <br/> Klik untuk <a href='awalan.php'>Login lagi</a>
            </h3>
         </div>";
  }
}

 ?>
