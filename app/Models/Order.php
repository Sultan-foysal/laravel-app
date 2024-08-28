<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model
{
    use HasFactory;
    private static $order, $orderDetails;
    public static function updateOrder(Request $request, $id)
    {
        self::$order = Order::find($id);

        if ($request->order_status == 'Pending' || $request->order_status == 'Cancel')
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
        }

        elseif ($request->order_status == 'Processing')
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->delivery_address = $request->delivery_address;
            self::$order->payment_status = $request->order_status;
            self::$order->courier_id = $request->courier_id;
        }

        elseif ($request->order_status == 'Complete')
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->delivery_date = date('Y-m-d');
            self::$order->delivery_timestamp = strtotime(date('Y-m-d'));
            self::$order->payment_status = $request->order_status;
            self::$order->payment_date = date('Y-m-d');
            self::$order->payment_timestamp = strtotime(date('Y-m-d'));
        }
        self::$order->save();
    }

    public static function deleteOrder($id)
    {
        self::$order = Order::find($id);

        if (self::$order->order_status == 'Cancel')
        {
            self::$orderDetails = OrderDetail::where('order_id', $id)->get();
            foreach (self::$orderDetails as $orderDetail) {
                $orderDetail->delete();
            }
            self::$order->delete();
            return 'Order info deleted successfully.';
        }
        else
        {
            return 'Sorry, it cannot be deleted.';
        }
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
