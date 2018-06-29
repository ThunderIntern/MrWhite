<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use App\Link;
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
        $categories = Category::where('jenis', 'perawatan')->get();
        $brand = Category::where('jenis', 'brand')->get();
        $number = 6;

        if (request()->category) {
            // $product = Catalog::with('Category')->whereHas('catalog_category', function($query){
            //     $query->where('jenis', request()->category);
            // })->get();
            $product = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->where('name', request()->category);
            $category_name = optional(Category::where('name', request()->category)->first())->name;
        }elseif (request()->brands) {
           $product = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->where('name', request()->brands);
            $category_name = optional(Category::where('name', request()->brands)->first())->name;
           }
        else{

            $product = Catalog::take(8);
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

    public function search(Request $request){
        
        $request->validate([
            'search'=>'required|min:3'
        ]);

        $search = $request->input('search');

        // $product = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')
        // ->where('jenis','like', "%$search%")
        // ->orWhere('name','like', "%$search%")
        // ->orWhere('deskripsi','like', "%$search%")
        // ->orWhere('nama','like', "%$search%")
        // ->distinct()
        // ->paginate(8);

        $product = Catalog::search($search)->paginate(8);
        return view('search-result', compact('product'));
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
        $product_detail = Catalog::where('barcode', $barcode)->firstOrFail();
        $product = Catalog::where('barcode','!=', $barcode)->inRandomOrder()->take(4)->get();
        $link = DB::table('links')->join('catalogs','links.id','=','catalogs.id')->select('links.link')->where('barcode', $barcode)->first();
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
