<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CorWeb|CheckUp</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="halamanlogin.php">
            <img src="logo.png" alt="logo" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="corona.php">Corona <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Check Up <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>
    <div>
        <img src="checkup2.jpg" alt="" width=40% style="margin-left: 400px;">
    </div>
    <div>
        <p align="center" style="font-size:14pt">Anda akan menjawab beberapa pertanyaan untuk mengecek kondisi fisik anda sekarang<br>Sudah siap mengisi?</p> <br>
        <button class="btn btn-dark" style="margin-left: 650px;">
            <a href="pertanyaan/pertanyaan.php" class="text-white" style="font-size:14pt" >Siap!</a>
        </button>
    </div>
</body>

</html>
