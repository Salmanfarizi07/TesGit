<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/Surat/store" method="post">
		{{ csrf_field() }}

		Jenis_Surat <input type="text" name="Jenis_Surat" required="required"> <br/>
		Desc_Surat <input type="text" name="Desc_Surat" required="required"> <br/>
		Jenis_Tabungan <input type="text" name="Jenis_Tabungan" required="required"> <br/>
        Jenis_Simpanan <input type="text" name="Jenis_Simpanan" required="required"> <br/>
        Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>