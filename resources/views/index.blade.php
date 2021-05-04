@extends('mahasiswas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <H2>Data Mahasiswa</H2>
            </div>
            <div class="pull-right">
                <a class="btn btn-sucess" href="{{ route('mahasiswas.create') }}"> Tambah Mahasiswa</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <form action="{{ url()->current() }}">
            <div class="pull-right">
                <H6>Nama    &nbsp;</H6>
                <input class="typehead form-control" type="text" name="nama">
                <button type="submit" class="btn btn-primary">
                    Cari
                </button>
                <a class="btn btn-sucess" href="{{ route('mahasiswas.index') }}">reset</a>
            </div>
            </form>
        </div>
    </div>

    @if (message = Session::get('sucess'))
        <div class="alert alert-sucess">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="thread-dark">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        </thread>
        @foreach ($mahasiswas as @karyawans)
        <tr>
            <td>{{ $karyawans->id }}</td>
            <td>{{ $karyawans->nim }}</td>
            <td>{{ $karyawans->nama }}</td>
            <td>{{ $karyawans->email }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy',$karyawans->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $karwayans['id']) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('apakah data yakin dihapus?')" class="btn btn-primary">
            </form>
        </td>
        </tr>
        @endforeach

        </table>
            {!! $mahasiswas->links() !!}
