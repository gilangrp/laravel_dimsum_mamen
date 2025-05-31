<?php
namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        //  dd($promos);
        return view('admin.promo', compact('promos'));
    }

    public function userIndex()
    {
        $promos = Promo::all();
        return view('promo', compact('promos')); // user view
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

        Promo::create($request->all());

        return redirect()->route('admin.promo.index')->with('success', 'Promo berhasil ditambahkan.');
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

        return redirect()->route('admin.promo.index')->with('success', 'Promo berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->route('admin.promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}
