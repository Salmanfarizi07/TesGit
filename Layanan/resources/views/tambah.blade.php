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
<h2 class="judul">Tambah Data</h2>
    <a href="/Surat" class="kembali">Kembali</a>
    <form action="/Surat/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Jenis_Surat">Jenis</label>
            <input type="text" name="Jenis_Surat" required="required">
        </div>
        <div class="form-group">
            <label for="Desc_Surat">Deskripsi</label>
            <input type="text" name="Desc_Surat" required="required">
        </div>
        <div class="form-group">
            <label for="Jenis_Tabungan">Jenis Tabungan</label>
            <input type="text" name="Jenis_Tabungan" required="required">
        </div>
        <div class="form-group">
            <label for="Jenis_Simpanan">Jenis Simpanan</label>
            <input type="text" name="Jenis_Simpanan" required="required">
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <input type="text" name="Status" required="required">
        </div>
        <input type="submit" value="Simpan Data" class="simpan">
	</form>
</body>
</html>