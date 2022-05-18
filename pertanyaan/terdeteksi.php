<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <style>
    body {
        background-color: #F08080;
    }
    </style>
</head>

<body>
    <br>
    <div class="container">
        <div class="col-md-15">
            <div class="card" style="width: 800px; margin-left: 160px">
                <div class="card-body">
                    <h3 style="margin-top=100px;" align="center"><br> Klik Untuk Melihat Hasil
                    </h3>
                    <br>
                    <p align="center" class="fs-16">Terima kasih telah melakukan check up!</p>
                    <br>
                    <button style="margin-left:340px" class="btn btn-dark" onclick="location.href='terdeteksi2.php';">Lihat
                        hasil</button>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
