<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        if (Gate::denies('new-blog')) {
            return redirect('/');
        }

        return view('blog.new');
    }
}
