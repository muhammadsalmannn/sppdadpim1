@extends('admin.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Data Surat Perjalanan</h2>
    </div>
    <div class="container container-fluid">
        <table class="table table-responsive table-primary table-striped">
            <tbody>
                <tr>
                    <th scope="row">Nomor Surat</th>
                    <td>{{ $surats[0]->nomor }}</td>
                </tr>
                <tr>
                    <th scope="row">Maksud Perjalanan</th>
                    <td>{!! $surats[0]->uraian !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <a href="/surat" class="btn btn-danger">Back</a>
    </div>
@endsection
