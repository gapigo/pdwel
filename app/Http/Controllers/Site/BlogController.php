<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BlogController extends Controller
{
    // /**
    //  * Handle the incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function __invoke(Request $request)
    // {
    //     return view(view:'site.blog.index');
    // }
    /**
    * @param  $request
    */
    public function index(Request $request){
        // dd($post);
        // return view('cms.post.edit', ['Product' => $post]);
        // dd(Post::all()->toArray());
        // dd(Post::orderBy('id', 'DESC')->get());
        // dd(Post::orderBy('id', 'DESC')->get()->toArray());
        // $posts = Post::orderBy('id', 'DESC')->get()->toArray();
        $posts = Post::orderBy('id', 'DESC')->get();
        $tamanho = count($posts);
        if ($tamanho == 0){
            $last = false; $recent = false; $old_posts = false;
        }
        elseif ($tamanho == 1){
            $last = $posts[0]; $recent = false; $old_posts = false;
        }
        elseif ($tamanho <= 3){
            $posts_aux = $posts;
            $ultimo_elemento = $posts_aux->shift();
            $last = $ultimo_elemento; $recent = $posts_aux; $old_posts = false;
        }
        else {
            $posts_aux = $posts;
            $ultimo_elemento = $posts[0];
            // $recentes = array_slice($posts, 1, 3);
            // $antigos = array_slice($posts, 3, $tamanho);
            $recentes = $posts->slice(1, 2);
            $antigos = $posts->slice(3);
            // dd($recentes);
            $last = $ultimo_elemento; $recent = $recentes; $old_posts = $antigos;
        }
        // dd($last['image']);
        // dd(Storage::url($last['image']));
        // $dt = Carbon::now();
        // echo $dt->formatLocalized('%A %d %B %Y');
        // date_default_timezone_set('America/Sao_Paulo');
        // setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        // setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        // // dd($dt->formatLocalized('%A, %d %B %Y'));
        // $formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        // echo $formatter->format(time());
        // dd($last['created_at']->format('d/m/Y H:i:s'));
        return view('site.blog.index', ['last' => $last, 'recent' => $recent, 'old_posts' => $old_posts]);
    }

    /**
    * @param  $post
    */
    public function showPost(Post $post){
        return view('site.blog.post', ['post' => $post]);
    }
}
