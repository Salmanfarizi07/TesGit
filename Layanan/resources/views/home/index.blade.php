@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container">
            <h1 class="display-4">Layanan Koperasi Mahasiswa</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="container text-center">
                <div class="text-center">
                    <style>
                        .btn-custom {
                            font-size: 24px;
                            padding: 12px 24px;
                            margin-right: 10px;
                            margin-bottom: 10px;
                        }
                        .btn-row {
                            display: flex;
                            justify-content: center;
                        }
                    </style>

                    <div class="btn-row">
                        <a href="{{ route('user.index') }}" class="btn btn-primary btn-custom">User</a>
                        <a href="/simpanan" class="btn btn-primary btn-custom">Simpanan</a>
                        <a href="/Pembayaran" class="btn btn-primary btn-custom">Pembayaran</a>
                    </div>
                    <div class="btn-row">
                        <a href="/Peminjaman" class="btn btn-primary btn-custom">Peminjaman</a>
                        <a href="/Jasa" class="btn btn-primary btn-custom">Pengajuan</a>
                        <a href="/Surat" class="btn btn-primary btn-custom">Surat</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endauth

    @guest
    <h1>Layanan Koperasi Mahasiswa</h1>
    <p class="lead">Register atau Login untuk menampilkan homepage Layanan Koperasi Mahasiswa.</p>
    @endguest
</div>

@endsection