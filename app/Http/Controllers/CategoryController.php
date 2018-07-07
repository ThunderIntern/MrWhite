<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\cata_cate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->perawatan == 1){
          $hair = new Category();
          $hair->jenis = $request->jenis;
          $hair->name = $request->nama;
          $hair->parent_id = $request->perawatan;
          $hair->save();
        }
        elseif($request->perawatan == 2){
          $face = new Category();
          $face->jenis = $request->jenis;
          $face->name = $request->nama;
          $face->parent_id = $request->perawatan;
          $face->save();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        if($request->perawatan == 1){
            $update = Category::where('id', $request->idhair)->first();
            $update->jenis = $request->jenis;
            $update->name = $request->nama;
            $update->update();
        }

        elseif($request->perawatan == 2){
            $update = Category::where('id', $request->idface)->first();
            $update->jenis = $request->jenis;
            $update->name = $request->nama;
            $update->update();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->hairperawatan == 1){
            $delete = Category::where('id', $request->hairid)->first();
            $delete->delete();
            $cata_cate = cata_cate::where('category_id', $request->hairid)->get();
            foreach ($cata_cate as $c) {
              $c->delete();
            }
        }
        elseif($request->faceperawatan == 2){
            $delete = Category::where('id', $request->faceid)->first();
            $delete->delete();
            $cata_cate = cata_cate::where('category_id', $request->faceid)->get();
            foreach ($cata_cate as $c) {
              $c->delete();
            }
        }

        return redirect()->back();
    }
}
