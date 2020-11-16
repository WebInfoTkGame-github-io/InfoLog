<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data file
    $namaFile = $_FILES['thumbnail']['name'];
    $namaSementara = $_FILES['thumbnail']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "..InfoLog.github.io/folder-farhan/terupload/";

    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    $target_file = $dirUpload.$namaFile;

    if ($terupload) {
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        echo "Upload Gagal!";
    }    



    // ambil data dari formulir
    $konten = $_POST['konten'];
    $judul = $_POST['judul'];

    // buat query
    $sql = "INSERT INTO table_news (judul_berita,konten_berita,gambar_berita) VALUE ('$judul', '$konten','$target_file')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: interface-news.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: interface-news.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>