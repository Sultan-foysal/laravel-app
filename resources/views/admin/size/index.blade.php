@extends('admin.master')
@section('body')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Settings Module</a></li>
                                    <li class="breadcrumb-item active">All Size</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-bottom d-flex justify-content-between">
                                    <h3 class="card-title">All Size Info</h3>
                                    <p class="text-success text-center">{{session('message')}}</p>
                                    <a href="{{ route('size.create') }}" class="btn btn-primary">Add Size</a>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sizes as $size)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$size->name}}</td>
                                                    <td>{{$size->code}}</td>
                                                    <td>{{$size->description}}</td>
                                                    <td class="d-flex">
                                                        <a href="{{route('size.edit', $size->id)}}" title="Edit" class="btn btn-primary me-2">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{route('size.destroy', $size->id)}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..');">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
@endsection
