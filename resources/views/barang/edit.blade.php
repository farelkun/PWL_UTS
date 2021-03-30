@extends('layouts')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Barang
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('barang.update', $barang->id) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" name="kode_barang" class="form-control" id="nim" value="{{ $barang->kode_barang }}"
                                aria- describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_bara">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}"
                                aria- describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori Barang</label>
                            <input type="kategori_barang" name="kategori_barang" class="form-control" id="kategori_barang"
                                value="{{ $barang->kategori_barang }}" aria- describedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" class="form-control" id="harga"
                                value="{{ $barang->harga }}" aria- describedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="qty">QTY</label>
                            <input type="qty" name="qty" class="form-control" id="qty"
                                value="{{ $barang->qty }}" aria- describedby="qty">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection