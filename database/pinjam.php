<?php
include 'connector.php';
$no_anggota_pjm = $_POST['no_anggota_pjm'];
$nama_anggota_pjm = $_POST['nama_anggota_pjm'];
$nama_petugas_pjm = $_POST['nama_petugas_pjm'];
$kode_buku_pjm = $_POST['kode_buku_pjm'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
mysqli_query($koneksi, "INSERT INTO pinjam values ('$no_anggota_pjm','$nama_anggota_pjm','$nama_petugas_pjm','$kode_buku_pjm','$tanggal_pinjam','$tanggal_kembali')");

    include '../link_menu/pinjam.php';

?>