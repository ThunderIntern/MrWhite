<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
<<<<<<< HEAD
    	$product = model_catalog::inRandomOrder()->take(8)->get();
    	$recomended= "";
    	$brand = DB::table('category')-> where('jenis','=', 'brand')->paginate(6);
    	$offer=model_catalog::inRandomOrder()->take(3)->get();;
    	$category=DB::table('category')-> where('jenis','=', 'perawatan')->get();
=======
    	$product = Catalog::inRandomOrder()->take(8)->get();
    	$recomended= "";
    	$brand = DB::table('categories')-> where('jenis','=', 'brand')->inRandomOrder()->paginate(4);
    	$offer=Catalog::inRandomOrder()->take(3)->get();
    	$category=DB::table('categories')-> where('jenis','=', 'perawatan')->get();
>>>>>>> 431a8d834cc90b4805d94d04c1c83105612f712b

    	return view('index', compact('offer', 'brand', 'product','category'));    	
    }
}
