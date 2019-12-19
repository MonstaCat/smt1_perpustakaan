<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Input Peminjaman</title>
</head>

<body>
    <?php
    require_once "koneksi.php";

    $nim = $_GET['nim'];
    $query = mysqli_query($conn, "select * from peminjaman where nimPeminjam = '$nim'");

    $arr = mysqli_fetch_array($query);
    ?>

    <div class="container-fluid">
        <br>
        <h4>Form Input Peminjaman</h4>
        <br>
        <?php require_once "header.php" ?>
        <br>
        <form action="updateHistoryAct.php" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" autocomplete="off" class="form-control" name="nimPeminjam" id="nim" placeholder="NIM" value="<?= $arr['nimPeminjam'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="namaPeminjam">Nama peminjam</label>
                <input type="text" autocomplete="off" class="form-control" name="namaPeminjam" id="namaPeminjam" value="<?= $arr['namaPeminjam'] ?>" placeholder="Nama Peminjam">
            </div>
            <div class="form-group">
                <label for="judulBuku">Judul buku</label>
                <input type="text" autocomplete="off" class="form-control" name="judulBuku" id="judulBuku" value="<?= $arr['judulBuku'] ?>" placeholder="Judul Buku">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah buku</label>
                <input type="number" autocomplete="off" class="form-control" name="jumlah" id="jumlah" value="<?= $arr['jumlah'] ?>" placeholder="Jumlah">
            </div>
            <div class="form-group">
                <label for="tglPinjam">Tanggal pinjam</label>
                <input type="date" autocomplete="off" class="form-control" name="tglPinjam" id="tglPinjam" value="<?= $arr['tglPinjam'] ?>" placeholder="Tanggal Pinjam">
            </div>
            <div class="form-group">
                <label for="tglKembali">Tanggal kembali</label>
                <input type="date" autocomplete="off" class="form-control" name="tglKembali" id="tglKembali" value="<?= $arr['tglKembali'] ?>" placeholder="Tanggal Kembali">
            </div>
            <div class="form-group">
                <label for="totalTelat">Total telat</label>
                <input type="number" autocomplete="off" class="form-control" name="totalTelat" id="totalTelat" value="<?= $arr['totalTelat'] ?>" placeholder="Total Telat">
            </div>
            <div class="form-group">
                <label for="totalTelat">Denda</label>
                <input type="number" autocomplete="off" class="form-control" name="denda" id="denda" value="<?= $arr['denda'] ?>" placeholder="Denda">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-warning" name="update" id="update" value="Update">
            </div>
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>