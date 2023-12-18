<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Http\Requests\FormPostRequest;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Validator;

class Blogcontroller extends Controller
{
    public function create(){
        $post = new Post();
        return view('blog.create',[
            'post'=> $post
        ]);
        

    }

    public function store(FormPostRequest $request){
    //    dd($request->all());
    //    dd(session()->all());
    $post = Post::create($request->Validated());
    return redirect()->route('blog.show',['slug'=> $post->slug,'post'=> $post->id])->with('success',"the article has been saved successfully");
    }
    public function edit( Post $post){
        return view('blog.edit',[
            'post'=> $post
        ]);
    }

    public function update(Post $post,FormPostRequest $request){

        $post->update($request->validated());
    return redirect()->route('blog.show',['slug'=> $post->slug,'post'=> $post->id])->with('success',"the article has been updated successfully");

    }
    public function index(): View {
        // dd($request->Validated()); 
        // $Validator = Validator::make([
        //     'title'=> 'uiguiui',
        //     'content' => 'azeaz',

        // ],[
        //     // 'title'=> 'required|min:8',
        //     // 'title'=>['required','min:8','regex'],
        //     // 'title'=>[Rule::unique('posts')->ignore(2)],
        //     'title'=>['unique:posts'],

        // ]);
        // // dd($Validator);
        // // dd($Validator->fails()); // return true or false
        // // dd($Validator->errors()); //true or return a message of validation  
        // dd($Validator->Validated()); //return the title or 'The page isn’t redirecting properly'

        return view("blog.index",[
            'posts' => \App\Models\Post::paginate(2),
        ]);



    }
    public function show(string $slug ,Post $post): RedirectResponse | View
    {
    if ($post->slug != $slug) {
        return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
            }
            return view("blog.show",[
                'post' => $post,
            ]) ;
    }
}