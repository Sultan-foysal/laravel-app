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
                                    <li class="breadcrumb-item active">All Product</li>
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
                                    <h3 class="card-title">All Product Info</h3>
                                    <p class="text-success text-center">{{session('message')}}</p>
                                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered table-responsive">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Regular Price</th>
                                                <th>Selling Price</th>
                                                <th>Stock</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->code}}</td>
                                                    <td>{{$product->regular_price}}</td>
                                                    <td>{{$product->selling_price}}</td>
                                                    <td>{{$product->stock_amount}}</td>
                                                    <td><img src="{{asset($product->image)}}" alt="" height="50" width="50"/></td>
                                                    <td class="d-flex">
                                                        <a href="{{route('product.show', $product->id)}}" title="Product Detail" class="btn btn-info me-2">
                                                            <i class="fa fa-bookmark-o"></i>
                                                        </a>
                                                        <a href="{{route('product.edit', $product->id)}}" title="Edit" class="btn btn-primary me-2">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{route('product.destroy', $product->id)}}" method="post">
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
