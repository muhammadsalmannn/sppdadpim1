@extends('admin.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Data Pangkat</h2>
    </div>
    <div class="container container-fluid">
        <table class="table table-responsive table-primary table-striped">
            <tbody>
                <tr>
                    <th scope="row">Pangkat</th>
                    <td>{{ $pangkats[0]->nama }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <a href="/pegawai" class="btn btn-danger">Back</a>
    </div>
@endsection
