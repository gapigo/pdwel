<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CmsBlogController extends Controller
{
    /**
    * @param  $post
    */
    public function editPost(Post $post){
        // dd($post);
        $url = Storage::url($post->image);
        $content = htmlspecialchars_decode($post->content);
        // $post->image->url = $url;
        // dd($post->image->url);
        // dd($content);
        return view('cms.post.edit', ['post' => $post, 'image_url' => $url]);
    }

    public function createPost(){
        return view('cms.post.create');
    }

    public function updatePost(Request $request){
        
        
        if($request->id == 0)
            $post =  new Post;
        else
            $post =  Post::find($request->id);
        if ($request->file('image'))
            // Salva imagem
            $image_path = $request->file('image')->store('public/blog_thumbs');
        else
            $image_path = $post->image;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->image = $image_path;
        $post->content = $request->content;
        $post->save();
        // dd($request);
        // return view('cms.home');
        $post_id = $post->id;
        // return redirect('post/'.$post_id);
        return redirect()->route('cms.home', ['blog' => 1]);
    }

    public function deletePost(Post $post){
        $post->delete();
        // dd('Ola mundo');
        // return redirect('cms');
        return redirect()->route('cms.home', ['blog' => 1]);
    }
}
