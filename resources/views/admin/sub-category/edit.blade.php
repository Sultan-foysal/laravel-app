@extends('admin.master')
@section('body')

    <div class="main-container container-fluid">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Add Sub Category Form</h3>
                        <a href="{{ route('sub-category.index') }}" class="btn btn-primary"> All Sub Category</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('sub-category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" placeholder="Enter your Category Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Sub Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" placeholder="Enter your Sub Category Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Sub Category Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image" type="file">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Create New Sub Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


