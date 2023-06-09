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
				<a href="/buku_zano/edit/{{ $b->IDBuku }}">Edit</a>
				|
				<a href="/buku_zano/hapus/{{ $b->IDBuku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/tambahbuku_zano">Tambah Buku</a></button>
</body>
<style>
		.tabel {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			}

		.tabel thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
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
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}

		.h3 {
			font-weight: bold;
			font-family: sans-serif;
		}

	</style>
</html>

