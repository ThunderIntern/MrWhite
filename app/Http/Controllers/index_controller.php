<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
    	$product = Catalog::inRandomOrder()->take(8)->get();
    	$recomended= "";
    	$brand = DB::table('categories')-> where('jenis','=', 'brand')->inRandomOrder()->paginate(6);
    	$offer=Catalog::inRandomOrder()->take(3)->get();
    	$category=DB::table('categories')-> where('jenis','=', 'perawatan')->get();

    	return view('index', compact('offer', 'brand', 'product','category'));
    }
}
