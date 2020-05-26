<?php


namespace App\Http\Controllers;




use App\Post;
use Illuminate\Support\Facades\DB;

class BlogController
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        $posts = Post::latest()->paginate(2);
        return view('about', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::query()
                    ->where('slug', '=', $slug)
                    ->first();
//        dd($post);

//        $post = DB::table('posts')
//                  ->where('slug', '=', $slug)
//                  ->first();

        if ( !$post) {
            abort(404, 'Sorry post does not exist');
        }

        return view('blog', ['post' => $post]);
    }
}
