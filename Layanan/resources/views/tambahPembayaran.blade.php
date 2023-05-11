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
<form action="/Pembayaran/store" method="post">
		{{ csrf_field() }}

		<!--Id_Pembayaran <input type="text" name="Jenis_Pembayaran" required="required"> <br/>
		Id_User <input type="text" name="Desc_Pembayaran" required="required"> <br/>-->
		Jenis_Pembayaran <input type="text" name="Jenis_Pembayaran" required="required"> <br/>
        Metode_Pembayaran <input type="text" name="Metode_Pembayaran" required="required"> <br/>
        Status_Pembayaran <input type="text" name="Status_Pembayaran" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>