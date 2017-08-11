@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mahasiswa CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mahasiswacrud.create') }}"> Create Mahasiswa</a>
                {{--href="{{ route('mahasiswacrud.create') }}" file ini di dapat dari folder routes/web.php yang ada didalam route::resource--}}
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{--// $message untuk menampilkan pesan dari BelajarCRUDController.php yang terdiri dari pesan berhasil maupun error--}}
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($mahasiswa as $field)
            {{--$mahasiswa di ambil dari BelajarCRUDController.php yang berasal dari function index dan di dapat dari fungsi compact('mahasiswa')--}}
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $field->nama}}</td>
                <td>{{ $field->alamat}}</td>
                <td>{{ $field->jurusan}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('mahasiswacrud.show',$field->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswacrud.edit',$field->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['mahasiswacrud.destroy', $field->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $mahasiswa->render() !!}
@endsection
