@extends('admin.layouts.app')

@section('container')
    @if (session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-center">
        <a href="/perjalanan/create" class="btn btn-success mb-3 me-lg-3"><i class="far fa-calendar-plus"></i></a>
        {{-- <a href="/perjalanan/cetak" class="btn btn-dark mb-3" target="_blank"><i class="mdi mdi-printer"></i></a> --}}
    </div>
    <div class="container container-fluid">
        <table class="table table-responsive table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Lama Perjalanan</th>
                    <th scope="col">Tempat Berangkat</th>
                    <th scope="col">Tempat Tujuan</th>
                    <th scope="col">Tanggal Berangkat</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perjalanans as $perjalanan)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $perjalanan->kendaraan->nama }}</td>
                        <td>{{ $perjalanan->lama_perjalanan }} Hari</td>
                        <td>{{ $perjalanan->tempat_berangkat }}</td>
                        <td>{{ $perjalanan->tempat_tujuan }}</td>
                        <td>{{ $perjalanan->tanggal_berangkat }}</td>
                        <td>{{ $perjalanan->tanggal_kembali }}</td>
                        <td>
                            <a href="/perjalanan/{{ $perjalanan->id }}" class="btn btn-info"><i
                                    class="fas fa-eye"></i></a>|
                            <a href="/perjalanan/{{ $perjalanan->id }}/edit" class="btn btn-warning"><i
                                    class="fas fa-table"></i></a>|
                            <form action="/perjalanan/{{ $perjalanan->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="confirm('Are you sure?')"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
