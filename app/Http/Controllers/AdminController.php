<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use App\Link;
use App\cata_cate;
use App\ModelUser;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
  public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('admin/dashboard');
        }

    }
    public function dataProduk(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            $category = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->groupBy('jenis')->get();
            $product = Catalog::with('links','categories')->get();
            return view('admin/katalog/dataProduk', compact('product','category'));
        }
    }

    public function dataKategori(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
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
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            $jenis = Category::where('parent_id','>','0')->groupBy('jenis')->get();
            $hair_bahan = Category::where('parent_id',1)->where('jenis',$jenis[0]->jenis)->get();
            $hair_brand = Category::where('parent_id',1)->where('jenis',$jenis[1]->jenis)->get();
            $face_bahan = Category::where('parent_id',2)->where('jenis',$jenis[0]->jenis)->get();
            $face_brand = Category::where('parent_id',2)->where('jenis',$jenis[1]->jenis)->get();
            $product = Catalog::orderBy('id','DESC')->first();
            $products = $product->id+1;
            return view('admin/katalog/produkBaru', compact('jenis','hair_bahan','hair_brand','face_bahan','face_brand','products'));
        }
    }
    public function homePage(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('admin/webSetting/homepage');
        }
    }
    public function component(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $catalog = new Catalog();
        $category = new Category();
        $link = new Link();
        $cata_cate = new cata_cate();
        $catalog->nama = $request->nama;
        $catalog->barcode = $request->barcode;
        $catalog->harga = $request->harga;
        $catalog->deskripsi = $request->deskripsi;
        $catalog->barcode = $request->barcode;
        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();
        $url_gambar = $fileName;
        $request->file('gambar')->move("image/", $fileName);
        $catalog->url_gambar = ($url_gambar);
        $catalog->save();
        $id_cat = $request->id_catalog;
        $insert = [
          $request->perawatan,
          $request->hba,
          $request->hbr
        ];

        $product = Catalog::find($id_cat);
        $product->categories()->attach($insert);
        // $product->categories()->attach($hba);
        // $product->categories()->attach($hbr);
        // $product->save();


        // $cata_cate->catalog_id = $request->id_catalog;
        // $cata_cate->category_id = $request->perawatan;
        // $cata_cate->catalog_id = $request->id_catalog;
        // $cata_cate->category_id = $request->hba;
        // $cata_cate->catalog_id = $request->id_catalog;
        // $cata_cate->category_id = $request->hbr;
        // $cata_cate->save();
        // $category->name = $request->brand;
        // $category->name = $request->bahan;
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Request $request){
    //     $data = new Banner;
    //     $data->name = $request->name;
    //     $data->url_gambar = $request->url_gambar;
    //     $data->date_show = $request->date_show;
    //     $data->date_off = $request->date_off;
    //
    //     $data->save();
    //     return redirect()->back();
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('\admin\webSetting\banner',compact('banner','id'));
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
        $banner= Banner::find($id);
        $banner->name=$request->get('name');
        $banner->url_gambar=$request->get('url_gambar');
        $banner->date_show=$request->get('date_show');
        $banner->date_off=$request->get('date_off');

        $banner->save();
        return redirect()->back();
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
