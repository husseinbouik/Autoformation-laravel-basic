<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class Blogcontroller extends Controller
{
    public function index(BlogFilterRequest $request ): View {

        dd($request->validated());
        // $validator = Validator::make(
        //     [
        //         'title'=> 'jugiufgufgeiugfe',
        //     ],[
        //         'title'=> 'required|min:8',

        //     ]
        
        //     );
            // dd($validator->errors());
            // dd($validator->validated());

        return view("blog.index",[
            'posts' => \App\Models\Post::paginate(2),

        ]);



    }
    public function show(string $slug ,string $id): RedirectResponse | View
    {
    $post = \App\Models\Post::findorfail($id);
     /* redirect  to the right url   */ 
    if ($post->slug != $slug) {
        return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
            }
            return view("blog.show",[
                'post' => $post,
            ]) ;
    }
}