@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah  Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mahasiswacrud.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {{--$errors Untuk menampilkan Validasi ketika ada yang error--}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'mahasiswacrud.store','method'=>'POST')) !!}
    @include('mahasiswa.Form')
    {!! Form::close() !!}
@endsection
