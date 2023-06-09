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
			<th>IDBuku</th>
			<th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
			<th>TahunTerbit</th>
            <th>JumlahStok</th>
            <th>dendabuku</th>
			<th>Opsi</th>
		</tr>
		@foreach($buku_zano as $b)
		<tr>
			<td>{{ $b->IDBuku }}</td>
			<td>{{ $b->Judul }}</td>
			<td>{{ $b->Penulis }}</td>
			<td>{{ $b->Penerbit }}</td>
			<td>{{ $b->TahunTerbit }}</td>
            <td>{{ $b->JumlahStok }}</td>
            <td>{{ $b->dendabuku }}</td>
			<td>
				<a href="/Saham/edit/{{ $b->Id_Saham }}">Edit</a>
				|
				<a href="/Saham/hapus/{{ $b->Id_Saham }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/tambahSaham">Tambah Saham</a></button>
</body>

</html>

