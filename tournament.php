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

    <title>Team-Up | Tournament</title>
  </head>
  <body>
    <!-- Header -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/aa.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/r.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/uwu.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
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
                <a class="nav-link active" href="tournament.php" style="color:white">Tournament</a>
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
            <div class="nav-item navbar">
                <div class="dropdown fa" style="font-size:24px">
                <button class="dropbtn" >
                <a href="login.php"><i>&#xf2bd;</i>Login
                <i class="fa fa-caret-down"></i></a>
                </button>
                <div class="dropdown-content">
                <button><a href="login.php" value="login">login</a></button>
                <button><a href="logout.php" value="logout">logout</a></button>
                </div>
                </div>
            </div>
        </ul>
        </div>
        </nav>
<!-- akhir header -->
<!-- Content -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="game">
                    <center><h1 style="margin-top:30px">Choose Tournament</h1></center>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/ml.jpg" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Mobile Legends</h4> 
                            <a href="list-tournament.php" class="button">
                                Find Tournament
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/pubg.png" alt="pubg">
                        </div>
                        <div class="flip-card-back">
                            <h4>PUBG Mobile</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/ff.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Free Fire</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/cod.jpg" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Call of Duty</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/aov.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Arena of Valor</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/coc.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Clash of Clans</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/cr.jpg" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Clash Royale</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/pes.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>PES E-Football</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/ac.jpg" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Auto Chess</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/au.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Among Us</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/bs.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Brawl Stars</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/ches.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Magic Chess</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/cs.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>CS:GO</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/dota2.jpg" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Dota 2</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/ros.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Rules of Survival</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img style="width:250px;height:250px;" src="images/vl.png" alt="Mobile legends">
                        </div>
                        <div class="flip-card-back">
                            <h4>Valorant</h4> 
                            <a href="#" class="button">
                                Find Tournament
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- akhir content -->
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