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
	<input type="hidden" name="IDBuku" value="{{ $p->IDBuku }}"> <br/>
	Judul <input type="text" required="required" name="Judul" value="{{ $p->Judul }}"> <br/>
	Penulis <input type="text" required="required" name="Penulis" value="{{ $p->Penulis }}"> <br/>
    Penerbit <input type="text" required="required" name="Penerbit" value="{{ $p->Penerbit }}"> <br/>
    TahunTerbit <input type="text" required="required" name="TahunTerbit" value="{{ $p->TahunTerbit }}"> <br/>
    JumlahStok <input type="text" required="required" name="JumlahStok" value="{{ $p->JumlahStok }}"> <br/>
    dendabuku <input type="text" required="required" name="dendabuku" value="{{ $p->dendabuku }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>