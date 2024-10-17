<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Assuming you have an Order model

class OrderController extends Controller
{
    /**
     * Fetch all orders.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all orders
        $orders = Order::all();

        // Return the orders as a JSON response
        return response()->json($orders);
    }

    /**
     * Fetch a specific order by marking code.
     *
     * @param  string  $marking_code
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($marking_code)
    {
        // Find the order by marking code
        $order = Order::where('marking_code', $marking_code)->first();

        // If the order is not found, return a 404 error
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Return the order as a JSON response
        return response()->json($order);
    }
}
