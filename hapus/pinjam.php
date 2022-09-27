<?php 
include '../database/connector.php';
$kode = $_GET['no_anggota_pjm'];
$$query = mysqli_query($koneksi, "DELETE FROM pinjam where no_anggota_pjm='$kode'") or die(mysqli_connect_error());
echo "Berhasl Menghapus Data";
?>
<script>
    document.location ="../link_menu/pinjam.php";
</script>