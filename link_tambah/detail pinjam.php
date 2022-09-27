<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Pinjam</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="container text-center ">
                <h2>Detail Pinjam</h2>
                <form action="../database/pinjam.php" method="post">
                    <table class="table table-dark">
                        <tr>
                            <td>Nomor Anggota</td>
                            <td>:</td>
                            <td><input type="text" name="no_anggota_pjm" size="30"></td>
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
                    <div class="text-center"><a href="?page=pinjam"><button type="submit" class="btn btn-primary">Save</button></a>
                        <a href="../link_menu/pinjam.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </form>
                <div class="col-sm-3"></div>
            </div>
</body>

</html>