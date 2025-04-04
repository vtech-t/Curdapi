<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $product = Product::create($request->all());
        return response()->json($product, 201);
       
    }
        
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Product::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function addproduct(Request $request)
    {
 
        $product = Product::create($request->all());
        return redirect('/products')->with('success', 'Product added successfully!');
       
    }

    public function showProducts()
    {
        $products = Product::all(); // Fetch all products
        return view('products', compact('products')); // Pass data to the view
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product deleted successfully!');
    }
     // Show Edit Form
     public function editProduct($id)
     {
         $product = Product::findOrFail($id);
         return view('edit', compact('product'));
     }
 
     // Update Product
     public function updateProduct(Request $request, $id)
     {
         $product = Product::findOrFail($id);
         $product->update([
             'name' => $request->name,
             'description' => $request->description,
             'price' => $request->price,
             'stock' => $request->stock,
         ]);
 
         return redirect('/products')->with('success', 'Product updated successfully!');
     }
}


