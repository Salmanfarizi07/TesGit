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
@foreach($Jasa as $p)
<form action="/Jasa/update" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="Id_Jasa" value="{{ $p->Id_Jasa }}"> <br/>
	Nama_Jasa <input type="text" required="required" name="Nama_Jasa" value="{{ $p->Nama_Jasa }}"> <br/>
	Jenis_Jasa <input type="text" required="required" name="Jenis_Jasa" value="{{ $p->Jenis_Jasa }}"> <br/>
    Desc_Jasa <input type="text" required="required" name="Desc_Jasa" value="{{ $p->Desc_Jasa }}"> <br/>
    Tgl_Pengajuan <input type="text" required="required" name="Tgl_Pengajuan" value="{{ $p->Tgl_Pengajuan }}"> <br/>
    Status_Jasa <input type="text" required="required" name="Status_Jasa" value="{{ $p->Status_Jasa }}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>