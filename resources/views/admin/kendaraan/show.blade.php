@extends('admin.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Data Pegawai</h2>
    </div>
    <div class="container container-fluid">
        <table class="table table-responsive table-primary table-striped">
            <tbody>
                <tr>
                    <th scope="row">Kendaraan</th>
                    <td>{{ $kendaraans[0]->nama }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <a href="/kendaraan" class="btn btn-danger">Back</a>
    </div>
@endsection
