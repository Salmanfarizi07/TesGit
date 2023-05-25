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
	<h2 class="judul"> Edit Peminjaman </h2>
    <a href="/Peminjaman" class="kembali">Kembali</a>
@foreach($Peminjaman as $p)
<form action="/Peminjaman/update" method="post">
	{{ csrf_field() }}
    <div class="form-group">
		<label for="jenis_peminjaman">jenis_Peminjaman</label>
		<input type="text" required="required" name="Jenis_Peminjaman" id="jenis_peminjaman" value="{{ $p->Jenis_Peminjaman }}">
	</div>
	<div class="form-group">
		<label for="Desc_peminjaman">Desc_peminjaman</label>
		<input type="text" required="required" name="Desc_peminjaman" id="Desc_peminjaman" value="{{ $p->Metode_Peminjaman }}">
	</div>
	<div class="form-group">
		<label for="Tanggal_peminjaman">Tanggal_Peminjaman</label>
		<input type="text" required="required" name="Tanggal_peminjaman" id="Tanggal_peminjaman" value="{{ $p->Status_Peminjaman }}">
	</div>
    <div class="form-group">
		<label for="Jumlah_Peminjaman">Jumlah_Peminjaman</label>
		<input type="text" required="required" name="Jumlah_Peminjaman" id="Jumlah_Peminjaman" value="{{ $p->Status_Peminjaman }}">
	</div>
    <div class="form-group">
		<label for="Status_Peminjaman">Status_Peminjaman</label>
		<input type="text" required="required" name="Status_Peminjaman" id="Status_Peminjaman" value="{{ $p->Status_Peminjaman }}">
	</div>
	<input type="hidden" name="Id_Peminjaman" value="{{ $p->Id_Peminjaman }}"> <br/>
	<input type="submit" value="Simpan Data"class="Simpan">
</form>
@endforeach
</body>
</html>