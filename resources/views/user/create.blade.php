@extends('layouts_template.home')
@section('sub-title','Tambah User')
@section('content')

    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama User</label>
            <input type="text" class="form-control" name="name" id="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Simpan User</button>
        </div>
    </form>

@endsection
