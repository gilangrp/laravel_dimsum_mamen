<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return response()->json($menus);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_menu' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|string|max:255',
        ]);

        $menu = Menu::create($validated);

        return response()->json($menu, 201);
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
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $validated = $request->validate([
            'nama_menu' => 'sometimes|required|string|max:100',
            'deskripsi' => 'nullable|string',
            'harga' => 'sometimes|required|numeric',
            'gambar' => 'nullable|string|max:255',
        ]);

        $menu->update($validated);

        return response()->json($menu);
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $menu->delete();

        return response()->json(['message' => 'Menu deleted successfully']);
    }
}
