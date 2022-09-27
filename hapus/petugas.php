<?php 
include '../database/connector.php';
$kode = $_GET['kode_ptg'];
$$query = mysqli_query($koneksi, "DELETE FROM petugas where kode_ptg='$kode'") or die(mysqli_connect_error());
echo "Berhasl Menghapus Data";
?>
<script>
    document.location ="../link_menu/petugas.php";
</script>