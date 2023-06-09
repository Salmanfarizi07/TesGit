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
<form action="/kategori_zano/store" method="post">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="jenis_pembayaran">Nama Kategori</label>
            <input type="text" name="Jenis_Pembayaran" required="required">
        </div>
		<div class="form-group">
            <label for="metode_pembayaran">Buku</label>
            <select name="IDBuku" id="IDBuku">
            @foreach( $buku_zano as $u )
                <option value="{{ $u->IDBuku }}" > {{ $u->Judul }} </option>
            @endforeach
            </select>
        </div>
        
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>