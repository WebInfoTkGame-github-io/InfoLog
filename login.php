<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            height:5000px;
        }
        .flip-card {
        background-color: transparent;
        width: 250px;
        height: 250px;
        margin:20px;
        perspective: 1000px;
        }

        .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }

        .flip-card-front {
        background-color: #bbb;
        color: black;
        }

        .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
        }
/* style haryo */
.box h2{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}
.box .inputBox {
    position: relative;
}
.box .inputBox input{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}
.box .inputBox label {
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label{
    top: -18px;
    left: 0;
    color: #03a9f4;
    font-size: 12px;
}
.box input [type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}
/* end of style */

    </style>

    <title>Web Info Tourney</title>
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
            <img src="images/sh3.png" alt="logo" style="width:80px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" style="color:white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:white">Tournament</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:white">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:white">E-sport recruitment</a>
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
                <a class="nav-link" style="margin-top:5px;color:white" href="#"><i style="font-size:24px" class="fa">&#xf2bd;</i> Login</a>
            </li>
        </ul>
        </div>
        </nav>
	<h1>Membuat Login Anda</h1>
	<h3>Masukan data:</h3>
	<form action="login2.php" method="post">		
            <div class="inputBox"><p><input type="email" name="email" required=""><label>Email</label></p></div>
            <div class="inputBox"><p><input type="password" name="password" required=""><label>Password</label></p></div>
            <div class="inputBox"><p><button type="submit" value="Log In" name="login">Log In</button></p></div>
	</form>
</body>
</html>
