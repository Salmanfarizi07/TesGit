@include('layouts.app-master')
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Simpanan</title>
</head>
<body>

	<h2>Edit Simpanan</h3>
 
	<a href="/simpanan" > Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($simpanan as $s)
	<form action="/simpanan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->id_simpanan }}"> <br/>
		Jenis Simpanan <input type="text" required="required" name="jenis_simpanan" value="{{ $s->jenis_simpanan }}"> <br/>
		Tanggal Masuk<input type="date" required="required" name="tgl_awal" value="{{ $s->tgl_awal }}"> <br/>
		Jumlah <input type="number" required="required" name="jumlah_simpanan" value="{{ $s->jumlah_simpanan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>