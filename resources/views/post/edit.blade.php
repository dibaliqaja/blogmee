@extends('layouts_template.home')
@section('sub-title','Edit Post')
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

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="judul" id="" value="{{ $post->judul }}">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control select2" name="category_id" id="">
                @foreach ($category as $result)
                <option value="{{ $result->id }}"
                    @if ($result->id == $post->category_id)
                        selected
                    @endif
                >{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Tag</label>
            <select class="form-control select2" multiple="" name="tags[]" id="">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}"
                    @foreach($post->tags as $item)
                        @if ($tag->id == $item->id)
                            selected
                        @endif
                    @endforeach
                >{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Konten</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" class="form-control-file" name="gambar" id="" value="{{ $post->gambar }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update Post</button>
        </div>
    </form>

@endsection
