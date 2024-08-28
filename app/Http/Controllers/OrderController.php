<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index',['orders'=>Order::all()]);
    }

    public function detail($id)
    {
        return view('admin.order.detail',['order' => Order::find($id)]);
    }

    public function edit($id)
    {
        $order = Order::find($id);
        if ($order->order_status == 'Complete') {
            return back()->with('message', 'Sorry it cannot be edited.');
        }
        $couriers = Courier::all();
        return view('admin.order.edit', [
            'order' => $order,
            'couriers' => $couriers
        ]);
    }

    public function update(Request $request, $id)
    {
        Order::updateOrder($request, $id);
        return redirect('/order')->with('message', 'Order Status info updated successfully.');
    }

    public function destroy($id)
    {
        $message = Order::deleteOrder($id);
        return back()->with('message', $message);
    }
}
