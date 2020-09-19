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
            'productImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'productLink'      =>  'required',
            'productPrice'      =>  'required',
            'productDescription'      =>  'required',
            'productType' => 'required'
        ]);
        $image_file = $request->file('productImage');
        $image_path = $image_file->storeAs('images', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/images');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $product = new Product([
            'productName'            =>    $request->get('productName'),
            'productImage' => $image_path,
            'productLink'      =>    $request->get('productLink'),
            'productPrice'      =>  $request->get('productPrice'),
            'productDescription'      =>  $request->get('productDescription'),
            'productType' => $request->get('productType')
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
            'productDescription' => 'required',
            'productType' => 'required'
        ]);
        $image_file = $request->file('productImage');
        $image_path = $image_file->storeAs('images', time().'.'.$image_file->getClientOriginalExtension(), 'local');
        $destinationPath = public_path('/images');
        $name = time().'.'.$image_file->getClientOriginalExtension();
        $image_file->move($destinationPath, $name);
        $obj = \App\Product::where('productName', $request->productName)
            ->update([
                'productImage' => $image_path,
                'productLink' => $request->productLink,
                'productPrice' => $request->productPrice,
                'productDescription' => $request->productDescription,
                'productType' => $request->productType
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