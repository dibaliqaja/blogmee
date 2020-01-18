@extends('layouts_template.home')
@section('sub-title','Tambah Post')
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

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="judul" id="">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control select2" name="category_id" id="">
                <option value="" holder>Pilih Kategori</option>
                @foreach ($category as $result)
                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Tag</label>
            <select class="form-control select2" multiple="" name="tags[]" id="">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Konten</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" class="form-control-file" name="gambar" id="">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Simpan Post</button>
        </div>
    </form>

@endsection
