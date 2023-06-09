@extends('bukusafana.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BUKU SAFANA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bukusafana.create') }}"> Create Daftar BUKU</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>IDBuku</th>
            <th>Judul</th> 
            <th>Penulis</th> 
            <th>Penerbit</th> 
            <th>TahunTerbit</th>         
            <th>JumlahStok</th> 
            <th>Dendabuku</th>   
            <th>spesifikasi</th>
            <
            <th width="280px">Action</th>
        </tr>
        @foreach ($bukusafana as $bukusafana)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bukusafana->IDBuku }}</td>
            <td>{{ $bukusafana->Judul }}</td>
            <td>{{ $bukusafana->Penulis }}</td>
            <td>{{ $bukusafana->Penerbit }}</td>
            <td>{{ $bukusafana->TahunTerbit }}</td>
            <td>{{ $bukusafana->JumlahStok }}</td>
            <td>{{ $bukusafana->Dendabuku }}</td>
            <td>{{ $bukusafana->spesifikasi }}</td>
            <td>
                <form action="{{ route('bukusafana.destroy',$bukusafana->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('bukusafana.show',$bukusafana->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('bukusafana.edit',$bukusafana->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $bukusafana->links() !!}
        
@endsection