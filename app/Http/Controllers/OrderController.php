<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::with('details')->get();
    }

    public function store(Request $request)
    {
        $order = Order::create($request->only(['id_pengguna', 'total_harga', 'status']));
        return response()->json($order, 201);
    }

    public function show($id)
    {
        return Order::with('details')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->only(['id_pengguna', 'total_harga', 'status']));
        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(['message' => 'Order deleted']);
    }
}
