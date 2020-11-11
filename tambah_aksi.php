<?php
    require_once("koneksi.php");

    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal_lahir'];
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $tempat = $_POST['tempat_lahir'];

    $namafile = $_FILES['foto']['name'];
    $namafileserver = $_FILES['foto']['tmp_name'];
    $target_dir     = "fotoo/";
    $target_file    = $target_dir.basename($_FILES["foto"]["name"]);
    $tipefile = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($_FILES['foto']['size'] > 1500000 or $tipefile != "jpeg" and $tipefile != "jpg"){
        echo "File terlalu besar";
        header('location: tambah.php');
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO data_penduduk(nik, nama, tanggal_lahir, tempat_lahir, foto)
                        VALUES (NULL,'$nama','$tanggal','$tempat','$namafile')";
            mysqli_query($conn, $sql);            
            echo "The file ". basename( $_FILES['foto']['name']). " has been uploaded.";
            header('location: index.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }   
    }

    
?>