<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function getPosts()
    {
        return Inertia::render('Admin/Posts/Posts',[
            'posts' => Post::orderBy('id', 'desc')->paginate(25),
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Posts/Create',[]);
    }

    public function store(Request $request)
    {
        /*
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'preview' => 'required',
            'body' => 'required',
            'seo_title' => 'required',
            'seo_meta_description' => 'required',
            'seo_meta_tags' => 'required',
        ]);*/

        $image_name = Str::random(25).$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/posts', $image_name);

        $post = new Post();

        $post->title = $request->title;
        $post->image = $image_name;
        $post->preview = $request->preview;
        $post->content = $request->body;
        $post->seo_title = $request->seo_title;
        $post->seo_meta_description = $request->seo_description;
        $post->seo_meta_tags = $request->seo_tags;
        $post->outstanding = $request->outstanding;

        $post->save();

        return Inertia::render('Admin/Posts/Posts',[
            'posts' => Post::orderBy('id', 'desc')->paginate(25),
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('Admin/Posts/Edit',[
            'post' => Post::findOrFail($id),
        ]);
    }

    public function save(Request $request)
    {
        $post = Post::find($request->id);
        if($request->file('image'))
        {
            $image_name = Str::random(25).$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/posts', $image_name);
            $post->image = $image_name;
        }

        $post->title = $request->title;
        $post->preview = $request->preview;
        $post->content = $request->body;
        $post->seo_title = $request->seo_title;
        $post->seo_meta_description = $request->seo_description;
        $post->seo_meta_tags = $request->seo_tags;
        $post->outstanding = $request->outstanding;

        $post->save();

        return Inertia::render('Admin/Posts/Posts',[
            'posts' => Post::orderBy('id', 'desc')->paginate(25),
        ]);
    }



    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return Inertia::render('Admin/Posts/Posts',[
            'posts' => Post::orderBy('id', 'desc')->paginate(25),
        ]);
    }
}
