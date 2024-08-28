@extends('admin.master')
@section('body')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Settings Module</a></li>
                                    <li class="breadcrumb-item active">All Brand</li>
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
                                    <h3 class="card-title">All Brand Info</h3>
                                    <p class="text-success text-center">{{session('message')}}</p>
                                    <a href="{{ route('brand.create') }}" class="btn btn-primary">Add Brand</a>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>sl</th>
                                                <th>Brand</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($brands as $brand)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$brand->name}}</td>
                                                    <td><img src="{{asset($brand->image)}}" alt="" height="50"/></td>
                                                    <td>{{ $brand->status == 1 ? 'active' : 'Inactive' }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{route('brand.edit', $brand->id)}}" title="Edit" class="btn btn-primary me-2">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        @if($brand->status == 1)
                                                            <a href="{{route('brand.show', $brand->id)}}" class="btn btn-warning me-2">Inactive</a>
                                                        @else
                                                            <a href="{{route('brand.show', $brand->id)}}" class="btn btn-success me-2">Active</a>
                                                        @endif

                                                        <form action="{{route('brand.destroy', $brand->id)}}" method="post">
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
