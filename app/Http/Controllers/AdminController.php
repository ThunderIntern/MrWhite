<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use App\Link;
use App\ModelUser;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use App\Banner;
use App\Setting;
>>>>>>> af3483da995044737c6ed0086049bd647e1bf77c
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
  public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{

            return view('admin/dashboard');
        }

    }
    public function dataProduk(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $category = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->groupBy('jenis')->get();
            $product = Catalog::with('links','categories')->get();
            return view('admin/katalog/dataProduk', compact('product','category'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show($barcode)
    {
        $category = Catalog::with('links','categories','cata_cate')->where('barcode',$barcode)->get();
        return view('admin/katalog/dataProduk', compact('category'));
    }

    public function dataKategori(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{

            $jenis = Category::where('parent_id','>','0')->groupBy('jenis')->get();
            $hair_bahan = Category::where('parent_id',1)->where('jenis',$jenis[0]->jenis)->get();
            $hair_brand = Category::where('parent_id',1)->where('jenis',$jenis[1]->jenis)->get();
            $face_bahan = Category::where('parent_id',2)->where('jenis',$jenis[0]->jenis)->get();
            $face_brand = Category::where('parent_id',2)->where('jenis',$jenis[1]->jenis)->get();
            // dd($hair);
            return view('admin/katalog/dataKategori', compact('jenis','hair_bahan','hair_brand','face_bahan','face_brand'));
        }
    }
    public function produkBaru(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $jenis = Category::where('parent_id','>','0')->groupBy('jenis')->get();
            $hair_bahan = Category::where('parent_id',1)->where('jenis',$jenis[0]->jenis)->get();
            $hair_brand = Category::where('parent_id',1)->where('jenis',$jenis[1]->jenis)->get();
            $face_bahan = Category::where('parent_id',2)->where('jenis',$jenis[0]->jenis)->get();
            $face_brand = Category::where('parent_id',2)->where('jenis',$jenis[1]->jenis)->get();
            return view('admin/katalog/produkBaru', compact('jenis','hair_bahan','hair_brand','face_bahan','face_brand'));
        }
    }
    public function homePage(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/webSetting/homepage');
        }
    }
    public function component(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/webSetting/component');
        }
    }
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = ModelUser::where([['email',$email],['password',$password]])->count();

        if($data==1){ //apakah email tersebut ada atau tidak
          $data = ModelUser::where([['email',$email],['password',$password]])->first();
          Session::put('email',$data->email);
          Session::put('nama',$data->nama);
          Session::put('foto',$data->foto);
          Session::put('login',TRUE);
          return redirect('admin');

        }
        else{
            return redirect('login')->with('alert','Email atau Password Salah!!!');
        }
    }
    public function logout(){
        Session::put('login',FALSE);
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function webSetting(){
        $setting = Setting::get();
        return view('\admin\webSetting\homepage', compact('setting'));
    }

    public function banner(){
        $banner = Banner::get();
        return view('\admin\webSetting\banner', compact('banner'));
    }
}
