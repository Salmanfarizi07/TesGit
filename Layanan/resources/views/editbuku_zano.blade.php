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
@foreach($buku_zano as $p)
<form action="/buku_zano/update" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="Id_buku_zano" value="{{ $p->Id_buku_zano }}"> <br/>
	Nama_buku_zano <input type="text" required="required" name="Nama_buku_zano" value="{{ $p->Nama_buku_zano }}"> <br/>
	Biaya_buku_zano <input type="text" required="required" name="Biaya_buku_zano" value="{{ $p->Biaya_buku_zano }}"> <br/>
    Jenis_buku_zano <input type="text" required="required" name="Jenis_buku_zano" value="{{ $p->Jenis_buku_zano }}"> <br/>
    Status_buku_zano <input type="text" required="required" name="Status_buku_zano" value="{{ $p->Status_buku_zano }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>