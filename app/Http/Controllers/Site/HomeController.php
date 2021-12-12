<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $posts = $posts->slice(0, 3);
        // dd($posts);

        return view('site.home.index', ['posts' => $posts]);
    }
}
