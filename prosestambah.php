<?php
if ($_POST) {
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $stambuk = $_POST['stambuk'];
    $kom = $_POST['kom'];
    $hobby = $_POST['hobby'];

    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$kom', '$stambuk','$hobby')";
    $execQuery = mysqli_query($conn, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal disimpan');
        window.location.href = 'tambah.php';
        </script>";
    }
} else {
    echo "No Access";
}
