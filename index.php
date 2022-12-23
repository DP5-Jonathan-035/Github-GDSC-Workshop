<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDSC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <a href="./tambah.php" class="btn btn-success mt-5 mb-2">Tambahkan[+]</a>
        <div class="">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>KOM</th>
                    <th>Hobby</th>
					<th>Stambuk</th>
                    <th>Aksi</th>
                </tr>

                <?php
                include './koneksi.php';


                $query = "SELECT * FROM mahasiswa";
                $exeQuery = mysqli_query($conn, $query);

                $i = 1;
                while ($mahasiswa = mysqli_fetch_assoc($exeQuery)) {
                ?>

                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $mahasiswa['nim'] ?></td>
                        <td><?= $mahasiswa['nama'] ?></td>
                        <td><?= $mahasiswa['kom'] ?></td>
                        <td><?= $mahasiswa['hobby'] ?></td>
						<td><?= $mahasiswa['stambuk'] ?></td>
                        <td>
                            <a onclick="return confirm('Apakah yakin anda ingin menghapus mahasiswa')" href="hapus.php?nim=<?= $mahasiswa['nim'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="edit.php?nim=<?= $mahasiswa['nim'] ?>" class="btn btn-info btn-sm text-white">Edit</a>
                            <a href="lihat.php?nim=<?= $mahasiswa['nim'] ?>" class="btn btn-info btn-sm text-white">lihat</a>
                        </td>
                    </tr>

                <?php
                }
                ?>






            </table>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>