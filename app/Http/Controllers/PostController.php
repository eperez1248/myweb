<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {
        $posts= Post::all();
      
        return view('index',compact('posts'));
    }
public function store(Request $request)
    {
        $request->validate([
         'title' => 'required',
         'body' =>'required',]);   
         Post::create($request->all());
return redirect()->route('posts.index')
        ->with('success','Registro creado');
                
    }

    public function show(string $id)
    {
        $post=Post::find($id);
        return view('show',compact('post'));
        
    }
    public function create(){
        
         $posts= Post::all();
        return view('create',compact('posts'));
    }
    public function edit($id){       
         $post= Post::find($id);
        return view('edit',compact('post'));
    }
   
    public function update(Request $request, string $id)
    {
       $request->validate([
         'title' => 'required',
         'body' =>'required']); 
       $post=Post::find($id);
       $post->update($request->all());
       return redirect()->route('posts.index')
        ->with('success','Registro modificado');           
    }

    public function destroy(string $id)
    {
      $post=Post::find($id);
      $post->delete();
      
       return redirect()->route('posts.index')
        ->with('success','Registro borrado');
      
    }
    
    

}
