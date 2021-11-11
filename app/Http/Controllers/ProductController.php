<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // protected $validationRules = [
    //     'title' => 'required| max:50',
    //     'type' => 'required | max:15',
    //     'cooking_time' => 'required | integer | max:255 | min:1',
    //     'weight' => 'required | integer | min:0',
    //     'description' => 'required',
    //     'image' => 'nullable | url'
    // ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione
        $request->validate([
            'title'=> 'required| max:50',
            'type' => 'required | max:15',
            'cooking_time' => 'required | integer | max:255 | min:1',
            'weight' => 'required | integer | min:0',
            'description'=> 'required',
            'image'=> 'nullable | url'
        ]);

        $data = $request->all();

        // $newProduct = new Product();
        // $newProduct->title = $data['title'];
        // $newProduct->type = $data['type'];
        // $newProduct->cooking_time = $data['cooking_time'];
        // $newProduct->weight = $data['weight'];
        // $newProduct->description = $data['description'];
        // $newProduct->image = $data['image'];
        // $newProduct->save();

        $newProduct = Product::create($data);

        return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //validazione
        $request->validate([
            'title' => 'required| max:50',
            'type' => 'required | max:15',
            'cooking_time' => 'required | integer | max:255 | min:1',
            'weight' => 'required | integer | min:0',
            'description' => 'required',
            'image' => 'nullable | url'
        ]);

        $data = $request->all();

        $product->update($data);

        return redirect()->route('products.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
