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
	Peminjaman
	</h3>
<table border="1" class="tabel">
		<tr>
		<th>Id_Peminjaman</th>
			<th>Id_User</th>
            <th>Jenis_Peminjaman</th>
            <th>Desc_Peminjaman</th>
            <th>Tanggal_Peminjaman</th>
            <th>Jumlah_Peminjaman</th>
            <th>Status_Peminjaman</th>
			<th>Opsi</th>
		</tr>
		@foreach($Peminjaman as $p)
		<tr>
		<td>{{ $p->Id_Peminjaman }}</td>
			<td>{{ $p->Id_User }}</td>
			<td>{{ $p->Jenis_Peminjaman }}</td>
			<td>{{ $p->Desc_Peminjaman }}</td>
            <td>{{ $p->Tanggal_Peminjaman }}</td>
            <td>{{ $p->Jumlah_Peminjaman }}</td>
            <td>{{ $p->Status_Peminjaman }}</td>
			<td>
				<a href="/Peminjaman/edit/{{ $p->Id_Peminjaman }}">Edit</a>
				|
				<a href="/Peminjaman/hapus/{{ $p->Id_Peminjaman }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/tambahPeminjaman">Tambah Peminjaman</a></button>
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
