<?php
session_start();
if( isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}
require 'function.php';
if( isset($_POST["register"]) ) {
    if( register($_POST) > 0 ) {
        echo "<script>
            alert('user baru berhasil ditambahkan!');
            </script>";
    }else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .box h2{
            margin: 0 0 30px;
            padding: 10px;
            color: purple;
            text-align: center;
        }
        .box .form-control {
            position: relative;
            padding: 0px 0px 0px 10px;
        }
        .box .form-control input{
            width: 100%;
            padding: 10px 0px 0px 10px;
            font-size: 16px;
            color: purple;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid purple;
            outline: none;
            background: transparent;
        }
        .box .form-control label {
            position: 200 absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0px 0px 10px;
            font-size: 16px;
            color: purple;
            pointer-events: none;
            transition: .5s;
        }
        .box .form-control input:focus ~ label,
        .box .form-control input:valid ~ label{
            top: -7px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }
        .box input [type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: purple;
            background: #03a9f4;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .hod {
            font-family: 'Bad Script', cursive;
            color: blue;
            font-size: 45px;
            margin: 0;
            padding: 0;
    
        }
        .hod span {
            margin: 0;
            padding: 0;
            animation: animate1 2s linear infinite;
        }
        .hod span:nth-child(1){
            animation-delay: 0s;
        }
        .hod span:nth-child(2){
            animation-delay: 0.25s;
        }
        .hod span:nth-child(3){
            animation-delay: 0.5s;
        }
        .hod span:nth-child(4){
            animation-delay: 0.75s;
        }
        .hod span:nth-child(5){
            animation-delay: 1s;
        }
        .hod span:nth-child(6){
            animation-delay: 1.25s;
        }
        .hod span:nth-child(7){
            animation-delay: 1.5s;
        }
        .hod span:nth-child(8){
            animation-delay: 1.75s;
        }
        .hod span:nth-child(9){
            animation-delay: 2s;
        }
        .hod span:nth-child(10){
            animation-delay: 2.25s;
        }
        .hod span:nth-child(11){
            animation-delay: 2.5s;
        }
        .hod span:nth-child(12){
            animation-delay: 2.75s;
        }
        @keyframes animate1 {
    0%,100%{
        color: darkblue;
        filter: blur(2px);
        text-shadow: 0 0 10px blueviolet,
                     0 0 20px blueviolet,
                     0 0 40px blueviolet,
                     0 0 60px blueviolet,
                     0 0 80px blueviolet,
                     0 0 100px blueviolet,
                     0 0 120px blueviolet,
                     0 0 140px blueviolet,
                     0 0 160px blueviolet,
                     0 0 180px blueviolet,
                     0 0 200px blueviolet,
                     0 0 2200px blueviolet;
                    }
    5%,95%{
        color: green;
        filter: blur(0px);
        text-shadow: none;
    }
}
label {
    display: block;
}
    </style>

    <title>Web Info Tourney</title>
  </head>
<body class="bg-light">
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
                <a class="nav-link" href="blog.php" style="color:white">Blog</a>
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
                <select name="login" id="login"><a class="nav-link" style="margin-top:5px;color:white"><i style="font-size:24px" class="fa">&#xf2bd;</i> Login</a>
                <option value="login"><a href="login.php">login</a></option>
                <option value="logout"><a href="logout.php">logout</a></option>
                </select>
            </li>
        </ul>
        </div>
        </nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>
        <div class="w3-container w3-padding-64 box hod" id="contact">
        <h4>
        <span>B</span>
        <span>e</span>
        <span>r</span>
        <span>g</span>
        <span>a</span>
        <span>b</span>
        <span>u</span>
        <span>n</span>
        <span>g</span>
        <span>l</span>
        <span>a</span>
        <span>h</span>
         bersama ribuan orang lainnya...</h4>
         </div>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="images/TUFO.png" />
        </div>

    </div>
</div>

</body>
</html>