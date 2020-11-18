<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data file
    $namaFile = $_FILES['image']['name'];
    $namaSementara = $_FILES['image']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../folder-farhan/images-esport/";

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
    $divisi = $_POST['divisi'];
    $kontak = $_POST['kontak'];
    $deskripsi = $_POST['deskripsi'];
    $syarat = $_POST['syarat'];

    // buat query
    $sql = "INSERT INTO table_hiring (nama_team,divisi,kontak,gambar_team,deskripsi,syarat) VALUE ('$judul', '$divisi','$kontak','$target_file','$deskripsi','$syarat')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: interface-esport.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: interface-esport.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>