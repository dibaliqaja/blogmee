@extends('layouts.home')
@section('sub-title','Tag')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="{{ route('tag.create') }}" class="btn btn-info">Tambah Tag</a><br><br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tag</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tag as $result => $hasil)
                <tr>
                    <td>{{ $result + $tag->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>
                        <form action="{{ route('tag.destroy', $hasil->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('tag.edit', $hasil->id) }}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $tag->links() }}

@endsection
