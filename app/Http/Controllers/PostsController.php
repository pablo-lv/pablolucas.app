<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth')->only(['update']);
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $posts = Post::all();


        return view('blog.index', compact('posts'));
    }

    public function posts()
    {
        $posts = Post::all();
        return view('blog.posts', compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'description' => 'required',
            'content'     => 'required' 
        ]);

        $post = new Post($request->all());
        $post->save();

        $recentPost = Post::select('title', 'slug', 'created_at')->orderBy('created_at', 'DESC')->limit(5)->get();


        return redirect()->route('pots.posts')->withSuccess("El post {$post->title} se ha creado correctamente");
    }

    public function show($slug)
    {
        try {
            $post = Post::whereSlug($slug)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Post Not Found.',
                    'status'  => 404
                ]
            ], 404);
        }

        $recentPost = Post::select('title', 'slug', 'created_at')->orderBy('created_at', 'DESC')->limit(5)->get();


        return view('blog.show')->with([
            'post' => $post,
            'recentPost' => $recentPost
        ]);
    }

    public function edit(Post $post)
    {
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        $post->fill($request->all());
        $post->save();
        
        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->firstOrFail();

        $post->delete();

        return redirect()->route('site.blog');
    }
}
