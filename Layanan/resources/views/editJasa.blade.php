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
    <h2 class="judul"> Edit Jasa </h2>
    <a href="/Pembayaran" class="kembali">Kembali</a>
@foreach($Jasa as $p)
<form action="/Jasa/update" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="Nama_Jasa ">Nama_Jasa</label>
		<input type="text" required="required" name="Nama_Jasa" id="Nama_Jasa" value="{{ $p->Nama_Jasa }}">
	</div>
	<div class="form-group">
		<label for="Jenis_Jasa">Jenis_Jasa</label>
		<input type="text" required="required" name="Jenis_Jasa" id="Jenis_Jasa" value="{{ $p->Jenis_Jasa }}">
	</div>
	<div class="form-group">
		<label for="Desc_Jasa ">Desc_Jasa</label>
		<input type="text" required="required" name="Desc_jasa" id="Desc_jasa" value="{{ $p->Desc_Jasa }}">
	</div>
    <div class="form-group">
		<label for="Tgl_Pengajuan ">Tgl_Pengajuan</label>
		<input type="text" required="required" name="Tgl_Pengajuan" id="Tgl_pengajuan" value="{{ $p->Tgl_Pengajuan }}">
	</div>
    <div class="form-group">
		<label for="Status_Jasa ">Status_Jasa</label>
		<input type="text" required="required" name="Status_Jasa" id="status_jasa" value="{{ $p->Status_Jasa }}">
	</div>
	<input type="hidden" name="Id_Jasa" value="{{ $p->Id_Jasa }}"> <br/>
	<input type="submit" value="Simpan Data" class="simpan">
</form>
@endforeach
</body>
</html>