@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Settings Module</a></li>
                        <li class="breadcrumb-item active">Add Size</li>
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
                        <h3 class="card-title">Add Size Form</h3>
                        <a href="{{ route('size.index') }}" class="btn btn-primary"> All Size</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('size.store') }}" method="post">
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Size Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" placeholder="Enter Size Name" type="text"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Size Code</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="code" placeholder="Enter Size Code" type="text"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Size Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" placeholder="Enter Size Description"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Create New Size</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
