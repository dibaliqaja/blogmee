@extends('layouts.home')
@section('sub-title','Kategori')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="{{ route('category.create') }}" class="btn btn-info">Tambah Kategori</a><br><br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $result => $hasil)
                <tr>
                    <td>{{ $result + $category->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $hasil->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('category.edit', $hasil->id) }}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $category->links() }}

@endsection
