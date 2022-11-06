<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; ## Wait Product
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\limit;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return  $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproduct');
    }
    /**
     * 
     * @return http://127.0.0.1:8000/products?page=  n: R to 1 - 11
     */
    public function pagination()
    {
        $page = DB::table('Products')
            ->Paginate(
                $perPage = 12,
                $columns = ['*'],
                $pageName = 'page'
            );


        return $page;
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
        $product = new Product([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'count' => $request->count,
            'productCode' => $request->productCode,
            'productName' => $request->productName,
            'productLine' => $request->productLine,
            'productScale' => $request->productScale,
            'productvendor' => $request->productvendor,
            'productDescrition' => $request->productDescrition,
            'quantityInStock' => $request->quantityInStock,
            'buyPrice' => $request->buyPrice,
            'MSRP' => $request->MSRP
        ]);


        $product->save();
        $products = Product::all();
        return view('viewproducts', ['products' => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdetail(Request $request)
    {
        $productCode = $request["productCode"];
        $product =  Product::where('productCode', '=', $productCode)->first();
        return response()->json($product, 200);
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

    public function searchproduct(Request $request)
    {
        $key = $request["searchKey"];


        

        $search_product = Product::where('productName', 'like', '%'. $key . '%')
            ->orwhere('productVendor', 'like', '%'. $key . '%')
            ->get();

       

        return response()->json($search_product, 200);
    }
}
