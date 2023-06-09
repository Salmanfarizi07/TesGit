@extends('bukusafana.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Daftar Barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bukusafana.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IDBuku</strong>
                {{ $bukusafana->IDBuku }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul</strong>
                {{ $bukusafana->Judul }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis</strong>
                {{ $bukusafana->Penulis }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit</strong>
                {{ $bukusafana->Penerbit }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TahunTerbit</strong>
                {{ $bukusafana->TahunTerbit }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JumlahStok</strong>
                {{ $bukusafana->JumlahStok }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DendaBuku</strong>
                {{ $bukusafana->DendaBuku }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $bukusafana->detail }}
            </div>
        </div>
        
@endsection