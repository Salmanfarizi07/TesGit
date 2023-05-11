@include('layouts.app-master')
<!DOCTYPE html>
<html>
<head>
	<title>Simpanan</title>
</head>
<body>
 
	<h2>Sistem Layanan</h2>
	<h3>Daftar Simpanan</h3>
 
	<a href="/simpanan/tambah"> + Tambah Simpanan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Simpanan</th>
			<th>ID User</th>
			<th>Jenis Simpanan</th>
			<th>Tanggal Masuk</th>
			<th>Jumlah Simpanan</th>
			<th>Opsi</th>
		</tr>
		@foreach($simpanan as $s)
		<tr>
			<td>{{ $s->id_simpanan }}</td>
			<td>{{ $s->id_user }}</td>
			<td>{{ $s->jenis_simpanan }}</td>
			<td>{{ $s->tgl_awal }}</td>
			<td>{{ $s->jumlah_simpanan }}</td>
			<td>
				<a href="/simpanan/edit/{{ $s->id_simpanan }}">Edit</a>
				|
				<a href="/simpanan/hapus/{{ $s->id_simpanan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>