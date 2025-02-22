@extends('layouts.admin')
@section('title', 'Categories')
@section('main')

    <section class="section">
        <div class="section-header">
            <h1>Categori</h1>
            <div class="section-header-button">
                <a href="{{$_ENV['BASE_URL_ADMIN'] . 'categories/create'}}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Categori</a></div>
                <div class="breadcrumb-item">All Categori</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Categori</h2>
            <p class="section-lead">
                You can manage all posts, such as editing, deleting and more.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Draft <span class="badge badge-primary">1</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pending <span class="badge badge-primary">1</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <select class="form-control selectric">
                                    <option>Action For Selected</option>
                                    <option>Move to Draft</option>
                                    <option>Move to Pending</option>
                                    <option>Delete Pemanently</option>
                                </select>
                            </div>
                            <div class="float-right">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center pt-2">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                       data-checkbox-role="dad" class="custom-control-input"
                                                       id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                    </tr>

                                    @foreach($categori as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                           class="custom-control-input" id="checkbox-2">
                                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><?= $value['name'] ?>
                                                <div class="table-links">
                                                    <a href="{{$_ENV['BASE_URL_ADMIN'] . 'categories/view/' . $value['id']}}">View</a>
                                                    <div class="bullet"></div>
                                                    <a href="{{$_ENV['BASE_URL_ADMIN'] . 'categories/edit/' . $value['id']}}">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="{{$_ENV['BASE_URL_ADMIN'] . "categories/delete/" . $value['id']}}"
                                                       class="text-danger"
                                                       onclick="return confirm('Ban co muon xoa <?= $value['name'] ?> ?')">Delete</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#">Web Developer</a>,
                                                <a href="#">Tutorial</a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image" src="{{$_ENV['ASSETS_ADMIN']}}img/avatar/avatar-5.png"
                                                         class="rounded-circle" width="35" data-toggle="title" title="">
                                                    <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                                </a>
                                            </td>
                                            <td>2018-01-20</td>
                                            <td>
                                                <div class="badge badge-primary">Published</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item {{$page == 1 ? 'disabled' : ''}}">
                                            <a class="page-link"
                                               href="{{ $page > 1 ? $_ENV['BASE_URL_ADMIN'] . 'categories/' . ($page - 1) : $_ENV['BASE_URL_ADMIN'] . '/categori/1' }}"
                                               aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>

                                        @for($i = 1; $i <= $total_page; $i++)
                                            <li class="page-item {{$i == $page ? 'active' : ''}}">
                                                <a class="page-link"
                                                   href="{{$_ENV['BASE_URL_ADMIN'] . 'categories/' . $i}}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="page-item {{$page == $total_page ? 'disabled' : ''}}">
                                            <a class="page-link"
                                               href="{{$_ENV['BASE_URL_ADMIN'] . 'categories/' . ($page == $total_page ? $page : $page + 1)}}"
                                               aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection