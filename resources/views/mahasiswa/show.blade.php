@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mahasiswacrud.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{--$mahasiswa di ambil dari BelajarCRUDController.php yang berasal dari function show dan di dapat dari fungsi compact('mahasiswa')--}}
                {{ $mahasiswa->nama}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{--$mahasiswa di ambil dari BelajarCRUDController.php yang berasal dari function show dan di dapat dari fungsi compact('mahasiswa')--}}
                {{ $mahasiswa->alamat}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan:</strong>
                {{--$mahasiswa di ambil dari BelajarCRUDController.php yang berasal dari function show dan di dapat dari fungsi compact('mahasiswa')--}}
                {{ $mahasiswa->jurusan}}
            </div>
        </div>
    </div>
@endsection
