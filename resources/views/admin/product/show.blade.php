@extends('admin.master')
@section('body')

    <div class="main-container container-fluid">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between">
                        <h3 class="card-title">Product Detail Info</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <tr>
                                    <th>Product ID</th>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Code</th>
                                    <td>{{$product->code}}</td>
                                </tr>
                                <tr>
                                    <th>Product Category</th>
                                    <td>{{$product->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Sub Category</th>
                                    <td>{{$product->subCategory->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Brand</th>
                                    <td>{{$product->brand->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Unit</th>
                                    <td>{{$product->unit->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Color</th>
                                    <td>
                                        @foreach($product->productColors as $productColor)
                                            {{$productColor->color->name}} ,
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Size</th>
                                    <td>
                                        @foreach($product->productSizes as $productSize)
                                            {{$productSize->size->name}} ,
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Meta Title</th>
                                    <td>{{$product->meta_title}}</td>
                                </tr>
                                <tr>
                                    <th>Meta Description</th>
                                    <td>{{$product->meta_description}}</td>
                                </tr>
                                <tr>
                                    <th>Regular Price</th>
                                    <td>{{$product->regular_price}}</td>
                                </tr>
                                <tr>
                                    <th>Selling Price</th>
                                    <td>{{$product->selling_price}}</td>
                                </tr>
                                <tr>
                                    <th>Short Description</th>
                                    <td>{{$product->short_description}}</td>
                                </tr>
                                <tr>
                                    <th>Long Description</th>
                                    <td>{!! $product->long_description !!}</td>
                                </tr>
                                <tr>
                                    <th>Stock Amount</th>
                                    <td>{{$product->stock_amount}}</td>
                                </tr>
                                <tr>
                                    <th>Total View</th>
                                    <td>{{$product->hit_count}}</td>
                                </tr>
                                <tr>
                                    <th>Total Sales</th>
                                    <td>{{$product->sales_count}}</td>
                                </tr>
                                <tr>
                                    <th>Featured Status</th>
                                    <td>{{$product->featured_status == 0 ? 'No Featured' : 'Featured'}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{asset($product->image)}}" alt="" height="180"/></td>
                                </tr>
                                <tr>
                                    <th>Other Image</th>
                                    <td>
                                        @foreach($product->productImages as $productImage)
                                        <img src="{{asset($productImage->image)}}" alt="" height="180"/>
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
