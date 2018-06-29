<?php

namespace App\Http\Controllers;
use App\model_catalog;
use App\model_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
    	$product = model_catalog::inRandomOrder()->take(8)->get();
    	$recomended= "";
    	$brand = DB::table('category')-> where('jenis','=', 'brand')->paginate(6);
    	$offer=model_catalog::inRandomOrder()->take(3)->get();;
    	$category=DB::table('category')-> where('jenis','=', 'perawatan')->get();

    	return view('index', compact('offer', 'brand', 'product','category'));    	
    }
}
