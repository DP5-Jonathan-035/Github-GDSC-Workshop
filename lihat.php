<!doctype html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDSC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'koneksi.php';
    $nim = $_GET['nim'];
    $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $execQuery = mysqli_query($conn, $query);
    $mahasiswa = mysqli_fetch_assoc($execQuery);
    ?>


    <div class="container">

        <div class="form">
            <div class="card col-md-6 offset-md-3 mt-3">
                <div class="card-header bg-primary">
                    <h4 class="card-title text-center text-white">mahasiswa</h4>
                </div>

                <div class="card-body">
                    <form action="prosesedit.php" method="POST">
                        <div class="mb-3">
                            <label for="nim">NIM</label>
                            <input id="nim" type="text" class="form-control" name="nim" placeholder="Masukkan nim" required value="<?= $mahasiswa['nim'] ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan nama" required value="<?= $mahasiswa['nama'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="kom">KOM</label>
                            <input id="kom" type="text" class="form-control" name="kom" placeholder="Masukkan KOM" required value="<?= $mahasiswa['kom'] ?>">
                        </div>


                        <div class="mb-3">
                            <label for="stambuk">Stambuk</label>
                            <input id="stambuk" type="text" class="form-control" name="stambuk" placeholder="Masukkan stambuk" required value="<?= $mahasiswa['stambuk'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="hobby">Hobby</label>
                            <input id="hobby" type="text" class="form-control" name="hobby" placeholder="Masukkan Hobby" required value="<?= $mahasiswa['hobby'] ?>">
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>