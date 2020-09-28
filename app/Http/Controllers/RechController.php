<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use DB;
class RechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        //
        $categorie=$request->input('categorie');
        if(strcmp($categorie,'---')==0){
            return redirect()->route('post.index');
        }
        if(strcmp($categorie,'Electronique')==0){
            $posts=DB::table("posts")->select('*')->where('categorie','=','Electronique')->get();
            return view('element')->with('posts',$posts)->with('categorie',$categorie);
        }
        if(strcmp($categorie,'Immobilier')==0){
            $posts=DB::table("posts")->select('*')->where('categorie','=','Immobilier')->get();
            return view('element')->with('posts',$posts)->with('categorie',$categorie);
        }
        if(strcmp($categorie,'Autres')==0){
            $posts=DB::table("posts")->select('*')->where('categorie','=','Autres')->get();
            return view('element')->with('posts',$posts)->with('categorie',$categorie);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
