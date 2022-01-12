@extends('admin.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Data Perjalanan</h2>
    </div>
    <div class="container container-fluid">
        <table class="table table-responsive table-primary table-striped">
            <tbody>
                <tr>
                    <th scope="row">Lama Perjalanan</th>
                    <td>{{ $perjalanan[0]->lama_perjalanan }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Berangkat</th>
                    <td>{{ $perjalanan[0]->tempat_berangkat }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Tujuan</th>
                    <td>{{ $perjalanan[0]->tempat_tujuan }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Berangkat</th>
                    <td>{{ $perjalanan[0]->tanggal_berangkat }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Kembali</th>
                    <td>{{ $perjalanan[0]->tanggal_kembali }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <a href="/perjalanan" class="btn btn-danger">Back</a>
    </div>
@endsection
