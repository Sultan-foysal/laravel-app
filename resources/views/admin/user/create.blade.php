@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User Module</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                        <h3 class="card-title">Add New User</h3>
                        <a href="{{ route('user.index') }}" class="btn btn-primary">All User</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">User Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" placeholder="User Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">User Email</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="email" placeholder="User Email" type="email">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">User Password</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="password" placeholder="User Password" type="password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">User Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image" type="file">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Create New User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
