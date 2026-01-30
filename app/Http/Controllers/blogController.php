<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class blogController extends Controller
{

    public function index()
    {
        $blogs = Blog::with('categorie')->get();
        $category = Categorie::all();
        return view('blogs.index', compact('blogs', 'category'));    
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }
    public function filter(Request $request)
    {
        echo"test";
        dd($request);
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
