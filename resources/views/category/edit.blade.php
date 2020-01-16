@extends('layouts.home')
@section('sub-title','Edit Kategori')
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

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="">Kategori</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update Kategori</button>
        </div>
    </form>

@endsection
