<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        //return "It's Working and the no is:" ;

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all(); 
        // Post::create($request->all());

        $post= new Post;

        $post->title= $request->title;

        $post->save();

        // $post= $request->all();
        // $post['title']= $request->title;
        // Post::create($request->all());
 return redirect('/index');
     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post= Post::find($id);


        return view('posts.show', compact('post'));
    }

    // // *
    // //  * Show the form for editing the specified resource.
    // //  *
    // //  * @param  int  $id
    // //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $post= Post::find($id);

        return view('posts.edit', compact('post'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        //
        //return $request->all();
        $post= Post::find($id);

        $post->update($request->all());

        return redirect('/index');
    }

    // *
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function destroy($id)
    {
        //$post= Post::whereid($id)->delete();

        $post= Post::find($id);

        $post->delete();

       return redirect ('/index');
    }
    
    // // public function contact(){
    // //     $people=['Peter', 'Fred', 'Ann', 'Mercy'];
    // //     return view('contact', compact('people'));
    // // }
    
    // // public function showPost($id, $name, $password){
    // //    // return view('posts')->with('id',$id); //method 1
    // //     return view('posts', compact('id', 'name', 'password'));//method 2
    // // }


}
