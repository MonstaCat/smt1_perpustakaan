<?php

    //Membuat koneksi pada database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "arp_perpustakaan";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (mysqli_connect_errno($conn)) {
        echo "Koneksi Gagal!";
        die();
    } else {
        // echo "Koneksi Berhasil!";
    }
