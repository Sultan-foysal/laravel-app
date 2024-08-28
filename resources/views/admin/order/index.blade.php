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
                                    <li class="breadcrumb-item"><a href="#">Order Module</a></li>
                                    <li class="breadcrumb-item active">All Order</li>
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
                                    <h3 class="card-title">All Order Info</h3>
                                    <p class="text-success text-center">{{session('message')}}</p>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Customer Info</th>
                                                <th>Order Date</th>
                                                <th>Order Total</th>
                                                <th>Order Status</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$order->customer->name}} <br/> {{$order->customer->mobile}}</td>
                                                    <td>{{$order->order_date}}</td>
                                                    <td>{{$order->order_total}}</td>
                                                    <td>{{$order->order_status}}</td>
                                                    <td>{{$order->payment_status}}</td>
                                                    <td class="d-flex">
                                                        <a href="{{route('order.detail', $order->id)}}" title="Order Detail" class="btn btn-info me-2">
                                                            <i class="fa fa-bookmark-o"></i>
                                                        </a>
                                                        <a href="{{route('order.edit', $order->id)}}" title="Order Edit" class="btn btn-primary me-2 {{$order->order_status == 'Complete' ? 'disabled' : ''}}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
{{--                                                        <a href="{{route('order.invoice', $order->id)}}" title="Order Invoice" class="btn btn-success me-2">--}}
{{--                                                            <i class="fa fa-book"></i>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="{{route('order.download-invoice', $order->id)}}" target="_blank" title="Download Invoice" class="btn btn-secondary me-2">--}}
{{--                                                            <i class="fa fa-download"></i>--}}
{{--                                                        </a>--}}
                                                        <form action="{{route('order.destroy', $order->id)}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger {{$order->order_status == 'Cancel' ? ' ' : 'disabled'}}" onclick="return confirm('Are you sure to delete this..');">
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
