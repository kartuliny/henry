<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('product.register')->with('brands', $brands);
    }

    public function store(Request $request){
        Product::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'precio_compra' => $request->input('precio_compra'),
            'brand_id' => $request->input('brand_id')
        ]);
        return redirect()->route('home');
    }

}
