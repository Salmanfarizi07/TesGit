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
<form action="/kategori_zano/store" method="post">
		{{ csrf_field() }}

		<!--Id_kategori_zano <input type="text" name="Nama_kategori_zano" required="required"> <br/>
		Id_User <input type="text" name="Desc_kategori_zano" required="required"> <br/>-->
		Judul <input type="text" name="Judul" required="required"> <br/>
        Penulis <input type="text" name="Penulis" required="required"> <br/>
        Penerbit <input type="text" name="Penerbit" required="required"> <br/>
        TahunTerbit <input type="text" name="TahunTerbit" required="required"> <br/>
        JumlahStok <input type="text" name="JumlahStok" required="required"> <br/>
        dendabuku <input type="text" name="dendabuku" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>