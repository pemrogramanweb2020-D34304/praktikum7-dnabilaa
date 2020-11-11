<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>FORM CREATE</title>
</head>
<body>
<?php
    require_once('koneksi.php');

    $nik = $_GET['nik'];
    $sql = "SELECT * FROM data_penduduk
                WHERE nik = $nik";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
    <h1>FORM UPDATE DATA KEPENDUDUKAN</h1>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" value="<?php echo $nik;?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'];?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'];?>" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>" required></td>
            </tr>
            <tr>
                <td>Foto (max = 1,5MB)</td>
                <td><input type="file" name="foto" id="foto" ></td>
            </tr>
        </table>
        <input type="submit" value="UPDATE" />
    </form>
</body>
</html>