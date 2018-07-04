<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use App\Link;
use App\ModelUser;
use App\Banner;
use App\Setting;
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
            $product = Catalog::with('links','categories')->get();
            return view('admin/katalog/dataProduk', compact('product'));
        }
    }



    public function dataKategori(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/katalog/dataKategori');
        }
    }
    public function produkBaru(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/katalog/produkBaru');
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


        /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $banner_detail = Banner::where('id', $id)->firstOrFail();
        // $product = Catalog::where('barcode','!=', $barcode)->inRandomOrder()->take(4)->get();
        // $link = DB::table('links')->join('catalogs','links.catalog_id','=','catalogs.id')->select('links.link')->where('barcode', $barcode)->first();
        // return redirect()->back()->with('banner_detail');
    }
}
