<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($Peminjaman as $p)
<form action="/Peminjaman/update" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="Id_Peminjaman" value="{{ $p->Id_Peminjaman }}"> <br/>
	Jenis_Peminjaman <input type="text" required="required" name="Jenis_Peminjaman" value="{{ $p->Jenis_Peminjaman }}"> <br/>
	Desc_Peminjaman <input type="text" required="required" name="Desc_Peminjaman" value="{{ $p->Desc_Peminjaman }}"> <br/>
    Tanggal_Peminjaman <input type="text" required="required" name="Tanggal_Peminjaman" value="{{ $p->Taggal_Peminjaman }}"> <br/>
    Jumlah_Peminjaman <input type="text" required="required" name="Jumlah_Peminjaman" value="{{ $p->Jumlah_Peminjaman }}"> <br/>
    Status_Peminjaman <input type="text" required="required" name="Status_Peminjaman" value="{{ $p->Status_Peminjaman }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>