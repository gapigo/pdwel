<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CmsBlogController extends Controller
{
    /**
    * @param  $post
    */
    public function editPost(Post $post){
        dd($post);
        return view('cms.post.edit', ['Product' => $post]);
    }

    public function createPost(){
        return view('cms.post.create');
    }
}
