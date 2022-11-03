<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {

        $tittle = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by ' . $author->name;
        }

        return view('posts', [
            "tittle" => "All Posts" . $tittle,
            "active" => 'posts',
            //"posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => Post::with(['author', 'category'])->latest()->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "tittle" => 'Single Post',
            "active" => 'posts',
            "post" => $post
        ]);
    }
}