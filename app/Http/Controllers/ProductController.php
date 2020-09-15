<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Product;
use Image;
use DB;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('productManagement', compact('products'));
    }
    public function create()
    {
        return view('createProduct');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'productName'            =>  'required',
            'productImage'              =>  'required',
            'productLink'      =>  'required',
            'productPrice'      =>  'required',
            'productDescription'      =>  'required',
        ]);
        $product = new Product([
            'productName'            =>    $request->get('productName'),
            'productImage'              =>    $request->get('productImage'),
            'productLink'      =>    $request->get('productLink'),
            'productPrice'      =>  $request->get('productPrice'),
            'productDescription'      =>  $request->get('productDescription'),
        ]);
        $product->save();   
        return redirect('/pr');
    }
    public function show($productName)
    {
        $product = DB::table('products')->where('productName',$productName)->first();
        return view('page.dynamic', ['product' => $product]);
    }
    public function edit($productName)
    {
        $product = DB::table('products')->where('productName',$productName)->first();
        return view('editProduct', ['product' => $product]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'productName' => 'required|exists:products,productName',
            'productImage' => 'required',
            'productLink' => 'required',
            'productPrice' => 'required',
            'productDescription' => 'required'
        ]);
        $obj = \App\Product::where('productName', $request->productName)
            ->update([
                'productImage' => $request->productImage,
                'productLink' => $request->productLink,
                'productPrice' => $request->productPrice,
                'productDescription' => $request->productDescription
           ]);
        return redirect('/pr');
    }
    public function destroy(Request $request)
    {
        $obj = \App\Product::where('productName', $request->productName)
        ->delete();
        return redirect('/pr');
    }
}
