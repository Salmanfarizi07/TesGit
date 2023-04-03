<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/Jasa/store" method="post">
		{{ csrf_field() }}

		<!--Id_Jasa <input type="text" name="Nama_Jasa" required="required"> <br/>
		Id_User <input type="text" name="Desc_Jasa" required="required"> <br/>-->
		Nama_Jasa <input type="text" name="Nama_Jasa" required="required"> <br/>
        Jenis_Jasa <input type="text" name="Jenis_Jasa" required="required"> <br/>
        Desc_Jasa <input type="text" name="Desc_Jasa" required="required"> <br/>
        Tgl_Pengajuan <input type="text" name="Tgl_Pengajuan" required="required"> <br/>
        Status_Jasa <input type="text" name="Status_Jasa" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>