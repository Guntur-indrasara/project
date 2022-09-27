<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="container text-center ">
                <br>
                <h2>Tambah Anggota</h2>
                <br>
                <form action="../database/anggota.php" method="post">
                    <table class="table table-dark">
                        <tr>
                            <td>No Anggota</td>
                            <td>:</td>
                            <td><input type="text" name="no_anggota" size="40"></td>
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
                    <div class="text-center"><a href="?page=anggota"><button type="submit" class="btn btn-primary">Save</button></a>
                        <a href="../link_menu/anggota.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </form>
                <div class="col-sm-3"></div>
            </div>
</body>

</html>