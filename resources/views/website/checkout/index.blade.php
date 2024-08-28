@extends('website.master')
@section('body')
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-95 pb-50" data-bg-color="#EFF1F5">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">Checkout</h3>
                            <div class="breadcrumb__list">
                                <span><a href="#">Home</a></span>
                                <span>Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- checkout area start -->
        <section class="tp-checkout-area pb-120" data-bg-color="#EFF1F5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-checkout-verify">
                            <div class="tp-checkout-verify-item">
                                <p class="tp-checkout-verify-reveal">Returning customer? <button type="button" class="tp-checkout-login-form-reveal-btn">Click here to login</button></p>

                                <div id="tpReturnCustomerLoginForm" class="tp-return-customer">
                                    <form action="#">

                                        <div class="tp-return-customer-input">
                                            <label>Email</label>
                                            <input type="text" placeholder="Your Email">
                                        </div>
                                        <div class="tp-return-customer-input">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password">
                                        </div>

                                        <div class="tp-return-customer-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                            <div class="tp-return-customer-remeber">
                                                <input id="remeber" type="checkbox">
                                                <label for="remeber">Remember me</label>
                                            </div>
                                            <div class="tp-return-customer-forgot">
                                                <a href="forgot.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tp-checkout-verify-item">
                                <p class="tp-checkout-verify-reveal">Have a coupon? <button type="button" class="tp-checkout-coupon-form-reveal-btn">Click here to enter your code</button></p>

                                <div id="tpCheckoutCouponForm" class="tp-return-customer">
                                    <form action="#">
                                        <div class="tp-return-customer-input">
                                            <label>Coupon Code :</label>
                                            <input type="text" placeholder="Coupon">
                                        </div>
                                        <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Apply</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="tp-checkout-bill-area">
                            <h3 class="tp-checkout-bill-title">Billing Details</h3>

                            <div class="tp-checkout-bill-form">
                                <form  action="{{route('new-order')}}" method="POST">
                                    @csrf
                                    <div class="tp-checkout-bill-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tp-checkout-input">
                                                    <label>Delivery Address</label>
                                                    <input type="text" placeholder="Delivery Address" name="delivery_address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Payment Method</label>
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="radio" checked id="checkbox-3" name="payment_method" value="Cash">
                                            <label for="checkbox-3"><span>Cash on Delivery</span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="radio" id="checkbox-4" name="payment_method" value="Online">
                                            <label for="checkbox-4"><span>Online</span></label>
                                        </div>
                                    </div>
                                    <div class="tp-checkout-btn-wrapper">
                                        <button type="submit"><a  class="tp-checkout-btn w-100">Place Order</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- checkout place order -->
                        <div class="tp-checkout-place white-bg">
                            <h3 class="tp-checkout-place-title">Your Order</h3>

                            <div class="tp-order-info-list">

                                <ul>

                                    <!-- header -->
                                    <li class="tp-order-info-list-header">
                                        <h4>Product</h4>
                                        <h4>Total</h4>
                                    </li>
                                @php($sum = 0)
                                @foreach(Cart::content() as $item)
                                    <!-- item list -->
                                    <li class="tp-order-info-list-desc">
                                        <p>{{$item->name}}<span> x {{$item->qty}}</span></p>
                                        <span>{{$item->price * $item->qty}}</span>
                                    </li>
                                @php($sum = $sum + ($item->price * $item->qty))
                                @endforeach
                                    <!-- subtotal -->
                                    <li class="tp-order-info-list-subtotal">
                                        <span>Subtotal</span>
                                        <span>TK. {{$sum}}</span>
                                    </li>

                                    <li class="tp-order-info-list-subtotal">
                                        <span>Tax Amount(15%):</span>
                                        <span>TK. {{$tax = round( ($sum*0.15) )}}</span>
                                    </li>

                                    <!-- shipping -->
                                    <li class="tp-order-info-list-shipping">
                                        <span>Shipping</span>
                                        <div class="">
                                    <span>TK. {{$shipping = 100 }}</span>
                                        </div>
                                    </li>

                                    <!-- total -->
                                    <li class="tp-order-info-list-total">
                                        <span>Total</span>
                                        <span>TK. {{$totalPayable = $sum + $shipping + $tax }}</span>
                                    </li>
                                    <?php
                                    Session::put('order_total', $totalPayable);
                                    Session::put('tax_total', $tax);
                                    Session::put('shipping_total', $shipping);
                                    ?>
                                </ul>
                            </div>
{{--                            <form action="{{route('new-order')}}" method="POST">--}}
{{--                                @csrf--}}
{{--                            --}}
{{--                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout area end -->
    </main>
@endsection
