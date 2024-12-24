<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            'badminton',
            'ibadah-minggu',
            'kebaktian-padang',
            'latihan-paduan-suara',
            'perayaan-natal',
            'retreat',
        ];

        return view('blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $availableBlogs = [
            'badminton',
            'ibadah-minggu',
            'kebaktian-padang',
            'latihan-paduan-suara',
            'perayaan-natal',
            'retreat',
        ];

        if (!in_array($slug, $availableBlogs)) {
            abort(404);
        }

        return view("blogposts.{$slug}");
    }
}
