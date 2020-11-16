<?php include("koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Berita</h1>
    <form action="simpan-news.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Judul Berita
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="judul">
                </td>
            </tr>
            <tr>
                <td>
                    Gambar berita
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="file" name="thumbnail">
                </td>
            </tr>
            <tr>
                <td>
                    Kontent berita
                </td>
                <td>
                    :
                </td>
                <td>
                    <textarea style="resize:none" name="konten" cols="30" rows="10"></textarea>
                </td>
                <tr>
                    <td>
                        <input type="submit" name="kirim" value="kirim">
                    </td>
                </tr>
                
            </tr>
        </table>
    </form>
</body>
</html>