<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<button><a href="/tambah">Tambah</a></button>
<table border="1">
		<tr>
			<th>Id_Surat</th>
			<th>Id_User</th>
            <th>Jenis_Surat</th>
            <th>Desc_Surat</th>
            <th>Jenis_Tabungan</th>
            <th>Jenis_Simpanan</th>
            <th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($Surat as $p)
		<tr>
			<td>{{ $p->Id_Surat }}</td>
			<td>{{ $p->Id_User }}</td>
			<td>{{ $p->Jenis_Surat }}</td>
			<td>{{ $p->Desc_Surat }}</td>
            <td>{{ $p->Jenis_Tabungan }}</td>
            <td>{{ $p->Jenis_Simpanan }}</td>
            <td>{{ $p->Status }}</td>
			<td>
				<a href="/Surat/edit/{{ $p->Id_Surat }}">Edit</a>
				|
				<a href="/Surat/hapus/{{ $p->Id_Surat }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>