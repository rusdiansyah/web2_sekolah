<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>

<body>

    <div class="container">
        <?php
        include('menu.php');
        ?>
        <div class="row" style="margin-top:40px;">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Tambah Siswa
                    </div>
                    <div class="card-body">
                        <form action="simpan-siswa.php" method="POST">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" class="form-control" placeholder="Masukan NISN Siswa">
                            </div>
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="alamat_siswa">Alamat Siswa</label>
                                <textarea type="text" name="alamat_siswa" class="form-control" rows="4" placeholder="Masukan Alamat Lengkap"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                            <a href="index.php" class="btn btn-primary">KEMBALI</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>