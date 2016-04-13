<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = \App\Post::orderBy('created_at', 'desc')
            ->paginate(10); //paginate($perPage)
        $data = compact('posts');
        return view('posts.index', $data);
    }
    public function show($id)
    {
        $post = \App\Post::find($id);
        $data = compact('post');
        return view('posts.show', $data);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $post = \App\Post::create($request->all());
        return redirect()->route('posts.show', $post->id);
    }

    public function update($id, Request $request)
    {
        $post = \App\Post::find($id);
        $post->update($request->all());
        /* 略 */
    }

    public function destroy($id)
    {
        $post = \App\Post::find($id);
        foreach($post->comments as $comment) {
            $comment->delete();
        }
        $post->delete();
        /* 略 */
        return redirect()->route('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function random()
    {
        $post = \App\Post::all()->random(); //random($number)
        $data = compact('post');
        return view('posts.show', $data);
    }
}
