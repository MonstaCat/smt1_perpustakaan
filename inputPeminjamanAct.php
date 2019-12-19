<?php
    require_once "koneksi.php";

    $nim        = $_POST["nimPeminjam"];
    $nama       = $_POST["namaPeminjam"];
    $judulBuku  = $_POST["judulBuku"];
    $jumlah     = $_POST["jumlah"];
    $tglPinjam  = $_POST["tglPinjam"];
    $tglKembali = $_POST["tglKembali"];
    $totalTelat = $_POST["totalTelat"];
    $denda      = 0;

    if ($totalTelat > 2) {
        $denda = 2000;
    } elseif ($totalTelat <= 2 && $totalTelat > 0) {
        $denda = 500;
    } else {
        $denda = 0;
    }

   
    $query = "insert into peminjaman (nimPeminjam, namaPeminjam, judulBuku, jumlah, tglPinjam, tglKembali, totalTelat, denda) 
                values ('$nim', '$nama', '$judulBuku', '$jumlah', '$tglPinjam', '$tglKembali', '$totalTelat', '$denda')";

    if (mysqli_query($conn, $query)) {
        header('Location: historyPeminjaman.php');
        // echo "Berhasil";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

?>