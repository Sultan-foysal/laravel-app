@extends('website.master')
@section('body')
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
                            <span><a href="{{route('home')}}">Home</a></span>
                            <span><a href="#">Profile</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group">
                            <a href="{{route('customer.dashboard')}}" class="list-group-item list-group-item-action {{\Request::route()->getName() == 'customer.dashboard' ? 'active' : ''}}">Dashboard</a>
                            <a href="{{route('customer.profile')}}" class="list-group-item list-group-item-action {{\Request::route()->getName() == 'customer.profile' ? 'active' : ''}}">Profile</a>
                            <a href="{{route('customer.order')}}" class="list-group-item list-group-item-action {{\Request::route()->getName() == 'customer.order' ? 'active' : ''}}">My order</a>
                            <a href="{{route('customer.change-password')}}" class="list-group-item list-group-item-action">Change Password</a>
                            <button class="btn btn-danger"><a href="{{route('customer-dashboard-logout')}}">Logout</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class="text-center">My Profile </h1>
                        <hr/>
                        <form action="{{route('customer.update', ['id' => $customer->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$customer->name}}" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" value="{{$customer->email}}" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" value="{{$customer->mobile}}" name="mobile"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Date Of Birth</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" value="{{$customer->date_of_birth}}" name="date_of_birth"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blood Group</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="blood_group">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" value="{{$customer->image}}" name="image"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">NID</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$customer->nid}}" name="nid"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="address">{{$customer->address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Information"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

