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
<h2 class="judul">Tambah Pembayaran</h2>
    <a href="/Pembayaran" class="kembali">Kembali</a>
    <form action="/Pembayaran/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="metode_pembayaran">Metode_Pembayaran</label>
            <select name="Id_User" id="Id_User">
            @foreach( $User as $u )
                <option value="{{ $u->id_user }}" > {{ $u->username }} </option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_pembayaran">Jenis_Pembayaran</label>
            <input type="text" name="Jenis_Pembayaran" required="required">
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode_Pembayaran</label>
            <input type="text" name="Metode_Pembayaran" required="required">
        </div>
        <div class="form-group">
            <label for="status_pembayaran">Status_Pembayaran</label>
            <input type="text" name="Status_Pembayaran" required="required">
        </div>
        <input type="submit" value="Simpan Data" class="simpan">
	</form>
</body>
</html>