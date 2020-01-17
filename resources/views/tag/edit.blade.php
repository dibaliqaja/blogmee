@extends('layouts.home')
@section('sub-title','Edit Tag')
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

    <form action="{{ route('tag.update', $tag->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="">Tag</label>
            <input type="text" class="form-control" name="name" value="{{ $tag->name }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update Tag</button>
        </div>
    </form>

@endsection
