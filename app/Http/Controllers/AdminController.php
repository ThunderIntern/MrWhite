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
        return redirect('login')->with('alert','Anda sudah logout');
    }

    public function webSetting(){
        $setting = Setting::orderBy('position')->get();
        // dd($setting);
        return view('\admin\webSetting\homepage', compact('setting'));
    }

    public function row_changes(){
      $position = request()->position;
      $i = 1;

      foreach ($position as $key => $value) {
        $sql = Setting::where('id', $value)->update(['position'=>$i]);

        $sql->save();
        $i++;
      }
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

<<<<<<< HEAD
=======

>>>>>>> a8e16e4e4400640efc5760743b72da150ecd3670
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
           $request->ba,
           $request->br
         ];

         $product = Catalog::find($id_cat);
         $product->categories()->attach($insert);

         if(empty($request->tokopedia)){
             $link->tag = $request->bukalapak;
             $link->link = $request->bukalapakk;
             $link->catalog_id = $id_cat;
             $link->save();
         }
         elseif(empty($request->bukalapak)){
             $link->tag = $request->tokopedia;
             $link->link = $request->tokopedia;
             $link->catalog_id = $id_cat;
             $link->save();
         }
         else{
             $bukalapak = new Link();
             $bukalapak->tag = $request->bukalapak;
             $bukalapak->link = $request->bukalapakk;
             $bukalapak->catalog_id = $id_cat;
             $bukalapak->save();

             $tokopedia = new Link();
             $tokopedia->tag = $request->tokopedia;
             $tokopedia->link = $request->tokopediaa;
             $tokopedia->catalog_id = $id_cat;
             $tokopedia->save();
         }
         return redirect()->back();
     }
<<<<<<< HEAD

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id_catalog;
        $catalog = Catalog::where('id', $id)->first();
        $link = Link::where('id', $id)->first();
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
        $catalog->update();

        $id_cat = $request->id_catalog;
        $insert = [
          $request->perawatan,
          $request->ba,
          $request->br
        ];

        $product = Catalog::find($id_cat);
        $product->categories()->sync($insert);

        if(empty($request->bukalapakk)){

        }
        $link->tag = $request->bukalapak;
        $link->link = $request->bukalapakk;
        $link->catalog_id = $id_cat;
        $link->update();

        return redirect('admin/katalog/dataProduk');
    }
=======
>>>>>>> a8e16e4e4400640efc5760743b72da150ecd3670

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalog = Catalog::find($id);
        $category = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')
                    ->where('catalog_category.catalog_id',$id)
                    ->where('categories.jenis','brand')
                    ->groupBy('jenis')->get();
        $link = Link::where('catalog_id',$id)->first();
        $jenis = Category::where('parent_id','>','0')->groupBy('jenis')->get();
        $hair_bahan = Category::where('parent_id',1)->where('jenis',$jenis[0]->jenis)->get();
        $hair_brand = Category::where('parent_id',1)->where('jenis',$jenis[1]->jenis)->get();
        $face_bahan = Category::where('parent_id',2)->where('jenis',$jenis[0]->jenis)->get();
        $face_brand = Category::where('parent_id',2)->where('jenis',$jenis[1]->jenis)->get();


        return view('admin/katalog/editProduk', compact('catalog','cata_cate','category','link','hair_bahan','hair_brand','face_bahan','face_brand'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $deletecat = Catalog::where('id', $id)->first();
        $deletecat->delete();
        $deletecate = cata_cate::where('catalog_id', $id)->first();
        $deletecate->delete();
        $deletelink = Link::where('id', $id)->first();
        $deletelink->delete();
        return redirect()->back();
    }
<<<<<<< HEAD
=======

>>>>>>> a8e16e4e4400640efc5760743b72da150ecd3670
}
