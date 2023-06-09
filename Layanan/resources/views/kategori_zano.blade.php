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
	<h3 class="h3">
	Buku
	</h3>
<table border="1" class="tabel">
		<tr>
			<th>IDKategori</th>
			<th>Nama Kategori</th>
            <th>Buku</th>
			<th>Opsi</th>
		</tr>
		@foreach($kategori_zano as $p)
		<tr>
			<td>{{ $p->IDKategori }}</td>
			<td>{{ $p->NamaKategori }}</td>
			<tr>
            <td>{{ $p->IDKategori }}</td>
			<td>{{ $p->NamaKategori }}</td>
			<td>{{ $p->IDKategori }}</td>
			@foreach($buku_zano as $u)
				@if($p->IDBuku == $u->IDBuku)
					<td>{{ $u->Judul }}</td>
				@endif
			@endforeach

				<a href="/kategori_zano/edit/{{ $b->IDKategori }}">Edit</a>
				
				<a href="/kategori_zano/hapus/{{ $b->IDKategori }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/tambahkategori_zano">Tambah Buku</a></button>
</body>

</html>

