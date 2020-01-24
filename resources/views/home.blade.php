@extends('layouts_template.home')

@section('content')

<div class="section-header">
    <h1>Dashboard</h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-file-signature"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Posts</h4>
                </div>
                <div class="card-body">
                    {{ DB::table('posts')->count() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-list-alt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Category</h4>
                </div>
                <div class="card-body">
                    {{ DB::table('category')->count() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-tag"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Tags</h4>
                </div>
                <div class="card-body">
                    {{ DB::table('tags')->count() }}
                </div>
            </div>
        </div>
    </div>

@endsection
