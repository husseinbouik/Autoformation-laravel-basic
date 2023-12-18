<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Http\Requests\FormPostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Validator;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Blogcontroller extends Controller
{
    public function create(){
        $post = new Post();
        return view('blog.create',[
            'post'=> $post,
            'categories' => Category::select('id','name')->get(),
            'tags' => Tag::select('id','name')->get()
        ]);
        

    }

    public function store(FormPostRequest $request){
    //    dd($request->all());
    //    dd(session()->all());

    $post = Post::create($this->extractData( new Post() ,$request ));
    $post->tags()->sync($request->validated('tags'));
    return redirect()->route('blog.show',['slug'=> $post->slug,'post'=> $post->id])->with('success',"the article has been saved successfully");
    }
    public function edit( Post $post){
        return view('blog.edit',[
            'post'=> $post,
            'categories' => Category::select('id','name')->get(),
            'tags' => Tag::select('id','name')->get()
        ]);
    }

    public function update(Post $post,FormPostRequest $request){
// dd($request->validated('tags'));

// dd($imagePath);
        $post->update($this->extractData( $post ,$request ));
        $post->tags()->sync($request->validated('tags'));
    return redirect()->route('blog.show',['slug'=> $post->slug,'post'=> $post->id])->with('success',"the article has been updated successfully");

    }
private function extractData (Post $post,FormPostRequest $request):array { 
    $data =$request->validated();
    // dd($data);
// /** @var UploadedFile|null $image */    
    $image = $request->validated('image');
    if($image == null || $image->getError()){
return $data;
    }
    if($post->image){
        Storage::disk('public')->delete($post->image);
    }

    $data['image'] = $image->store('blog','public');
    return $data;
}
public function index(): View {



// $post = Post::all();

// $post = Post::has('tags','>',1)->get();
// $post->tags()->createMany([[
//     'name'=> 'Tag 1',
// ],[
//     'name'=> 'Tag 2',
// ]]);
// $tags = $post->tags()->where('name','Tag 1')->get();
// $tags = $post->tags()->detach(2);  //detach id and delete the relation
// $tags = $post->tags()->attach(2);  //attach id and  add a relation
// $tags = $post->tags()->sync([1]); //attach or detach related models

// $posts = Post::all();
// $posts = Post::with('category')->get();
// $category = Category::find(1);
// $post = Post::find(1);
// $post->category()->associate($category);
// $post->save();
// $category->posts()->where('id','>','10')->get();
// dd($category->posts);
// foreach($posts as $post){
// $category = $post->category?->name;
// }
// $post->category_id = 2 ;
// $post->save();
// dd($post->category->name);

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


        // \App\Models\User::create([
        // "name"=> "hussein",
        // "email"=> "husseinbouik@gmail.com",
        // "password"=> Hash::make("0000")

        // ]);
        // dd(Auth::user());
        return view("blog.index",[
            'posts' => \App\Models\Post::with('tags','category')->paginate(10),
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