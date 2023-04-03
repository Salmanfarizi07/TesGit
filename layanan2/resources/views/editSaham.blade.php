<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($Saham as $p)
<form action="/Saham/update" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="Id_Saham" value="{{ $p->Id_Saham }}"> <br/>
	Nama_Saham <input type="text" required="required" name="Nama_Saham" value="{{ $p->Nama_Saham }}"> <br/>
	Biaya_Saham <input type="text" required="required" name="Biaya_Saham" value="{{ $p->Biaya_Saham }}"> <br/>
    Jenis_Saham <input type="text" required="required" name="Jenis_Saham" value="{{ $p->Jenis_Saham }}"> <br/>
    Status_Saham <input type="text" required="required" name="Status_Saham" value="{{ $p->Status_Saham }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>