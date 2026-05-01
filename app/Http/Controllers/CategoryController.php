<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class CategoryController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::withCount('products')->get();

        return view('category.index', compact('kategoris'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('category.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        Kategori::findOrFail($id)->delete();

        return redirect()->route('category.index');
    }
}