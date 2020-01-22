@extends('layouts_template.home')
@section('sub-title','Post')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="{{ route('post.create') }}" class="btn btn-info">Tambah Post</a><br><br>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tags</th>
                    <th>Creator</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $result => $hasil)
                <tr>
                    <td>{{ $result + $post->firstitem() }}</td>
                    <td>{{ $hasil->judul }}</td>
                    <td>{{ $hasil->category->name }}</td>
                    <td>
                        @foreach ($hasil->tags as $tag)
                            <ul>
                                <span class="badge badge-info">{{ $tag->name }}</span>
                            </ul>
                        @endforeach
                    </td>
                    <td>{{ $hasil->users->name }}</td>
                    <td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width: 100px" alt="thumbnail"></td>
                    <td>
                        <form action="{{ route('post.destroy', $hasil->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $post->links() }}

@endsection
