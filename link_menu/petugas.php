<?php include '../database/connector.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Perpustakaan</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../img/pngegg.png" alt="" width="60" height="60" class="me-2">
          <strong> Perpustakaan</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-4 my-lg-0">
              <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          <ul class="navbar-nav ms-auto">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../home.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../link_menu/petugas.php">Petugas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../link_menu/anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../buku.html">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../link_menu/pinjam.php">Pinjam</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Tutup Navbar -->
  <div class="container">
    <nav class="navbar navbar-dark bg-primary">
      <div><a href="../index.php"><button type="button" class="btn btn-primary">Home</button></a></div>
    </nav>
    <br>
    <h1>Data Petugas</h1>
    <p>Daftar Petugas Perpustakaan WIDYA PRATAMA</p>
    <div><a href="../link_tambah/petugas.php"><button type="button" class="btn btn-primary">Tambah</button></a></div>
    </br>
    <table class="table text-center">
      <thead>
        <tr>
          <th>Kode</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        $statemen = mysqli_query($koneksi, "SELECT * FROM petugas");
        while ($data = mysqli_fetch_array($statemen)) {
        ?>
          <tr>
            <td><?= $data['kode_ptg'] ?></td>
            <td><?= $data['nama_ptg'] ?></td>
            <td><?= $data['alamat_ptg'] ?></td>
            <td><?= $data['jenis_kelamin_ptg'] ?></td>
            <td>
              <div class="text-center">
                <a href="../update/petugas.php?kode_ptg=<?php echo $data['kode_ptg']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                <a href="../hapus/petugas.php?kode_ptg=<?php echo $data['kode_ptg']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
              </div>
            </td>
          </tr>
        <?php $nomor++;
        } ?>
      </tbody>
    </table>
  </div>

</body>

</html>