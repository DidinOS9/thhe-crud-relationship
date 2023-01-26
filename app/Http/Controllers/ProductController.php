<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request -> validate([
        'product_name' => 'required|min:5|max:30',
        'price' => 'required',
        'stock' => 'required',
        ]);

        Product::create($request->all());
        return redirect('/products');
    }

    public function viewProduct()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        Product::findOrFail($id)->update($request->all());
        return redirect('/products');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }
}
