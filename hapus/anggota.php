<?php 
include '../database/connector.php';
$kode = $_GET['no_anggota'];
$$query = mysqli_query($koneksi, "DELETE FROM anggota where no_anggota='$kode'") or die(mysqli_connect_error());
echo "Berhasl Menghapus Data";
?>
<script>
    document.location ="../link_menu/anggota.php";
</script>