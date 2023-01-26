<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa</h1>
    <form action="db.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>File</td>
                <td>:</td>
                <td><Input type="file" name="file"></td>
            </tr>
            <tr>
                <td colspan=3><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>