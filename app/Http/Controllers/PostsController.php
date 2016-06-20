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
        $this->middleware('auth')->only(['update']);
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

    public function store(Request $request)
    {
        $post = new Post($request->all());

        return view('blog.show', compact($post));
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

    public function create()
    {
        return view('blog.create');
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
