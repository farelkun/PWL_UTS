@extends('layouts')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2 class="text-center">PWL UTS</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            {{-- <form action="{{ route('mahasiswa.search') }}" method="GET"> --}}
                {{-- <div class="row">
                    <div class="col-lg-8">
                        <input type="text" name="keywords" class="form-control" id="keywords" aria-describedby="keywords"
                            placeholder="Masukkan nama mahasiswa">
                    </div>
                    <div class="col-lg-4 pl-0">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form> --}}
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barang as $val)
            <tr>
                <td>{{ $val->kode_barang }}</td>
                <td>{{ $val->nama_barang }}</td>
                <td>{{ $val->kategori_barang }}</td>
                <td>{{ $val->harga }}</td>
                <td>{{ $val->qty }}</td>
                <td>
                    <form action="{{ route('barang.destroy', $val->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('barang.show', $val->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('barang.edit', $val->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="col-12 text-center">
            {{ $barang->links() }}
        </div>
    </div>
@endsection