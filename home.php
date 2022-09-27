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
          <img src="img/pngegg.png" alt="" width="60" height="60" class="me-2">
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
              <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="link_menu/petugas.php">Petugas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="link_menu/anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buku.html">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="link_menu/pinjam.php">Pinjam</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Tutup Navbar -->


    <div class="bg-primary text-white text-center">
        <div class="container">
            <img src="img/pngegg.png" alt="kelompok2" class="avatar mb-2" width="400px">
            </div>
        <div class="container bg-white">
            <h1 class="text-center text-uppercase text-primary">Menu Utama</h1>
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <a href="link_menu/petugas.php"><img src="img/admin.png" alt="...." class="img-fluid" width="150px">
                        <P class="text-primary">Data Petugas</P></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <a href="link_menu/anggota.php"><img src="img/anggota.png" alt="...." class="img-fluid" width="150px">
                        <P class="text-primary">Data Anggota</P></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="portfolio-item mx-auto">
                        <a href="link_menu/pinjam.php"><img src="img/tgl.png" alt="...." class="img-fluid" width="150px">
                        <P class="text-primary">Data Peminjaman</P></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <a href="link_menu/buku.php"><img src="img/buku.png" alt="...." class="img-fluid" width="150px">
                        <P class="text-primary">Data Buku</P></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <sh1>&TALENT_SCOUTING2022</h1>
            </div>
        </div>
    </div>
    </div>
</body>

</html>