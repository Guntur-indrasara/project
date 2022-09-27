<?php include '../database/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data petugas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_POST['update'])) {
        $kode_ptg = $_POST['kode_ptg'];
        $nama_ptg = $_POST['nama_ptg'];
        $alamat_ptg = $_POST['alamat_ptg'];
        $jenis_kelamin_ptg = $_POST['jenis_kelamin_ptg'];
        $query = mysqli_query($koneksi, "UPDATE petugas SET kode_ptg = '$kode_ptg',  nama_ptg = ' $nama_ptg', alamat_ptg = '$alamat_ptg', jenis_kelamin_ptg = '$jenis_kelamin_ptg' WHERE kode_ptg = '$kode_ptg'") or die(mysqli_error($koneksi));
        include '../link_menu/petugas.php';
    } else {
    ?>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-5">
                <br>
                <div class="container text-center ">
                    <h2>Edit Petugas</h2>
                    <br>
                    <form action="petugas.php" method="post">
                        <?php
                        $id = $_GET['kode_ptg'];
                        $query = mysqli_query($koneksi, "SELECT*FROM petugas where kode_ptg='$id'");
                        ?>
                        <table class="table table-dark">
                            <tr>
                                <td>Kode Petugas</td>
                                <td>:</td>
                                <td><input type="text" name="kode_ptg" size="30"  value="<?php echo $id ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="nama_ptg" size="30"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input type="text" name="alamat_ptg" size="30"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><input type="radio" name="jenis_kelamin_ptg" value="Laki-Laki" />Laki-Laki
                                    <input type="radio" name="jenis_kelamin_ptg" value="Perempuan" />Perempuan
                                </td>
                            </tr>
                        </table>
                        <div class="text-center"> <a href="../link_menu/petugas.php"><button type="submit" name="update" class="btn btn-primary">Save</button></a>
                            <a href="../link_menu/petugas.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                        </div>
                    </form>
                    <div class="col-sm-3"></div>
                </div>
            <?php
        }
            ?>
</body>

</html>