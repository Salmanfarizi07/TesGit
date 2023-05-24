<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan</title>
</head>
<body>
 
	<h2>Sistem Layanan</h2>
	<h3>Daftar Pengajuan</h3>
 
	<a href="/pengajuan/tambah"> + Tambah Pengajuan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Pengajuan</th>
			<th>ID User</th>
			<th>Jenis Pengajuan</th>
			<th>Tanggal Masuk</th>
			<th>Jumlah Pengajuan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pengajuan as $s)
		<tr>
			<td>{{ $s->id_pengajuan }}</td>
			<td>{{ $s->id_user }}</td>
			<td>{{ $s->jenis_pengajuan }}</td>
			<td>{{ $s->tgl_awal }}</td>
			<td>{{ $s->jumlah_pengajuan }}</td>
			<td>
				<a href="/pengajuan/edit/{{ $s->id_pengajuan }}">Edit</a>
				|
				<a href="/pengajuan/hapus/{{ $s->id_pengajuan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
