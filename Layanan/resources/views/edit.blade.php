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
@foreach($Surat as $p)
    <h2 class="judul"> Edit Data </h2>
    <a href="/Surat" class="kembali">Kembali</a>
<form action="/Surat/update" method="post">
	{{ csrf_field() }}
    <div class="form-group">
		<label for="jenis_surat">Jenis</label>
		<input type="text" required="required" name="Jenis_Surat" id="jenis_surat" value="{{ $p->Jenis_Surat}}">
	</div>
	<div class="form-group">
		<label for="Desc_surat">Deskripsi</label>
		<input type="text" required="required" name="Desc_surat" id="Desc_surat" value="{{ $p->Desc_Surat}}">
	</div>
	<div class="form-group">
		<label for="Jenis_tabungan">Jenis Tabungan</label>
		<input type="text" required="required" name="Jenis_tabungan" id="Jenis_tabungan" value="{{ $p->Jenis_Tabungan}}">
	</div>
    <div class="form-group">
		<label for="Jenis_simpanan">Jenis Simpanan</label>
		<input type="text" required="required" name="Jenis_simpanan" id="Jenis_simpanan" value="{{ $p->Jenis_Simpanan}}">
	</div>
    <div class="form-group">
		<label for="Status">Status</label>
		<input type="text" required="required" name="Status" id="Status" value="{{ $p->Status}}">
	</div>
	<input type="hidden" name="Id_Surat" value="{{ $p->Id_Surat}}"> <br/>
	<input type="submit" value="Simpan Data"class="Simpan">
</form>
@endforeach
</body>
</html>