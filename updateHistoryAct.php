<?php
    require_once "koneksi.php";

    $nim        = $_POST["nimPeminjam"];
    $nama       = $_POST["namaPeminjam"];
    $judulBuku  = $_POST["judulBuku"];
    $jumlah     = $_POST["jumlah"];
    $tglPinjam  = $_POST["tglPinjam"];
    $tglKembali = $_POST["tglKembali"];
    $totalTelat = $_POST["totalTelat"];
    $denda      = $_POST["denda"];
   
    $query = "update peminjaman set namaPeminjam='$nama', judulBuku='$judulBuku', jumlah='$jumlah', tglPinjam='$tglPinjam', 
                                    tglKembali='$tglKembali', totalTelat='$totalTelat', denda='$denda' where nimPeminjam='$nim'";

    if (mysqli_query($conn, $query)) {
        header('Location: historyPeminjaman.php');
        // echo "Berhasil";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
