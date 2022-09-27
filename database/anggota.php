<?php
include 'connector.php';
$no_anggota = $_POST['no_anggota'];
$nama= $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
mysqli_query($koneksi, "INSERT INTO anggota values ('$no_anggota','$nama','$alamat','$jenis_kelamin')");

    include '../link_menu/anggota.php';

?>