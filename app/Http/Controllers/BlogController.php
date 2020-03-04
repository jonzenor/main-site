<?php

namespace App\Http\Controllers;

use Gate;
use App\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();

        return view('blog.index', [
            'blogs' => $blogs,
        ]);
    }

    public function create()
    {
        if (Gate::denies('new-blog')) {
            return redirect('/');
        }

        return view('blog.new');
    }

    public function store(Request $request)
    {
        if (Gate::allows('new-blog')) {

            $this->validate($request, [
                'title' => 'required|string|max:100',
            ]);

            $slug = Str::slug($request->title, '-');
            $content = request('blog-trixFields');
            
            $blog = new Blog();

            $blog->title = $request->title;
            $blog->slug = $slug;
            $blog->content = $content['content'];

            $blog->save();
        }

        return redirect()->route('blog');
    }

    public function show($slug)
    {
        $post = Blog::where('slug', '=', $slug)->first();

        if (!$post) {
            return redirect('/');
        }

        return view('blog.view', [
            'blog' => $post,
        ]);
    }
}
