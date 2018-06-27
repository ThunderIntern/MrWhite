<?php

namespace App\Http\Controllers;
use App\model_catalog;
use App\model_category;
use App\model_catalog_category;
use App\model_link_catalog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class shop_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = model_category::where('jenis', 'perawatan')->get();
        $brand = model_category::where('jenis', 'brand')->get();
        $number = 3;

        if (request()->category) {
            // $product = model_catalog::with('model_category')->whereHas('catalog_category', function($query){
            //     $query->where('jenis', request()->category);
            // })->get();
            $product = DB::table('catalog_category')->join('catalog','catalog_category.catalog_id','=','catalog.id_catalog')->join('category','category.id_category','=','catalog_category.category_id')->where('name', request()->category);
            $category_name = optional(model_category::where('name', request()->category)->first())->name;
            // dd($category_name);
           
        }elseif (request()->brands) {
           $product = DB::table('catalog_category')->join('catalog','catalog_category.catalog_id','=','catalog.id_catalog')->join('category','category.id_category','=','catalog_category.category_id')->where('name', request()->brands);
            $category_name = optional(model_category::where('name', request()->brands)->first())->name;
            // dd($product);
           }
        else{

            $product = model_catalog::take(8);
            $category_name = 'All Product';
        }

        if (request()->sort == 'low') {
            $product = $product->orderBy('harga')->paginate($number);
        }elseif (request()->sort == 'high') {
            $product = $product->orderBy('harga','desc')->paginate($number);
        }else{
            $product = $product->paginate($number);
        }
        
        return view('shop', compact('product', 'categories', 'brand', 'category_name'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show($barcode)
    {
        $product_detail = model_catalog::where('barcode', $barcode)->firstOrFail();
        $product = model_catalog::where('barcode','!=', $barcode)->inRandomOrder()->take(4)->get();
        $link = DB::table('link_catalog')->join('catalog','link_catalog.id_catalog','=','catalog.id_catalog')->select('link_catalog.link')->where('barcode', $barcode)->first();
        // $type = DB::table('catalog_category')->join('catalog','catalog_category.catalog_id','=','catalog.id_catalog')->join('category','category.id_category','=','catalog_category.category_id')->get();
        return view('detail_product', compact('product_detail', 'product', 'link', 'type'));
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
