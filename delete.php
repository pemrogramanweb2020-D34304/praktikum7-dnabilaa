<?php
    require_once('koneksi.php');

    $nik = $_GET['nik'];
    $sqlselect = "SELECT * FROM upload
                    WHERE nik = $nik";
    $result = mysqli_query($conn, $sqlselect);
    $row = mysqli_fetch_assoc($result);
    
    $target_dir = "images/";
    $target_file    = $target_dir.$row['foto'];
    if(!unlink($target_file)){
        echo "File cannot delete";
    } else {
        $sqldelete = "DELETE FROM data_penduduk
                        WHERE nik = $nik";
    
        mysqli_query($conn, $sqldelete);
        header('location: index.php');
    }
?>