<?php
include 'connector.php';
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
mysqli_query($koneksi, "INSERT INTO buku values ('$kode_buku','$judul_buku','$penerbit','$tahun_terbit')");

    include '../link_menu/buku.php';

?>