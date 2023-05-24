<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pengajuan</title>
</head>
<body>
 
		<h2>Data Pengajuan</h3>
 
	<a href="/pengajuan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pengajuan/input" method="post">
		{{csrf_field()}}
		ID User <input type="number" name="id_user" required="required"> <br/>
		Jenis Pengajuan <input type="text" name="jenis_pengajuan" required="required"> <br/>
		Tanggal Masuk <input type="date" name="tgl_awal" required="required"> <br/>
		Jumlah Pengajuan <input type="number" name="jumlah_pengajuan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
