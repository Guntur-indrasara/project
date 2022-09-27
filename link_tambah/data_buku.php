<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="container text-center">
                <br>
                <h2>Tambah Buku</h2>
                <br>
                <form action="../database/buku.php" method="post">
                    <table class="table table-dark">
                        <tr>
                            <td>Kode Buku</td>
                            <td>:</td>
                            <td><input type="text" name="kode_buku" size="40"></td>
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
                    <div class="text-center"><a href="?page=buku"><button type="submit"
                                class="btn btn-primary">Save</button></a>
                            <a href="../link_menu/buku.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
</body>

</html>