@extends('layouts.app')

@section('heading', 'Ubah Data Penjualan')

@section('title', 'Ubah Data Penjualan')

@section('content')
<div class="card-body">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('update-penjualan', [$penjualanBarang->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $penjualanBarang->nama_barang }}">
        </div>
        <div class="form-group">
            <label for="tanggal_penjualan">Tanggal Penjualan</label>
            <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ $penjualanBarang->tanggal_penjualan }}">
        </div>
        <div class="form-group">
            <label for="pelanggan">Pelanggan</label>
            <input type="text" class="form-control" id="pelanggan" name="pelanggan" value="{{ $penjualanBarang->pelanggan }}">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" value="{{ $penjualanBarang->jumlah }}">
        </div>
        <div class="form-group">
            <label for="harga_satuan">Harga Satuan</label>
            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" min="1" value="{{ $penjualanBarang->harga_satuan }}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
        <a href="{{ route('list-penjualan') }}" type="submit" class="btn btn-danger mt-2">Kembali</a>
    </form>
</div>
@endsection