<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Tambah Agama</title>
</head>

<body>
    <?php
    include('../koneksi.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM agama WHERE id = $id LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <?php
        include('../menu.php');
        ?>
        <div class="row" style="margin-top:40px;">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Tambah Agama
                    </div>
                    <div class="card-body">
                        <form action="update-agama.php" method="POST">
                            <div class="form-group">
                                <label for="nisn">Nama</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <a href="data-agama.php" class="btn btn-primary">KEMBALI</a>
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