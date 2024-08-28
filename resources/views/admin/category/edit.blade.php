@extends('admin.master')
@section('body')

    <div class="main-container container-fluid">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Edit Category Form</h3>
                        <a href="{{ route('category.index') }}" class="btn btn-primary"> All Category</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" value="{{$category->name}}" placeholder="Enter your Category Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Category Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image"  type="file">
                                    <img src="{{asset($category->image)}}" alt="" height="100"/>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update New Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


