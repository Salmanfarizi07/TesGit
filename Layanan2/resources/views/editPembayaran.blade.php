<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($Pembayaran as $p)
<form action="/Pembayaran/update" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="Id_Pembayaran" value="{{ $p->Id_Pembayaran }}"> <br/>
	Jenis_Pembayaran <input type="text" required="required" name="Jenis_Pembayaran" value="{{ $p->Jenis_Pembayaran }}"> <br/>
	Metode_Pembayaran <input type="text" required="required" name="Metode_Pembayaran" value="{{ $p->Metode_Pembayaran }}"> <br/>
    Status_Pembayaran <input type="text" required="required" name="Status_Pembayaran" value="{{ $p->Status_Pembayaran }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>