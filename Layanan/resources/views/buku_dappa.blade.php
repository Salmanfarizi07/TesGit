@include('layouts.app-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Dappa</title>
</head>
<body>
	<h3 class="my-4">Buku</h3>
<table border="1" class="tabel">
		<tr>
			<th>ID Buku</th>
			<th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
			<th>Tahun Terbit</th>
            <th>Jumlah Stok</th>
            <th>Denda Buku</th>
			<th>Opsi</th>
		</tr>
		@foreach($buku_dappa as $b)
		<tr>
			<td>{{ $b->IDBuku }}</td>
			<td>{{ $b->Judul }}</td>
			<td>{{ $b->Penulis }}</td>
			<td>{{ $b->Penerbit }}</td>
			<td>{{ $b->TahunTerbit }}</td>
            <td>{{ $b->JumlahStok }}</td>
            <td>{{ $b->dendabuku }}</td>
			<td>
				<a href="/buku_dappa/edit/{{ $b->IDBuku }}">Edit</a>
				|
				<a href="/buku_dappa/hapus/{{ $b->IDBuku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/tambahbuku_dappa">Tambah Buku</a></button>
</body>
<style>
		.tabel {
			position: center;
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			}

		.tabel thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: center;
			}

		.tabel th,
		.tabel td {
			padding: 12px 15px;
		}

		.tabel tbody tr {
    		border-bottom: 1px solid #dddddd;
		}

		.tabel tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.tabel tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}

		.tabel tbody tr.active-row {
			font-weight: bold;
			color: #009879;
		}
		
		.tambah {
			background-color: #91c495; 
			border: none;
			color: white;
			padding: 10px 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 12px;
		}

		.h3 {
			font-weight: bold;
			font-family: sans-serif;
		}

	</style>
</html>

