@extends('admin.master')
@section('body')

    <div class="main-container container-fluid">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Edit Product Form</h3>
                        <a href="{{ route('product.index') }}" class="btn btn-primary">All Product</a>
                    </div>
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="category_id">
                                        <option value=""> -- Select Category -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @selected($category->id == $product->category_id)> {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Sub Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="sub_category_id">
                                        <option value=""> -- Select sub Category -- </option>
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{$subCategory->id}}" @selected($subCategory->id == $product->sub_category_id)> {{$subCategory->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Brand Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="brand_id">
                                        <option value=""> -- Select Brand -- </option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" @selected($brand->id == $product->brand_id)> {{$brand->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Unit Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="unit_id">
                                        <option value=""> -- Select Unit -- </option>
                                        @foreach($units as $unit)
                                            <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)> {{$unit->code}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" value="{{$product->name}}" name="name" placeholder="Enter Product Name" type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Code</label>
                                <div class="col-md-9">
                                    <input class="form-control" value="{{$product->code}}" name="code" placeholder="Enter Product code " type="text">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Product Color</label>
                                <div class="col-md-9">
                                    <select multiple name="color[]" class="form-control select2-show-search form-select w-100" data-placeholder="Choose one">
                                        <option label="Choose one"></option>
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}" @foreach($product->productColors as $productColor) {{$color->id == $productColor->color_id ? 'selected' : ''}}  @endforeach>{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Product Size</label>
                                <div class="col-md-9">
                                    <select multiple name="size[]" class="form-control select2-show-search form-select w-100" data-placeholder="Choose one">
                                        <option label="Choose one"></option>
                                        @foreach($sizes as $size)
                                            <option value="{{$size->id}}" @foreach($product->productSizes as $productSize) {{$size->id == $productSize->size_id ? 'selected' : ''}}  @endforeach>{{$size->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Meta Title</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="meta_title" placeholder="Enter Meta Title">{{$product->meta_title}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Meta Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description">{{$product->meta_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Product Price</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input class="form-control" name="regular_price" value="{{$product->regular_price}}" placeholder="Product Regular Price " type="number"/>
                                        <input class="form-control" name="selling_price" value="{{$product->selling_price}}" placeholder="Product Selling Price" type="number"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Stock Amount</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="stock_amount" value="{{$product->stock_amount}}" placeholder="Enter Product Stock Amount" type="number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Short Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="short_description">{{$product->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control summernote"  name="long_description">{{$product->long_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image" type="file" accept="image/*"/>
                                    <img src="{{asset($product->image)}}" alt="" height="100"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Others Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="other_image[]" multiple type="file" accept="image/*"/>
                                    @foreach($product->productImages as $productImage)
                                        <img src="{{asset($productImage->image)}}" alt="" height="100"/>
                                    @endforeach
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Product Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
