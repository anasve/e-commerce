<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_ids' => 'required|array',
            'product_ids.*' => 'exists:products,id',
        ]);

        $order = new Order();
        $order->user_id = $request->user()->id;
        $order->save();

        $order->products()->attach($request->product_ids);

        return response()->json(['message' => 'Order placed successfully', 'order' => $order]);
    }
}
