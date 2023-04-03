<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Tabel Data User Layanan</h3>
                             
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!--<a href="{{ route('user.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>-->
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">id_user</th>
                                <th scope="col">username</th>
                                <th scope="col">no_telp</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">status_user</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                            @forelse ($user as $item)
            <tr>
                <td>{{ $item->id_user }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->no_telp }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->status_user }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $item->id_user) }}" method="POST">
                        <!--<a href="{{ route('user.show', $item->id_user) }}" class="btn btn-sm btn-dark">SHOW</a>-->
                        <a href="{{ route('user.edit', $item->id_user) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">Data Post belum Tersedia.</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $user->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>