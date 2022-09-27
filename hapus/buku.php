<?php 
include '../database/connector.php';
$kode = $_GET['kode_buku'];
$$query = mysqli_query($koneksi, "DELETE FROM buku where kode_buku='$kode'") or die(mysqli_connect_error());
echo "Berhasl Menghapus Data";
?>
<script>
    document.location ="../link_menu/buku.php";
</script>