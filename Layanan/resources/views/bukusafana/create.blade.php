<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('bukusafana.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">IDBuku</label>
                                <input type="text" class="form-control @error('IDBuku') is-invalid @enderror" name="IDBuku" value="{{ old('IDBuku') }}" placeholder="Masukkan ID">
                            
                                <!-- error message untuk title -->
                                @error('IDBuku')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Judul</label>
                                <input type="text" class="form-control @error('Judul') is-invalid @enderror" name="Judul" value="{{ old('Judul') }}" placeholder="Masukkan judul">
                            
                                <!-- error message untuk title -->
                                @error('Judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Penulis</label>
                                <input type="text" class="form-control @error('Penulis') is-invalid @enderror" name="Penulis" value="{{ old('Penulis') }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('Penulis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Penerbit</label>
                                <input type="text" class="form-control @error('Penerbit') is-invalid @enderror" name="Penerbit" value="{{ old('Penerbit') }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('Penerbit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TahunTerbit</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="TahunTerbit" value="{{ old('TahunTerbit') }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('TahunTerbit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JumlahStok</label>
                                <input type="text" class="form-control @error('JumlahStok') is-invalid @enderror" name="stok" value="{{ old('JumlahStok') }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('JumlahStok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DendaBuku</label>
                                <input type="text" class="form-control @error('DendaBuku') is-invalid @enderror" name="DendaBuku" value="{{ old('DendaBuku') }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('DendaBuku')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>