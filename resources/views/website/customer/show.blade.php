@extends('website.master')
@section('body')
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area breadcrumb__style-2 include-bg pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list has-icon">
                           <span class="breadcrumb-icon">
                              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.42393 16H15.5759C15.6884 16 15.7962 15.9584 15.8758 15.8844C15.9553 15.8104 16 15.71 16 15.6054V6.29143C16 6.22989 15.9846 6.1692 15.9549 6.11422C15.9252 6.05923 15.8821 6.01147 15.829 5.97475L8.75305 1.07803C8.67992 1.02736 8.59118 1 8.5 1C8.40882 1 8.32008 1.02736 8.24695 1.07803L1.17098 5.97587C1.11791 6.01259 1.0748 6.06035 1.04511 6.11534C1.01543 6.17033 0.999976 6.23101 1 6.29255V15.6063C1.00027 15.7108 1.04504 15.8109 1.12451 15.8847C1.20398 15.9585 1.31165 16 1.42393 16ZM10.1464 15.2107H6.85241V10.6202H10.1464V15.2107ZM1.84866 6.48977L8.4999 1.88561L15.1517 6.48977V15.2107H10.9946V10.2256C10.9946 10.1209 10.95 10.0206 10.8704 9.94654C10.7909 9.87254 10.683 9.83096 10.5705 9.83096H6.42848C6.316 9.83096 6.20812 9.87254 6.12858 9.94654C6.04904 10.0206 6.00435 10.1209 6.00435 10.2256V15.2107H1.84806L1.84866 6.48977Z" fill="#55585B" stroke="#55585B" stroke-width="0.5"/>
                              </svg>
                           </span>
                                <span><a href="#">Home</a></span>
                                <span><a href="#">Electronics</a></span>
                                <span><a href="#">Computers & Tablets</a></span>
                                <span>Samsung galaxy A7 tablet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- product details area start -->
        <section class="tp-product-details-area">
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
        </section>
        <!-- product details area end -->




    </main>
@endsection

