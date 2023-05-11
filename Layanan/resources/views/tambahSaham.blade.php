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
<form action="/Saham/store" method="post">
		{{ csrf_field() }}

		<!--Id_Saham <input type="text" name="Nama_Saham" required="required"> <br/>
		Id_User <input type="text" name="Desc_Saham" required="required"> <br/>-->
		Nama_Saham <input type="text" name="Nama_Saham" required="required"> <br/>
        Biaya_Saham <input type="text" name="Biaya_Saham" required="required"> <br/>
        Jenis_Saham <input type="text" name="Jenis_Saham" required="required"> <br/>
        Status_Saham <input type="text" name="Status_Saham" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>