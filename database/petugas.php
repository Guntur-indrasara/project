<?php
include 'connector.php';
$kode_ptg = $_POST['kode_ptg'];
$nama_ptg = $_POST['nama_ptg'];
$alamat_ptg = $_POST['alamat_ptg'];
$jenis_kelamin_ptg = $_POST['jenis_kelamin_ptg'];
mysqli_query($koneksi, "INSERT INTO petugas values ('$kode_ptg','$nama_ptg','$alamat_ptg','$jenis_kelamin_ptg')");

    include '../link_menu/petugas.php';
?>