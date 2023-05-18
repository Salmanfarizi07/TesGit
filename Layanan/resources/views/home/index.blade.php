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

                <div class="homepage-btn-custom">
                        <a href="/Ladmin" class="btn btn-primary homepage-btn">Admin</a>
                        <a href="/Lsimpanan" class="btn btn-primary homepage-btn">Simpanan</a>
                        <a href="/Pembayaran" class="btn btn-primary homepage-btn">Pembayaran</a>
                    </div>
                    <div class="homepage-btn-row">
                        <a href="/Peminjaman" class="btn btn-primary homepage-btn">Peminjaman</a>
                        <a href="/Jasa" class="btn btn-primary homepage-btn">Pengajuan</a>
                        <a href="/Surat" class="btn btn-primary homepage-btn">Surat</a> 
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