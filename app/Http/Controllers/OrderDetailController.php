<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        return OrderDetail::with(['order', 'menu'])->get();
    }

    public function store(Request $request)
    {
        $detail = OrderDetail::create($request->only(['id_pesanan', 'id_menu', 'jumlah', 'harga_satuan']));
        return response()->json($detail, 201);
    }

    public function show($id)
    {
        return OrderDetail::with(['order', 'menu'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detail = OrderDetail::findOrFail($id);
        $detail->update($request->only(['id_pesanan', 'id_menu', 'jumlah', 'harga_satuan']));
        return response()->json($detail);
    }

    public function destroy($id)
    {
        $detail = OrderDetail::findOrFail($id);
        $detail->delete();
        return response()->json(['message' => 'Order detail deleted']);
    }
}
