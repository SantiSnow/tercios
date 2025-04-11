<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $outstanding = Post::where('outstanding', true)->orderBy('id', 'desc')->first();
        return Inertia::render('Blog', [
            'post' => $outstanding,
            'posts' => Post::where('id', '!=', $outstanding->id)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function getPost($id)
    {
        $post = Post::findOrFail($id);

        return Inertia::render('Post', [
            'post' => $post,
            'social_title' => str_replace(' ', '%20', $post->title),
            'social_preview' => str_replace(' ', '%20', $post->preview),
        ]);
    }
}
