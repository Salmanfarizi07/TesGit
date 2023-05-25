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
<h2 class="judul">Tambah Peminjaman</h2>
    <a href="/Peminjaman" class="kembali">Kembali</a>
    <form action="/Peminjaman/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="jenis_peminajman">Jenis_Peminjaman</label>
            <input type="text" name="Jenis_Peminjaman" required="required">
        </div>
        <div class="form-group">
            <label for="Desc_peminjaman">Desc_Peminjaman</label>
            <input type="text" name="Desc_peminjaman" required="required">
        </div>
        <div class="form-group">
            <label for="Tanggal_peminjaman">Tanggal_Peminjaman</label>
            <input type="text" name="Tanggal_peminjaman" required="required">
        </div>
        <div class="form-group">
            <label for="Jumlah_Peminjaman">Jumlah_Peminjaman</label>
            <input type="text" name="Jumlah_Peminjaman" required="required">
        </div>
        <div class="form-group">
            <label for="Status_Peminjaman">Status_Pembayaran</label>
            <input type="text" name="Status_Peminjaman" required="required">
        </div>
        <input type="submit" value="Simpan Data" class="simpan">
	</form>
</body>
</html>
