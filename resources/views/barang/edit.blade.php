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
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $Mahasiswa->nama }}"
                                aria- describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="kelas" name="kelas" class="form-control" id="kelas"
                                value="{{ $Mahasiswa->kelas }}" aria- describedby="kelas">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                                value="{{ $Mahasiswa->jurusan }}" aria- describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">No_Handphone</label>
                            <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone"
                                value="{{ $Mahasiswa->no_handphone }}" aria- describedby="no_handphone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection