<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pengajuan</title>
</head>
<body>

	<h2>Edit Pengajuan</h3>
 
	<a href="/pengajuan" > Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pengajuan as $s)
	<form action="/pengajuan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->id_pengajuan }}"> <br/>
		Jenis Pengajuan <input type="text" required="required" name="jenis_pengajuan" value="{{ $s->jenis_pengajuan }}"> <br/>
		Tanggal Masuk<input type="date" required="required" name="tgl_awal" value="{{ $s->tgl_awal }}"> <br/>
		Jumlah <input type="number" required="required" name="jumlah_pengajuan" value="{{ $s->jumlah_pengajuan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>
