<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {   
        /* $posts = Post::latest(); */
        /* $posts = Post::where('slug', $test1); */

        return view('posts', [ /* return view post lagi... */
            "title" => "All Posts",
            "active" => 'All Posts', /* >>>>> dilanjut ke filter... paginate.. baru muncul */
            "posts" => Post::oldest()->filter()->filter2()->filter3()->paginate(20) /* function scopeFilter2() disini itu cuma perlu dipanggil filter2()... jadi.. ketika kita teken search, misal aja nih ya ud ke submit.. dia bakal... */
        ]);
    }
    
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
