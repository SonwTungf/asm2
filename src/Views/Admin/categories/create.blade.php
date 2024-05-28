@extends('layouts.admin')
@section('title', 'Create Category')
@section('main')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{$_ENV['BASE_URL_ADMIN'] . 'categories'}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Categori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{$_ENV['BASE_URL_ADMIN']}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{$_ENV['BASE_URL_ADMIN'] . 'categories'}}">Categori</a></div>
                <div class="breadcrumb-item">Create New Categori</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create New Categori</h2>
            <p class="section-lead">
                On this page you can create a new categori and fill in all fields.
            </p>

            <form class="row" action="" method="post">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write Your Categori</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" name="submit">Create Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

