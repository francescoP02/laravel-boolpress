<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with(['category'])->get();
        // $posts_with_categories = [];
        // foreach ($posts as $post) {
        //     $category = $post->category;
        //     $post['category'] = $category;
        //     $posts_with_categories[] = $post;
        // }

        return response()->json([
            'success' => true,
            'results' => $posts //_with_categories,
        ]);
    }

    public function show($slug) {
        $post = Post::where('slug', '=', $slug)->with(['category', 'tags'])->first();
        if ($post) {
            return response()->json([
                'success' => true,
                'results' => $post
            ]);
        }
        return response()->json([
            'success' => false,
            'error' => 'Nessun post trovato'
        ]);
    }
}
