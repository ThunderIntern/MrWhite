<?php

namespace App\Http\Controllers;
use App\model_catalog;
use App\model_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
    	$catalog = model_catalog::paginate(3);
    	$product = model_catalog::inRandomOrder()->take(8)->get();
    	$recomended= "";
    	$brand = DB::table('category')-> where('jenis','=', 'brand')->paginate(6);
    	$offer="";
    	$category=DB::table('category')-> where('jenis','=', 'perawatan')->get();

    	return view('index', compact('catalog', 'brand', 'product','category'));    	
    }
}
