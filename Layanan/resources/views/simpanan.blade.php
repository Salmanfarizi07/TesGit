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
	Simpanan
	</h3>
<table border="1" class="tabel">
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
			<td>
				<a href="/simpanan/edit/{{ $s->id_simpanan }}">Edit</a>
				|
				<a href="/simpanan/hapus/{{ $s->id_simpanan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/simpanan/tambah">Tambah Peminjaman</a></button>
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
</body>

</html>
