<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CmsHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $name = $request->user()->name;
        $categories = Category::orderBy('id', 'DESC')->get();
        $posts = Post::orderBy('id', 'DESC')->get();

        // $term = Input::get('term', false);

        return view('cms.home.index', ['categories' => $categories,
                                       'posts' => $posts, 
                                       'blog' => $request->blog]);
    }

}
