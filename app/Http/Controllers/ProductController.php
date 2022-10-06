<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; ## Wait Product
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        // $products = Products::all();
        // return view('viewproducts', ['products' => $products]);
=======
        $products = Products::all();
        return view('viewproducts', ['products' => $products]);
>>>>>>> 870e48f085876872562d731babea789a7a2ddf06
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        // return view('createproduct');
=======
        return view('createproduct');
>>>>>>> 870e48f085876872562d731babea789a7a2ddf06
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /**
      * 
      */
    public function store(Request $request)
    {
<<<<<<< HEAD
        // $product = new Products([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'count' => $request->count,
        //     'productCode' =>$request->productCode,
        //     'productName'=>$request->productName,
        //     'productLine'=>$request->productLine,
        //     'productScale'=>$request->productScale,
        //     'productvendor'=>$request->productvendor,
        //     'productDescrition'=>$request->productDescrition,
        //     'quantityInStock'=>$request->quantityInStock,
        //     'buyPrice'=>$request->buyPrice,
        //     'MSRP'=>$request->MSRP
        //     ]);


        //     $product->save();
        //     $products = Products::all();
        //     return view('viewproducts', ['products' => $products]);
=======
        $product = new Products([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'count' => $request->count,
            'productCode' =>$request->productCode,
            'productName'=>$request->productName,
            'productLine'=>$request->productLine,
            'productScale'=>$request->productScale,
            'productvendor'=>$request->productvendor,
            'productDescrition'=>$request->productDescrition,
            'quantityInStock'=>$request->quantityInStock,
            'buyPrice'=>$request->buyPrice,
            'MSRP'=>$request->MSRP
            ]);


            $product->save();
            $products = Products::all();
            return view('viewproducts', ['products' => $products]);
>>>>>>> 870e48f085876872562d731babea789a7a2ddf06
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
