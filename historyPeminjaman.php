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
    <?php require_once "koneksi.php" ?>

    <div class="container-fluid">
        <br>
        <h4>History Peminjaman</h4>
        <br>
        <?php require_once "header.php" ?>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-inverse table-responsive-xl">
                    <caption>List of history peminjaman</caption>
                    <thead class="thead-inverse">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Jumlah Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Total Telat</th>
                            <th scope="col">Denda</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 0;
                        $query = mysqli_query($conn, "select * from peminjaman");

                        while ($arr = mysqli_fetch_array($query)) {
                            $i++;
                        ?>

                            <tr>
                                <td scope="row"><?= $i ?></td>
                                <td><?= $arr['nimPeminjam'] ?></td>
                                <td><?= $arr['namaPeminjam'] ?></td>
                                <td><?= $arr['judulBuku'] ?></td>
                                <td><?= $arr['jumlah'] ?></td>
                                <td><?= $arr['tglPinjam'] ?></td>
                                <td><?= $arr['tglKembali'] ?></td>
                                <td><?= $arr['totalTelat'] ?> Hari</td>
                                <td>Rp. <?= $arr['denda'] ?></td>
                                <td>
                                    <a href="updateHistory.php?nim=<?= $arr['nimPeminjam'] ?>" class="btn btn-warning btn-sm">Update</a>
                                    <a href="deleteHistory.php?nim=<?= $arr['nimPeminjam'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>