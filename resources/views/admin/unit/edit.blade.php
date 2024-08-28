@extends('admin.master')
@section('body')

    <div class="main-container container-fluid">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Edit Unit Form</h3>
                        <a href="{{ route('unit.index') }}" class="btn btn-primary"> All Unit</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('unit.update', $unit->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Unit Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" value="{{$unit->name}}" placeholder="Enter Unit Name" type="text"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Unit Code</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="code" value="{{$unit->code}}" placeholder="Enter Unit Code" type="text"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Unit Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" placeholder="Enter Unit Description">{{$unit->description}}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Unit Info</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
