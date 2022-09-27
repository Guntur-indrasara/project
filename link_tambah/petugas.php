<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petugas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <br>
            <div class="container text-center ">
                <h2>Tambah Petugas</h2>
                <br>
                <form action="../database/petugas.php" method="post">
                    <table class="table table-dark">
                        <tr>
                            <td>Kode Petugas</td>
                            <td>:</td>
                            <td><input type="text" name="kode_ptg" size="30"></td>
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
                    <div class="text-center"><a href="?page=petugas"><button type="submit" class="btn btn-primary">Save</button></a>
                        <a href="../link_menu/petugas.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </form>
                <div class="col-sm-3"></div>
            </div>
</body>

</html>