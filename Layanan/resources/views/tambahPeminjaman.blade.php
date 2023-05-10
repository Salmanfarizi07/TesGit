<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/Peminjaman/store" method="post">
		{{ csrf_field() }}

		<!--Id_Peminjaman <input type="text" name="Jenis_Peminjaman" required="required"> <br/>
		Id_User <input type="text" name="Desc_PPeminjaman" required="required"> <br/>-->
		Jenis_Peminjaman <input type="text" name="Jenis_Peminjaman" required="required"> <br/>
        Desc_Peminjaman <input type="text" name="Desc_Peminjaman" required="required"> <br/>
        Tanggal_Peminjaman <input type="text" name="Tanggal_Peminjaman" required="required"> <br/>
        Jumlah_Peminjaman <input type="text" name="Jumlah_Peminjaman" required="required"> <br/>
        Status_Pembayaran <input type="text" name="Status_Pembayaran" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>
