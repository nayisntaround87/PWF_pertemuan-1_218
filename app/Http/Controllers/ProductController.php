<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('kategori')->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('product.create', compact('kategoris'));
    }

   public function store(Request $request)
{
    $request->validate([
        'nama_product' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|numeric',
        'kategori_id' => 'required'
    ]);

    Product::create($request->all());

    return redirect()->route('product.index');
}

    public function show($id)
    {
        $product = Product::with('kategori')->findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $kategoris = Kategori::all();
        return view('product.edit', compact('product', 'kategoris'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_product' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|numeric',
        'kategori_id' => 'required'
    ]);

    $product = Product::findOrFail($id);
    $product->update($request->all());

    return redirect()->route('product.index');
}

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index');
    }
}