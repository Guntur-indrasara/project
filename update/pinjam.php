<?php include '../database/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data Pinjam</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_POST['update'])) {
        $no_anggota_pjm = $_POST['no_anggota_pjm'];
        $nama_anggota_pjm = $_POST['nama_anggota_pjm'];
        $nama_petugas_pjm = $_POST['nama_petugas_pjm'];
        $kode_buku_pjm = $_POST['kode_buku_pjm'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];
        $query = mysqli_query($koneksi, "UPDATE pinjam SET no_anggota_pjm = '$no_anggota_pjm',  nama_anggota_pjm = ' $nama_anggota_pjm ', nama_petugas_pjm = '$nama_petugas_pjm', kode_buku_pjm = '$kode_buku_pjm', tanggal_pinjam = '$tanggal_pinjam', tanggal_kembali = '$tanggal_kembali' WHERE no_anggota_pjm = '$no_anggota_pjm'") or die(mysqli_error($koneksi));
        include '../link_menu/pinjam.php';
    } else {
    ?>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-5">
                <div class="container text-center ">
                    <h2>Edit Detail Pinjam</h2>
                    <form action="pinjam.php" method="post">
                    <?php
                        $id = $_GET['no_anggota_pjm'];
                        $query = mysqli_query($koneksi, "SELECT*FROM pinjam where no_anggota_pjm='$id'");
                        ?>
                        <table class="table table-dark">
                            <tr>
                                <td>Nomor Anggota</td>
                                <td>:</td>
                                <td><input type="text" name="no_anggota_pjm" size="30" value="<?php echo $id ?>"></td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Nama Anggota</td>
                                <td>:</td>
                                <td><input type="text" name="nama_anggota_pjm" size="30"></td>
                            </tr>
                            <td>nama Petugas</td>
                            <td>:</td>
                            <td><input type="text" name="nama_petugas_pjm" size="30"></td>
                            </tr>
                            <tr>
                                <td>Kode Buku</td>
                                <td>:</td>
                                <td><input type="text" name="kode_buku_pjm" size="30"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pinjam</td>
                                <td>:</td>
                                <td><input type="date" name="tanggal_pinjam" size="30"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Kembali</td>
                                <td>:</td>
                                <td><input type="date" name="tanggal_kembali" size="30"></td>
                            </tr>
                        </table>
                        <div class="text-center">
                            <a href="../link_menu/pinjam.php"><button type="submit" name="update" class="btn btn-primary">Save</button></a>
                            <a href="../link_menu/pinjam.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                        </div>
                    </form>
                    <div class="col-sm-3"></div>
                </div>
            <?php
        }
            ?>
</body>

</html>