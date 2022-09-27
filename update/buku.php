<?php include '../database/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data Buku</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_POST['update'])) {
        $kode_buku = $_POST['kode_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $query = mysqli_query($koneksi, "UPDATE buku SET kode_buku = '$kode_buku',  judul_buku = ' $judul_buku', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' WHERE kode_buku = '$kode_buku'") or die(mysqli_error($koneksi));
        include '../link_menu/buku.php';
    } else {
    ?>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-5">

                <div class="container text-center">
                    <br>
                    <h2>Edit Buku</h2>
                    <br>
                    <form action="../update/buku.php" method="post">
                        <?php
                        $id = $_GET['kode_buku'];
                        $query = mysqli_query($koneksi, "SELECT*FROM buku where kode_buku='$id'");
                        ?>
                        <table class="table table-dark">
                            <tr>
                                <td>Kode Buku</td>
                                <td>:</td>
                                <td><input type="text" name="kode_buku" size="40" value="<?php echo $id ?>"></td>
                            </tr>
                            <tr>
                                <td>Judul Buku</td>
                                <td>:</td>
                                <td><input type="text" name="judul_buku" size="40"></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>:</td>
                                <td><input type="text" name="penerbit" size="40"></td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td>:</td>
                                <td><input type="year" name="tahun_terbit" size="40"></td>
                            </tr>
                        </table>
                        <div class="text-center"><a href="../link_menu/buku.php"><button type="submit" name="update" class="btn btn-primary">Save</button></a>
                            <a href="../link_menu/buku.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        <?php
    }
        ?>
</body>

</html>