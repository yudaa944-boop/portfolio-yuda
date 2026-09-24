<?php 
include 'koneksi.php'; 
if (isset($_POST['submit'])) { 
    $judul = $_POST['judul']; 
    $penulis = $_POST['penulis']; 
    $penerbit = $_POST['penerbit']; 
    $tahun = $_POST['tahun_terbit']; 
    $simpan = mysqli_query($koneksi, "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahun')"); 
    if ($simpan) { header("Location: index.php"); 
} else { echo "Gagal menyimpan data."; } 
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PERPUSTAKAAN SAYANG</title>
  </head>
  <body>


    <div class="container mt-5">
        <h2 class="md-4">tambah siswa baru</h2>

        <form method="POST" action="">
            <label class="form-label">
                JUDUL BUKU
            </label>
            <input type="text" name="judul" class="form-control" placeholder="masukan judul buku"Required>
            <label class="form-label">
                PENULIS BUKU
            </label>
            <input type="text" name="penulis" class="form-control" placeholder="masukan judul buku"Required>
            <label class="form-label">
                PENERBIT BUKU
            </label>
            <input type="text" name="penerbit" class="form-control" placeholder="masukan judul buku"Required>
            <label class="form-label">
                tahun
            </label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="masukan judul buku"Required>

            <button type="submit" name="submit" class="btn btn-primary">
            Simpan
            </button>
            <a href="index.php" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>