<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
       // return 123;
        //$posts = Post::orderBy('id','desc')->paginate();
        return view('posts.index')->with('posts',$user->posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pName' => 'required',
            'cCode' => 'required',
            'tCode' => 'required',
            'tDetails' => 'required'
        ]);
        
        $post = new Post;
        $post->ProjectName = $request->input('pName');
        $post->CategoryCode = $request->input('cCode');
        $post->TaskCode = $request->input('tCode');
        $post->TaskDetails = $request->input('tDetails');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success','Timesheet logged');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::find($id);
       return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
       return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'pName' => 'required',
            'cCode' => 'required',
            'tCode' => 'required',
            'tDetails' => 'required'
        ]);
        
        $post = Post::find($id);
        $post->ProjectName = $request->input('pName');
        $post->CategoryCode = $request->input('cCode');
        $post->TaskCode = $request->input('tCode');
        $post->TaskDetails = $request->input('tDetails');
        
        $post->save();

        return redirect('/posts')->with('success','Timesheet updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success','Timesheet removed');
    }
    
}
