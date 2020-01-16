@extends('layouts.home')
@section('sub-title','Kategori')
@section('content')

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
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $category->links() }}

@endsection
