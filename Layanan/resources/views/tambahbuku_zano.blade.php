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
<form action="/buku_zano/store" method="post">
		{{ csrf_field() }}

		<!--Id_buku_zano <input type="text" name="Nama_buku_zano" required="required"> <br/>
		Id_User <input type="text" name="Desc_buku_zano" required="required"> <br/>-->
		Nama_buku_zano <input type="text" name="Nama_buku_zano" required="required"> <br/>
        Biaya_buku_zano <input type="text" name="Biaya_buku_zano" required="required"> <br/>
        Jenis_buku_zano <input type="text" name="Jenis_buku_zano" required="required"> <br/>
        Status_buku_zano <input type="text" name="Status_buku_zano" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>