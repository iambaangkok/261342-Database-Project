<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecartRequest  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecartRequest $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }

    public function carts(){

        $carts = DB::select('select * from Cart');
        

        return $carts;

        // return view('cart', ['carts' => $carts]);
    }

    public function remove($id){
        $cart = Cart::findOrFail($id);
        $product = Product::where('name', '=', $cart->name)->first();
        DB::transaction(function () use ($product, $cart) {
            $product->stock = $product->stock + $cart->quantity;
            $product->save();
            $cart->delete();
        });
        return back()->with('success', 'Product removed successfully');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = Cart::where('name', '=', $product->name)->first();
        DB::transaction(function () use ($product, $cart) {
            if ($cart != null) {
                $cart->quantity = $cart->quantity + 1;
                $cart->save();
            } else {
                $cart = new Cart();
                $cart->name = $product->name;
                $cart->quantity = 1;
                $cart->price = $product->price;
                $cart->image = $product->image;
                $cart->save();
            }
            $product->stock = $product->stock - 1;
            $product->save();
        });
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
