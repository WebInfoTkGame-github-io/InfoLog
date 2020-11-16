<?php 
include("koneksi.php");
if (isset($_POST['kirim'])) {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $gambar = $_POST['thumbnail'];

    $sql = "INSERT INTO table_news (judul_berita,konten_berita,gambar_berita)VALUES('$judul','$konten','$gambar')";
    $query = mysqli_query($db,$sql);
    if ($query) {
        header("location:interface-news.php? status=sukses");
    }else{
        header("location:interface-news.php? status=gagal");
    }
}else{
    die("akses dilarang...");
}
?>