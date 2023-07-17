<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'body'=>$request->input('body'),
                'price'=>$request->input('price'),
                'img'=>$request->has('img')? $request->file('img')->store('public/product') : '/img/default.jpg', 
            ]
            ); 

            return redirect(route('homePage'))->with('message', 'prodotto aggiunto con successo!'); 
    }

    public function getProductByUser(User $user){
        // $user= User::find($id); 
        // $personalProducts= $user->products; 
        
        // return view('product.user', compact('personalProducts')); 

        return view('product/user', compact('user')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product/show', compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product/edit', compact('product')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->name= $request->name;
        $product->body= $request->body;
        $product->price= $request->price;
        $product->img= $request->has('img')? $request->file('img')->store('public/product'): $product->img;
        $product->save(); 

        return redirect(route('product.show', compact('product')))->with('prodotto modificato con successo!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete(); 
        return redirect(route('homePage'))->with('message', 'prodotto eliminato con successo!'); 
    }


}
