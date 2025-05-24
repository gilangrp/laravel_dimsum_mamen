<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        return Promo::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_promo' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'diskon' => 'required|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        return Promo::create($request->all());
    }

    public function show($id)
    {
        return Promo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);

        $request->validate([
            'nama_promo' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'diskon' => 'required|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $promo->update($request->all());
        return $promo;
    }

    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return response()->json(['message' => 'Promo deleted successfully.']);
    }
}
