<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use Auth;
use DB;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct(){
        $this->middleware('auth')->only(['create','store']);
    }
    public function index()
    {
        //
        
        $post=Post::all();
        $electro=DB::table("posts")->select('*')->where('categorie','=','Electronique')->count();
        $immob=DB::table('posts')->select('*')->where('categorie','=','Immobilier')->count();
        $autre=DB::table('posts')->select('*')->where('categorie','=','Autres')->count();
        return view('welcome')->with('posts',$post)->with('elect',$electro)->with('immob',$immob)->with('autre',$autre);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        return view('poster_annonce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post=new Post();
        $post->id_user=Auth::user()->id;
        $post->titre=$request->input('titre');
        $post->nom_pre=Auth::user()->name;
        $post->description=$request->input('description');
        $post->num_tele=$request->input('num_tele');
        $post->ville=$request->input('ville');
        $post->location=$request->input('location');
        $post->categorie=$request->input('categorie');
        $post->email=Auth::user()->email;
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $post->image=$imageName;
        
        $post->save();
        return redirect()->route('post.index');
      
}

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('select',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
    
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
