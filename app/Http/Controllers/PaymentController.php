<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::with('order')->get();
    }

    public function store(Request $request)
    {
        $payment = Payment::create($request->only([
            'id_pesanan',
            'metode_pembayaran',
            'tanggal_pembayaran',
            'status'
        ]));

        return response()->json($payment, 201);
    }

    public function show($id)
    {
        return Payment::with('order')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update($request->only([
            'id_pesanan',
            'metode_pembayaran',
            'tanggal_pembayaran',
            'status'
        ]));

        return response()->json($payment);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return response()->json(['message' => 'Payment deleted']);
    }
}
