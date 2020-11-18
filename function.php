<?php
$conn = mysqli_connect("localhost", "root", "", "datauser");

function register($data) {
    global $conn;
    
    $username = strtolower(stripslashes($data["username"]));
    $password = strtolower(stripslashes($data["password"]));
    $password2 = strtolower(stripslashes($data["password2"]));
    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'"); 
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
        alert('username sudah terdaftar!');
        </script>";
        return false;
    }
    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambahkan userbaru ke database 
    mysqli_query($conn, "INSERT INTO users VALUES('0', '$username', '$password')");
    return mysqli_affected_rows($conn);
}

?>