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
<form action="/Jasa/store" method="post">
    <a href="/Jasa" class="kembali">Kembali</a>
    <form action="/Jasa/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="Nama_Jasa">Nama_Jasa</label>
            <input type="text" name="Nama_Jasa" required="required">
        </div>
        <div class="form-group">
            <label for="Jenis_Jasa">Jenis_Jasa</label>
            <input type="text" name="jenis Jasa" required="required">
        </div>
        <div class="form-group">
            <label for="Desc_jasa">Desc_Jasa</label>
            <input type="text" name="Desc_Jasa" required="required">
        </div>
        <div class="form-group">
            <label for="Tgl_Pengajuan">Desc_Jasa</label>
            <input type="text" name="Desc_Jasa" required="required">
        </div>
        <div class="form-group">
            <label for="Status_jasa">Status_Jasa</label>
            <input type="text" name="Status_Jasa" required="required">
        </div>
        <input type="submit" value="Simpan Data" class="simpan">
	</form>
</body>
</html>