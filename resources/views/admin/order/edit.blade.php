@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-5  title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Order Module</a></li>
                        <li class="breadcrumb-item active">Edit Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container container-fluid">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Edit Order</h3>
                        <a href="{{ route('order') }}" class="btn btn-primary"> All Order</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Order Total</label>
                                <div class="col-md-9">
                                    <input class="form-control" value="{{$order->order_total}}" readonly type="text"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Customer Info</label>
                                <div class="col-md-9">
                                    <input class="form-control" value="{{$order->customer->name.' ( '.$order->customer->mobile .' ) '}}" readonly type="text"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Delivery Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Select Courier</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="courier_id">
                                        <option value=""> -- Select Courier -- </option>
                                        @foreach($couriers as $courier)
                                            <option value="{{ $courier->id }}" @selected($order->courier_id == $courier->id)>
                                                {{ $courier->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Order Status</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="order_status">
                                        <option value=""> -- Select Order Status -- </option>
                                        <option value="Pending" @selected($order->order_status == 'Pending')>Pending</option>
                                        <option value="Processing" @selected($order->order_status == 'Processing')>Processing</option>
                                        <option value="Complete" @selected($order->order_status == 'Complete')>Complete</option>
                                        <option value="Cancel" @selected($order->order_status == 'Cancel')>Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Order Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


