<?php include("koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Game</title>
</head>
<body>
    <h1>Input Game</h1>
    <form action="simpan-game.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Nama Game
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    Gambar Game
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="file" name="icon">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="kirim" value="kirim">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>