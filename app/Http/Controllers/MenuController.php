<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // ambil semua data menu dari DB
        // return response()->json($menus);
        return view('admin.menu', compact('menus')); // lempar ke Blade
    }


    public function userIndex()
    {
        // $menus = Menu::all();
        $menus = DB::select("SELECT * FROM menus");
        return view('menu', compact('menus')); // resources/views/menu.blade.php
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // \Log::info($request->all());
        $validated = $request->validate([
            'nama_menu' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar')->store('menu', 'public');
        $validated['gambar'] = $path;

        Menu::create($validated);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambahkan.');

    }

    public function show($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        return response()->json($menu);
    }
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('menu', 'public');
            $validated['gambar'] = $path;
        }

        $menu->update($validated);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus.');
    }

}
