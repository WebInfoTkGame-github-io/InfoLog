<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data file
    $namaFile = $_FILES['icon']['name'];
    $namaSementara = $_FILES['icon']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "..InfoLog.github.io/folder-farhan/icon-game/";

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
    $nama = $_POST['nama'];

    // buat query
    $sql = "INSERT INTO table_game (nama_game,icon_game) VALUE ('$nama','$target_file')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: interface-game.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: interface-game.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>