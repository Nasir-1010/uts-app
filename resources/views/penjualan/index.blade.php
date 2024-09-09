@extends('layouts.app')

@section('heading', 'Data Penjualan')

@section('title', 'Data Penjualan')

@section('content')
    <div class="card-header">
        <a href="{{ route('create-penjualan') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%">
                <thead>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Penjualan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($penjualans as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama_barang }}</td>
                            <td>{{ $data->tanggal_penjualan }}</td>
                            <td>{{ $data->pelanggan }}</td>
                            <td>{{ $data->jumlah }}</td>
                            <td>{{ $data->harga_satuan }}</td>
                            <td>{{ $data->total }}</td>
                            <td>
                            <div class="d-flex">
                                <a href="{{ route('edit-penjualan', [$data->id]) }}" class="btn btn-success mr-2">Edit</a>
                                <form action="{{ route('delete-penjualan', [$data->id]) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Hapus">
                                </form>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
