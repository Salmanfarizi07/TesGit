<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($Surat as $p)
<form action="/Surat/update" method="post">
	{{ csrf_field() }}
	
    <input type="hidden" name="Id_Surat" value="{{ $p->Id_Surat }}"> <br/>
	Jenis_Surat <input type="text" required="required" name="Jenis_Surat" value="{{ $p->Jenis_Surat }}"> <br/>
	Desc_Surat <input type="text" required="required" name="Desc_Surat" value="{{ $p->Desc_Surat }}"> <br/>
	Jenis_Tabungan <input type="text" required="required" name="Jenis_Tabungan" value="{{ $p->Jenis_Tabungan }}"> <br/>
	Jenis_Simpanan <input type="text" required="required" name="Jenis_Simpanan" value="{{ $p->Jenis_Simpanan }}"> <br/>
    Status <input type="text" required="required" name="Status" value="{{ $p->Status }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>