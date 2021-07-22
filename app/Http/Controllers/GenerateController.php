<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Imports\ProductsImport;
use PDF;
use Excel;
use App\Models\Product;
use App\Models\Image;

class GenerateController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function price_generate()
    {
        $products = Product::all();
        return view('price_tag', ['products' => $products]);
    }

    public function import_product(Request $request)
    {
        $brand = $request->file('brand');
        $filename = uniqid() . '.' . $brand->getClientOriginalExtension();
        $destinationPath = public_path('/image/');
        $brand->move($destinationPath, $filename);

        $image = new Image;
        $image->path = $filename;
        $image->save();

        Excel::import(new ProductsImport($image->id), request()->file('excel'));
        return redirect('/products');
    }

    public function delete_product_list(Request $request)
    {
        $products = Product::truncate();

        return redirect('/products');
    }
}
