<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ShofyController extends Controller
{
    public function index()
    {
        return view('website.home.index',['products' => Product::where('status',1)->get()]);
    }

    public function product($id)
    {
        return view('website.product.index',['products' => Product::where('category_id', $id)->latest()->get()]);
    }

    public function shop()
    {
        return view('website.product.shop',['products' => Product::all()]);
    }

    public function subCategoryProduct($id)
    {
        return view('website.product.index', ['products' => Product::where('sub_category_id', $id)->latest()->get()]);
    }

    public function productDetail($id, $slug)
    {
        return view('website.product.details',[
            'product'        => Product::where('slug',$slug)->first(),
            'productImages'  => ProductImage::where('product_id',$id)->get(),
        ]);
    }

    public function cart()
    {
        return view('website.cart.index');
    }

    public function checkout()
    {
        return view('website.checkout.index');
    }
}
