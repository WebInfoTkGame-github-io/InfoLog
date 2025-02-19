<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <title>Team-Up | Form E-Sport Hiring</title>
  </head>
  <body>
    <!-- Header -->
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-primary bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logo" style="width:80px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link " style="color:white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="tournament.php" style="color:white">Tournament</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-news.php" style="color:white">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-esport.php" style="color:white">E-sport recruitment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:white">Top-up credit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:white">Add partner</a>
            </li>
        </ul>
        <ul class="nav nav-pills ml-auto">
            <li class="nav-item" style="margin-top:7px">
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="margin-top:5px;color:white" href="login.php"><i style="font-size:24px" class="fa">&#xf2bd;</i> Login</a>
            </li>
        </ul>
        </div>
        </nav>
<!-- akhir header -->
<!-- detil -->
<section class="kontak">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-top:20px">
                <h3>Form E-Sport Hiring</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="simpan-esport.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Name Team</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>    
                    <div class="form-group">
                        <label for="Pesan">Division</label>
                        <input type="email" id="nama" name="divisi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Pesan">Contact Person</label>
                        <input type="email" id="nama" name="kontak" class="form-control">
                    </div>
                    <label for="Pesan">Image Tournament</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Description Team</label><br>
                        <textarea style="resize:none" class="form-control" name="deskripsi" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Terms</label><br>
                        <textarea style="resize:none" class="form-control" name="syarat" rows="10"></textarea>
                    </div>
                    <button type="submit" name="kirim" class="kirim" style="margin-top:30px;">Send</button>
                </form>   
            </div>
        </div>
    </div>
</section>
<!-- akhir detil -->
<!-- footer -->
<section style="background-color: #2e2d2d;">
    <div class="container-fluid">
        <div class="footer">
            <div class="row">
                <div class="col-sm-4">
                    <a href="index.php">
                        <img src="images/logo.png" class="logo" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <p><i style="font-size:24px" class="fa">&#xf1f9;</i>Copyright 2020 Build by Savoxit</p>
                </div>
                <div class="col-sm-4">
                    <h4>Follow Us:</h4>
                    <a href="">
                        <i style="font-size:24px" class="fa">&#xf230;</i>Facebook
                    </a>
                    <br>
                    <a href="">
                        <i style="font-size:24px" class="fa">&#xf16d;</i>Instagram
                    </a>
                    <br>
                    <a href="">
                        <i style="font-size:24px" class="fa">&#xf081;</i>Twitter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>