<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- menyisipkan bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/sh.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

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
                <a class="nav-link" style="margin-top:5px;color:white" href="login.php"><i style="font-size:24px" class="fa">&#xf2bd;</i> Login</a>
            </li>
        </ul>
        </div>
        </nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
                    <img src="ml.jpg" alt="MobileLegend">
                    <p>Mobile Legend Info</p>
                    
                </div>
            </div>

            
        </div>


        <div class="col-md-8">
       <h4>Mobile Legends Overview</h4> <br>
<p>Mobile Legends: Bang Bang is a free-to-play mobile multiplayer online battle arena (MOBA) that features a varied cast of heroes, quick matchmaking, and fast-paced battles that allow for quick gameplay sessions on the go. It features much of what players would expect from a PC MOBA like League of Legends or SMITE, including: laning, jungling, item builds, hero roles, hero abilities, skins, and much more. Its touchpad controls allow for a seamless gameplay experience on tablets and phones, with some customizable options that add auto-aiming, last-hitting, and more to make the game easier to control. Players are matched with other players across the globe, displaying their country flags next to their character picks. The game also sports community features, including: built-in livestreaming and a library of streams to watch from within the game, as well as an e-sports system that allows players to spectate high level play.</p> 

<h5>Mobile Legends Key Features:</h5><br>
<p>5v5 MOBA Gameplay – partake in classic MOBA combat against real opponents, fighting over three lanes to take down the enemy's tower.
Variety of Heroes – choose from a wide selection of heroes that fit every role a player would want, including: tanks, mages, marksmen, support, and more.
Quick Matchmaking – join a new game within ten seconds and finish the match within ten minutes, thanks to the game's quick early leveling.
Built-in Livestreaming – stream your pro plays or browse the game's library of active streams to view others' games with a variety of filters that allow players to search by heroes, rank, and more.
Mobile Controls – control your character with a virtual joystick on the left and unleash abilities on the right, aiming with either an auto-aiming feature or manually with the touchscreen.</p>
<h5>Mobile Legends Review</h5>
<video width="400px" height="350px" controls>
    <source src="vidios/mlvidio.mp4" type="video/mp4">
    <source src="vidios/mlvidio.ogg" type="video/ogg">
</video>
            <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
            </form>

            <?php for($i=0; $i < 4; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Hai !!! Like for this homepage please and join in club info turnament for more information like skill, skin, progress work, or just play game.
                </div>
                <button href="index.php" style="padding: 20px;"><p>Kembali</p></button>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>

</body>
</html>