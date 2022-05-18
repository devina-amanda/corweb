<?php
include '../connect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiCheck|Hasil</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <style>
        .kesimpulan{
            margin-top:150px;
            margin-left:220px;
        }
        body{
            background-color:#F08080;
        }
    </style>
</head>

<body>
    <div class="kesimpulan">
        <div class="col-md-15">
            <div class="card" style="width: 900px;">
                <div class="card-body">
                    <h3 style="margin-top=100px;" align="center"><br> Kesimpulan
                    </h3>
                    <br>
                    <p align="center" class="fs-16">Gejala-gejala ini membutuhkan perhatian segera!!! Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.</p>
                    <br>
                    <button style="margin-left:370px" class="btn btn-dark" onclick="location.href='pertanyaan.php';">Check Up lagi</button>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
