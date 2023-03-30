<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Input Simpanan</h2>
    <form action="Create.php" method="post">
        <div class="form-group">
            <label>ID Simpanan:</label>
            <input type="text" name="id_simpanan" class="form-control" placeholder="Masukan ID Simpanan" />
        </div>
		     <div class="form-group">
            <label>ID User:</label>
            <input type="number" name="id_user" class="form-control" placeholder="Masukan ID User" />
        </div>
		     <div class="form-group">
            <label>Jenis Penjualan:</label>
            <input type="text" name="jenis" class="form-control" placeholder="Masukan Jenis Penjualan" />
        </div>
		     <div class="form-group">
            <label>Tanggal Masuk:</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal" />
        </div>
        <div class="form-group">
            <label>Jumlah Penjualan:</label>
            <input type="number" name="harga" class="form-control" placeholder="Masukan harga" />
        </div>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>