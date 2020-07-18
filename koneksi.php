<?php
    $host     = "localhost";
    $username = "id14359763_tri";
    $password = "";
    $database = "id14359763_pesanmakan";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
