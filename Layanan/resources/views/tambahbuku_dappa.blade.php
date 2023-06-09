@include('layouts.app-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tmabah Buku Dappa</title>
</head>
<body>
<h2 class="judul">Tambah Buku</h2>
    <a href="/buku_dappa" class="kembali">Kembali</a>
    <form action="/buku_dappa/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Judul">Judul</label>
            <input type="text" name="Judul" required="required">
        </div>
        <div class="form-group">
            <label for="Penulis">Penulis</label>
            <input type="text" name="Penulis" required="required">
        </div>
        <div class="form-group">
            <label for="Penerbit">Penerbit</label>
            <input type="text" name="Penerbit" required="required">
        </div>
        <div class="form-group">
            <label for="TahunTerbit">Tahun Terbit</label>
            <input type="text" name="TahunTerbit" required="required">
        </div>
        <div class="form-group">
            <label for="JumlahStok">Jumlah Stok</label> 
            <input type="text" name="JumlahStok" required="required">
        </div>
        <div class="form-group">
            <label for="dendabuku">Denda Buku</label> 
            <input type="text" name="dendabuku" required="required">
        </div>
        <input type="submit" value="Simpan Data" class="simpan">
	</form>
</body>
</html>