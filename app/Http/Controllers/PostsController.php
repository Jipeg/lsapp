<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts = Post::orderBy("created_at","desc")->paginate(10);

        // echo '<div class="container">';
        // foreach($posts as $post) {
        //     echo "<h2>$post->title</h2>";
        // }
        // echo '</div>';
        $posts = Post::orderBy("created_at","desc")->paginate(6);
        //return $posts;
        return view('posts/index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]); 

        // Create new post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post created');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // echo 'show post';
        $post = Post::find($id);
        // if ($post) {
            return view('posts/show')->with('post', $post);
        // }
        // else {
        //     echo 'no posts with such id';
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts/edit')->with('post', $post);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]); 

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post removed');
        //
    }
}
