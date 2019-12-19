<?php
    require_once "koneksi.php";

    $nim   = $_GET["nim"];

    $query = "delete from peminjaman where nimPeminjam='$nim'";

    if (mysqli_query($conn, $query)) {
        header('Location: historyPeminjaman.php');
        // echo "Berhasil";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
?>