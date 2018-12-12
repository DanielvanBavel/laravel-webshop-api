<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {     
		$products = Product::with(['category', 'album.images', 'reviews'])->get();
     	return response()->json($products);
	}

	public function highlighted() {
		return response()->json(Product::with(['category'])->where('onHomePage', '=', '1')->get());
	}
    
	public function create(Request $request)
	{
		$product = new Product;
		$product->name= $request->name;
		$product->price = $request->price;
		$product->description= $request->description;
		$product->save();

		return response()->json($product);
    }

    public function show($id)
    {
		return response()->json(Product::with(['category', 'album.images' ,'specifications', 'reviews'])->where('id', '=', $id)->get());
    }

    public function update(Request $request, $id)
    { 
		$product 				= Product::find($id);

		$product->name 			= $request->input('name');
		$product->price 		= $request->input('price');
		$product->description 	= $request->input('description');
		$product->stock 		= $request->input('stock');
		$product->save();
		return response()->json($product);
    }

    public function destroy($id)
    {
		$product = Product::find($id);
        $product->delete();
		return response()->json('product removed successfully');
    }
}