<?php include '../database/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data Anggota</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_POST['update'])) {
        $no_anggota = $_POST['no_anggota'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $query = mysqli_query($koneksi, "UPDATE anggota SET no_anggota = '$no_anggota',  nama = ' $nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin' WHERE no_anggota = '$no_anggota'") or die(mysqli_error($koneksi));
        include '../link_menu/anggota.php';
    } else {
    ?>
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="container text-center ">
                <br>
                <h2>Edit Anggota</h2>
                <br>
                <form action="anggota.php" method="post">
                <?php
                        $id = $_GET['no_anggota'];
                        $query = mysqli_query($koneksi, "SELECT*FROM anggota where no_anggota='$id'");
                        ?>
                    <table class="table table-dark">
                        <tr>
                            <td>No Anggota</td>
                            <td>:</td>
                            <td><input type="text" name="no_anggota" size="40" value="<?php echo $id ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama Anggota</td>
                            <td>:</td>
                            <td><input type="text" name="nama" size="40"></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="alamat" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                            </td>
                        </tr>
                    </table>
                    <div class="text-center"><a href="../link_menu/anggota.php"><button type="submit" name="update" class="btn btn-primary">Save</button></a>
                        <a href="../link_menu/anggota.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </form>
                <div class="col-sm-3"></div>
            </div>
            <?php
        }
            ?>
</body>

</html>