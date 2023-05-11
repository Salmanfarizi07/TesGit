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
	Saham
	</h3>
<table border="1" class="tabel">
		<tr>
			<th>Id_Saham</th>
			<th>Id_User</th>
            <th>Nama_Saham</th>
            <th>Biaya_Saham</th>
			<th>Jenis_Saham</th>
            <th>Status_Saham</th>
			<th>Opsi</th>
		</tr>
		@foreach($Saham as $p)
		<tr>
			<td>{{ $p->Id_Saham }}</td>
			<td>{{ $p->Id_User }}</td>
			<td>{{ $p->Nama_Saham }}</td>
			<td>{{ $p->Biaya_Saham }}</td>
			<td>{{ $p->Jenis_Saham }}</td>
            <td>{{ $p->Status_Saham }}</td>
			<td>
				<a href="/Saham/edit/{{ $p->Id_Saham }}">Edit</a>
				|
				<a href="/Saham/hapus/{{ $p->Id_Saham }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<button class="tambah"><a href="/tambahSaham">Tambah Saham</a></button>
	<style>.tabel {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

.tabel td,
.tabel th {
  border: 1px solid #ddd;
  padding: 8px;
}

.tabel tr:nth-child(even) {
  background-color: #f2f2f2;
}

.tabel th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.h3 {
  text-align: center;
  margin-top: 50px;
}

.tambah {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  text-decoration: none;
}

.tambah:hover {
  background-color: #2E8B57;
}



	</style>
</body>

</html>

