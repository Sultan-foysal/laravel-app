@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-5  title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Courier Module</a></li>
                        <li class="breadcrumb-item active">Edit Courier</li>
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
                        <h3 class="card-title">Edit Courier</h3>
                        <a href="{{ route('courier.index') }}" class="btn btn-primary"> All Courier</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{route('courier.update', $courier->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Courier Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" value="{{$courier->name}}" placeholder="Enter Your Courier Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Courier Email Address</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="email" value="{{$courier->email}}" placeholder="Enter Your Courier Email Address" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Courier Mobile Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="mobile" value="{{$courier->mobile}}" placeholder="Enter Courier Mobile Number" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Address</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="address" value="{{$courier->address}}" placeholder="Enter address" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Courier Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image" type="file">
                                    <img src="{{asset($courier->image)}}" alt="" height="100"/>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Courier Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

