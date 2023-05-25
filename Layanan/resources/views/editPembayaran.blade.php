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
    <h2 class="judul"> Edit Pembayaran </h2>
    <a href="/Pembayaran" class="kembali">Kembali</a>
@foreach($Pembayaran as $p)
<form action="/Pembayaran/update" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="jenis_pembayaran">Jenis_Pembayaran</label>
		<input type="text" required="required" name="Jenis_Pembayaran" id="jenis_pembayaran" value="{{ $p->Jenis_Pembayaran }}">
	</div>
	<div class="form-group">
		<label for="metode_pembayaran">Metode_Pembayaran</label>
		<input type="text" required="required" name="Metode_Pembayaran" id="metode_pembayaran" value="{{ $p->Metode_Pembayaran }}">
	</div>
	<div class="form-group">
		<label for="status_pembayaran">Status_Pembayaran</label>
		<input type="text" required="required" name="Status_Pembayaran" id="status_pembayaran" value="{{ $p->Status_Pembayaran }}">
	</div>
	<input type="hidden" name="Id_Pembayaran" value="{{ $p->Id_Pembayaran }}"> <br/>
	<input type="submit" value="Simpan Data" class="simpan">
</form>
@endforeach
</body>
</html>