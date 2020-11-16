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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
        <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="game">
                    <center><h1 style="margin-top:30px">Choose Game info</h1></center>
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
                            <div> 
                            <a href="#" class="scroll-link" data-id="ml"><button type="button" class="button">More Info</button></a>
                            </div>
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
                            <a href="#" class="scroll-link" data-id="pubg"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="ff"><button type="button" class="button">More Info</button></a> 
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
                            <a href="#" class="scroll-link" data-id="cod"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="aov"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="coc"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="cr"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="pef"><button type="button" class="button">More Info</button></a> 
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
                            <a href="#" class="scroll-link" data-id="ac"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="au"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="bs"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="mc"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="csgo"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="dota"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="ros"><button type="button" class="button">More Info</button></a>
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
                            <a href="#" class="scroll-link" data-id="val"><button type="button" class="button">More Info</button></a> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<div id="ml" class="page-section">
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3><b>Mobile Legends: Bang Bang!</b></h3>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
     <div class="container col-sm-6"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="ml/unnamed (1).webp" alt="ml images" style="width: 800px; height: 400px;">
      </div>

      <div class="item">
        <img src="ml/unnamed (2).webp" alt="ml images 1" style="width: 800px; height: 400px;">
      </div>
    
      <div class="item">
        <img src="ml/unnamed (3).webp" alt="ml images 2" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="ml/unnamed (4).webp" alt="ml images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="ml/unnamed.webp" alt="ml images 4" style="width: 800px; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        <h5>Bergabung Dengan Teman Anda Di Brand Baru Game moba 5v5 Melawan Pemain Manusia Sungguhan, Mobile Legends: Bang Bang! Pilih Hero Favorit Kamu Dan Buat Team Yang Sempurna Dengan Kawanmu!</h5><br>

<p>10 Detik Membuat Pertandingan, 10 Menit Bertarung, Lorong, Hutan, Menghancurkan Tower, Pertarungan Tim, Semua Kesenangan Itu Dari PC MOBAs Dan Permainan Action Itu Berada Di Tangan Mu! Tunjukan Semangat E-sports Kamu!</p><br>

<p>Mobile Legends: Bang Bang, 2017 Hasil Karya Game Mobile Baru. Serang Lawanmu Dengan Sentuhan Jari mu Dan Raih Mahkota Penantang Terkuat!</p><br>

<p>Handphone Kamu Haus Akan Pertandingan!</p><br>

<h4>Features:</h4><br>

<p>1. Klasik Peta MOBA, Pertandingan 5v5
Pertandingan 5v5 Secara Langsung Melawan Lawan Sungguhan. Bertarung Di 3 Lorong Untuk Melawan Tower Musuh. 4 Area Hutan. 18 Tower Pertahanan. 2 Boss Yang Buas. Selesaikan Permainan Klasik Peta MOBA.</p><br>

<p>2. Menang Dengan Kerja Sama Team & Strategi
Blok Serangan, Mengendalikan Lawan, Dan Menyembuhkan Rekanmu! Pilih Antara Tanks, Mages, Marksmen, Assasin, Support, Dan Seterusnya. Untuk Melindungi Tim Kamu Atau Jadilah MVP! Hero Baru Terus Menurus Di Hadirkan!</p><br>

<p>3. Pertarungan Adil, Bawa Tim Kamu Kepada Kemenangan
Hanya Seperti MOBA Klasik, Disini Tidak Ada Pelatihan Hero Atau Membeli Status. Menang Dan Kalah Tergantung Skill Kalian Dan Ability Sangat Adil Dan Platform Seimbang Untuk Kompetisi Permainan. Bermain Untuk Menang, Bukan Membayar Untuk Menang.</p><br>

<p>4. Kontrol Sederhana, Mudah Untuk Menjadi Master
Dengan Joystick Virtual Di Kiri Dan Tombol Skill Di Kanan, Hanya 2 Jari Yang Kamu Perlukan Untuk Menjadi Master! Autolock Dan Akan Mengikuti Target Kamu Untuk Menyerang. Tidak Akan Meleset! Dan Sistem Pengambilan Equip Secara Mudah Memfokuskan Kamu Kepada Sensasi Pertarungan Yang Seru!</p>

<p>5. 10 Detik Matchmaking, 10 Menit Pertandingan
Matchmaking Hanya Memerlukan Waktu 10 Detik, Dan Pertarungan Dapat Berakhir Hanya 10 Menit, Bermain Di Pertandingan Awal Meningkatkan Level Dan Lompat Ke Pertandingan Yang Hebat. Tidak Membosankan Dan Terus Farming, Dan Banyak Sensasi Pertandingan Lainnya Dan Membawa Kemenangan Pada Genggaman Kita. Dimana Saja, Apapun Momentnya, Hanya Ambil Handphone Kamu, Mainkan Pertandingan, Dan Membenamkan Diri Kamu Di Dalam Jantung Kompetisi MOBA.</p><br>

<p>PERHATIAN Mobile Legends : Bang Bang gratis untuk di-unduh dan bermain, namun beberapa item game juga dapat dibeli dengan uang sungguhan. Jika Anda tidak ingin menggunakan fitur ini, silakan mengatur perlindungan sandi untuk pembelian dalam pengaturan Google Play Store Anda. Beserta, di bawah Persyaratan Layanan dan Kebijakan Privasi, Anda harus setidaknya 12 tahun untuk bermain atau men-unduh Mobile Legends : Bang Bang.</p>

<p>Kontak Kami:
Kamu Akan Mendapatkan Bantuan Costomer Service Melalui [Contact Us] Tombol Di Dalam Permainan Untuk Membantu Kamu Dengan Berbagai Masalah Yang Kamu Temui Di Permainan. Dan Kamu Dapat Menemukan Dengan Mengikuti Platforms Kami.
Kami Menyambut Semua Ide Dan Saran Mengenai Mobile Legends: Bang Bang:</p>

<p>Customer Service Email: MobileLegendsGame@gmail.com <br>
Instagram: @mobilelegendsgame <br>
YouTube: <a href="https://www.youtube.com/c/MobileLegends5v5MOBA">https://www.youtube.com/c/MobileLegends5v5MOBA</a></p>
</div>
<div id="pubg" class="page-section">
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3><b>PUBG Mobile</b></h3>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
     <div class="container col-sm-6"> 
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
      <li data-target="#myCarousel1" data-slide-to="3"></li>
      <li data-target="#myCarousel1" data-slide-to="4"></li>
      <li data-target="#myCarousel1" data-slide-to="5"></li>
      <li data-target="#myCarousel1" data-slide-to="6"></li>
      <li data-target="#myCarousel1" data-slide-to="7"></li>
      <li data-target="#myCarousel1" data-slide-to="8"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="pubg/unnamed (1).webp" alt="pubg images" style="width: 800px; height: 400px;">
      </div>

      <div class="item">
        <img src="pubg/unnamed (2).webp" alt="pubg images 1" style="width: 800px; height: 400px;">
      </div>
    
      <div class="item">
        <img src="pubg/unnamed (3).webp" alt="pubg images 2" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="pubg/unnamed (4).webp" alt="pubg images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="pubg/unnamed (5).webp" alt="pubg images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="pubg/unnamed (6).webp" alt="pubg images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="pubg/unnamed (7).webp" alt="pubg images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="pubg/unnamed.webp" alt="pubg images 4" style="width: 800px; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<p>PLAYERUNKNOWN'S BATTLEGROUNDS resmi didesain eksklusif untuk perangkat seluler. Mainkan di mana saja, kapan saja. PUBG MOBILE menghadirkan aksi multiplayer gratis paling seru di perangkat seluler. Terjun, siapkan senjata, dan tuntaskan. Bertahanlah dalam pertempuran klasik 100 pemain, mode payload, mode fast-paced 4v4 team deathmatch, dan mode zombie. Bertahan adalah kunci, dan siapa yang terakhir bertahan menjadi pemenangnya. Saat panggilan tugas, tembak sesuka hati!</p><br>


<p>FREE ON MOBILE - Didukung oleh Mesin Unreal 4. Mainkan game kualitas konsol di mana saja. Menghadirkan grafis HD dan suara 3D yang mengagumkan. Menampilkan kontrol game yang bisa disesuaikan, mode training, dan obrolan suara. Rasakan kontrol paling halus, perilaku balistik dan senjata yang realistik di ponsel.</p><br>

<p>PETA PERTEMPURAN MASIF - Dari Erangel hingga Miramar, Vikendi hingga Sanhok, berkompetisilah dalam medan pertempuran yang luar biasa dan detail ini dengan berbagai ukuran, medan, siklus siang/malam, dan dinamika cuaca – dari kawasan-kawasan kota urban hingga tundra yang beku, hutan lebat, kuasai setiap rahasia medan perang untuk menciptakan strategi kemenangan.</p><br>

<p>KEDALAMAN DAN RAGAM – Dari mode klasik 100-pemain, mode payload yang seru, hingga mode Arcade-fast secepat kilat dan mode Deathmatch Team 4v4, serta mode Zombie yang menegangkan. Ada sesuatu untuk setiap orang! Ada sesuatu untuk setiap orang. Mainkan Solo, Duo, dan Skuad 4-pemain. Tembakkan senjata ke tempat paling tepat! Jadilah prajurit lone wolf dengan Klan dan jawab panggilan tugas ketika bantuan diperlukan! Menawarkan permainan FPS (First-Person Shooter) dan TPS (Third-Person Shooter), banyak kendaraan untuk semua medan yang berbeda dalam game dan gudang senjata realistis. Temukan tunggangan yang sempurna beserta kelengkapannya menuju kemenangan puncak!</p><br>

<p>SELALU TUMBUH - Event & tantangan harian, dan pembaruan bulanan yang menghadirkan fitur dan mode gameplay baru, membuat PUBG MOBILE selalu tumbuh dan berkembang. Mekanisme anti-kecurangan kami yang kuat dan serius memastikan lingkungan game yang fair dan seimbang, di mana semua orang bermain sesuai aturan.</p><br>

<p>* Memerlukan koneksi internet yang stabil.
* Persyaratan sistem rekomendasi PUBG MOBILE: Android 5.1.1 atau lebih tinggi dan setidaknya memori 2 GB. Untuk perangkat lain, cobalah PUBG MOBILE LITE</p><br>

<p>Ikuti kami: <br>
Facebook: <a href="https://www.facebook.com/PUBGMOBILE.ID.OFFICIAL">https://www.facebook.com/PUBGMOBILE.ID.OFFICIAL</a> <br>
Twitter: <a href="https://twitter.com/PUBGMobile">https://twitter.com/PUBGMobile</a> <br>
Reddit: <a href="https://www.reddit.com/r/PUBGMobile/">https://www.reddit.com/r/PUBGMobile/</a> <br>
YouTube：<a href="https://www.youtube.com/channel/UCkB_AwGXxPAKdahxGHpeC4Q/featured">https://www.youtube.com/channel/UCkB_AwGXxPAKdahxGHpeC4Q/featured</a> </p> <br>


Hubungi layanan pelanggan kami di <u>PUBGMOBILE_CS@tencentgames.com</u> jika Anda memiliki pertanyaan.
    </div>
    <div id="ff" class="page-section">
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3><b>Free Fire</b></h3>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
     <div class="container col-sm-6"> 
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
      <li data-target="#myCarousel2" data-slide-to="3"></li>
      <li data-target="#myCarousel2" data-slide-to="4"></li>
      <li data-target="#myCarousel2" data-slide-to="5"></li>
      <li data-target="#myCarousel2" data-slide-to="6"></li>
      <li data-target="#myCarousel2" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="ff/unnamed (1).webp" alt="ff images" style="width: 800px; height: 400px;">
      </div>

      <div class="item">
        <img src="ff/unnamed (2).webp" alt="ff images 1" style="width: 800px; height: 400px;">
      </div>
    
      <div class="item">
        <img src="ff/unnamed (3).webp" alt="ff images 2" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="ff/unnamed (4).webp" alt="ff images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="ff/unnamed (5).webp" alt="ff images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="ff/unnamed (6).webp" alt="ff images 3" style="width: 800px; height: 400px;">
      </div>
      <div class="item">
        <img src="ff/unnamed.webp" alt="ff images 4" style="width: 800px; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
    <p>Free Fire adalah permainan survival shooter terbaik yang tersedia di ponsel. Permainan berdurasi 10 menit ini akan menempatkan kamu di pulau terpencil dimana kamu bertarung melawan 49 pemain lainnya, dengan tujuan untuk bertahan hidup. Player bebas memilih posisi untuk memulai pemainan menggunakan parasut, dan tujuan semua ini untuk bertahan dalam zona aman selama mungkin. Menyetir kendaraan untuk menjelajahi map yang besar, bersembunyi dalam parit, atau menjadi tidak terlihat dengan tiarap di padang rumput. Menyerang, menembak, bertahan hidup, hanya satu tujuan: untuk bertahan hidup dan menjawab panggilan tugas.</p><br>

<p>[Game Survival terbaik shooter pada fomat aslinya]</p><br>
<p>Cari perlengkapanmu senjatamu, tetap dalam zona bermain, loot musuhmu dan jadilah orang terakhir yang bertahan. Sepanjang perjalanan, carilah airdrop dan hindari serangan udara untuk mendapatkan sedikit keunggulan dari pemain lainnya.</p><br>

<p>[10 menit, 50 pemain, game survival terhebat menunggu]</p><br>
<p>Game Lite dan Cepat - Dalam 10 menit, seorang survivor baru akan ditentukan. Apakah kamu akan menjawab tugas panggilan dan menjadi yang paling bersinar di bawah the Shining Lite?</p><br>

<p>[Squad 4 orang, dengan sistem komunikasi dalam permainan]</p><br>
<p>Buat squad-mu sampai dengan 4 pemain dan komunikasi dengan squad-mu saat itu juga. Jawab panggilan tugas dan pimpin teman-temanmu menuju kemenangan dan jadilah tim terakhir yang bertahan.</p><br>

<p>[Clash Squad]</p><br>
Game fase cepat 4 vs 4 sekarang dibuka setiap hari! Atur keuangan kamu, beli senjata, dan kalahkan musuhmu!

<p>[Realistis dan grafik halus]</p><br>
<p>Kontrol yang mudah untuk digunakan dan grafik halus menjanjikan pengalaman bertahan hidup terbaik yang dapat kamu temukan di ponsel.</p><br>

<p>[Contact us]</p><br>
<p>Customer Service: <a href="https://support.garena.co.id">https://support.garena.co.id</a></p><br>

<p>KEBIJAKAN PRIVASI：<a href="https://ff.garena.com/others/policy/id/">https://ff.garena.com/others/policy/id/</a></p>
    </div>
</section>
<script type="text/javascript">
$(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>