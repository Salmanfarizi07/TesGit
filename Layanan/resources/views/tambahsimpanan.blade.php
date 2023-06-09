@include('layouts.app-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 class="judul">Tambah Simpanan</h2>
    <a href="/simpanan" class="kembali">Kembali</a>
    <form action="/simpanan/input" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_user">ID User</label>
            <input type="number" name="id_user" required="required">
        </div>
        <div class="form-group">
            <label for="jenis_simpanan">Jenis Simpanan</label>
            <input type="text" name="jenis_simpanan" required="required">
        </div>
        <div class="form-group">
            <label for="tgl_awal">Tanggal Masuk</label>
            <input type="date" name="tgl_awal" required="required">
        </div>
        <div class="form-group">
            <label for="jumlah_simpanan">Jumlah Simpanan</label>
            <input type="number" name="jumlah_simpanan" required="required">
        </div>
        <input type="submit" value="Simpan Data" class="simpan">
	</form>
</body>
</html>
