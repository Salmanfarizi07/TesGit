@include('layouts.app-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
@foreach($buku_dappa as $b)
    <h2 class="judul"> Edit Data </h2>
    <a href="/buku_dappa" class="kembali">Kembali</a>
<form action="/buku_dappa/update" method="post">
	{{ csrf_field() }}
    <div class="form-group">
		<label for="Judul">Judul</label>
		<input type="text" required="required" name="Judul" id="Judul" value="{{ $b->Judul}}">
	</div>
	<div class="form-group">
		<label for="Penulis">Penulis</label>
		<input type="text" required="required" name="Penulis" id="Penulis" value="{{ $b->Penulis}}">
	</div>
	<div class="form-group">
		<label for="Penerbit">Penerbit</label>
		<input type="text" required="required" name="Penerbit" id="Penerbit" value="{{ $b->Penerbit}}">
	</div>
    <div class="form-group">
		<label for="TahunTerbit">Tahun Terbit</label>
		<input type="text" required="required" name="TahunTerbit" id="TahunTerbit" value="{{ $b->TahunTerbit}}">
	</div>
    <div class="form-group">
		<label for="JumlahStok">Jumlah Stok</label>
		<input type="text" required="required" name="JumlahStok" id="JumlahStok" value="{{ $b->JumlahStok}}">
	</div>
    <div class="form-group">
		<label for="dendabuku">Denda Buku</label>
		<input type="text" required="required" name="dendabuku" id="dendabuku" value="{{ $b->dendabuku}}">
	</div>
	<input type="hidden" name="IDBuku" value="{{ $b->IDBuku}}"> <br/>
	<input type="submit" value="Simpan Data"class="simpan">
</form>
@endforeach
</body>
</html>