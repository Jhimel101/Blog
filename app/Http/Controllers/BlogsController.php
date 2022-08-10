<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
// use Illuminate\Support\Str;
// use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Comment;



class BlogsController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create(){
        return view('blogs.create');
    }
    
    public function store(Request $request){
        $input = $request-> all();

        $input['slug'] = Str::slug($request->title);

        $blog = Blog::create($input);
        $blog->slug = Str::slug($input['slug']);
        // $blog = new Blog();
        // $blog -> title = $request->title;
        // $blog -> description = $request->description;
        // $blog->save();
        return redirect('/blogs')->with('status', 'Blog created successfully');
    }

    public function show($blog){
        $blog= Blog::findOrFail($blog);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id){
        $input = $request-> all();
        $blog = Blog::findOrFail($id);
        $blog ->update($input);
        $blog->slug = Str::slug($input['slug']);
        return redirect('blogs');
    }

    public function delete(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('blogs');
    }
}
