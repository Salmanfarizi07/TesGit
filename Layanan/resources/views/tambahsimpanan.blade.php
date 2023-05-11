@include('layouts.app-master')
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Simpanan</title>
</head>
<body>
 
		<h2>Data Simpanan</h3>
 
	<a href="/simpanan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/simpanan/input" method="post">
		{{csrf_field()}}
		ID User <input type="number" name="id_user" required="required"> <br/>
		Jenis Simpanan <input type="text" name="jenis_simpanan" required="required"> <br/>
		Tanggal Masuk <input type="date" name="tgl_awal" required="required"> <br/>
		Jumlah Simpanan <input type="number" name="jumlah_simpanan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>