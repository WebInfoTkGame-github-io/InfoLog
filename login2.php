<?php 
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysql_query("SELECT * from admin where email='$email' and password='$password'");
$cek = mysql_num_rows($query);
echo $cek;
?>