<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CorWeb|User</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
    .welcome {
        color: #11bb221;
        font-size: 24pt;
        font-weight: 900;
        text-align: center;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="logo" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="corona.php">Corona<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="checkup.php">Check Up <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>
    <div class="row">
        <div style=" width: 200px;
                height: 400px;">
            <img src="checkup.jpg" alt="" width=400px style="margin-left: 200px;  margin-top: 50px;">
        </div>
        <div style=" width: 800px;
                    height: 400px;
                    margin-left:200px;">
            <h1 style="
            margin-top: 100px;
            margin-left: 200px;
            font-family: josefin sans;
            font-weight: 900;
            text-align:right;
            ">Check Up!</h1>
            <br>
            <p style="margin-left: 200px; text-align:right; font-size: 12pt;">
                Apakah di daerah kamu sekarang sudah terpapar virus corona?
                <br> Ingin melakukan check up tapi tidak tahu caranya?<br>
            </p>
            <br>
            <button class="btn btn-dark" style="margin-left: 660px;">
                <a href="checkup.php" class="text-white">Cek Disini!</a>
            </button>
        </div>
    </div>
    <div class="row">
        <div style=" width: 800px;
                    height: 400px;">
            <h1 style="
            margin-top: 100px;
            margin-left: 300px;
            font-family: josefin sans;
            font-weight: 900;
            ">Info Corona!</h1>
            <br>
            <p style="margin-left: 200px; text-align: left; font-size: 12pt;">
                Mau tahu info tentang corona?
                <br>Kalian bisa lihat gejala dan cara pencegahannya disini.<br>
            </p>
            <br>
            <button class="btn btn-dark" style="margin-left: 200px;">
                <a href="corona.php" class="text-white">Lihat Sekarang!</a>
            </button>
        </div>
        <div style=" width: 200px;
                    height: 500px;">
            <img src="info.jpg" alt="" width=450px style="margin-left: 0px;  margin-top: 70px;">
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
