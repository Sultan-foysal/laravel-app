<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Session;
use App\Models\Order;
use Hash;
use App\Models\Product;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('website.customer.dashboard');
    }
    public function profile()
    {
        return view('website.customer.profile',['customer' => Customer::find(Session::get('customerId'))]);
    }

    public function update(Request $request, $id)
    {
        return $id;
    }

    public function order()
    {
        return view('website.customer.order', [ 'orders' => Order::where('customer_id', Session::get('customerId'))->get() ]);
    }

    public function dashboardLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/');
    }

    public function ChangePasswordForm()
    {
        return view('website.customer.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:6', 'confirmed'],
        ]);

        $customerId = Session::get('customerId');
        $customer = Customer::find($customerId);

        if (!$customer || !Hash::check($request->current_password, $customer->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match our records.']);
        }

        $customer->password = Hash::make($request->new_password);
        $customer->save();

        return redirect()->route('customer.change-password')->with('status', 'Password changed successfully.');
    }
    public function show($id)
    {
        return view('website.customer.show',['product' => Product::find($id)]);
    }
}
