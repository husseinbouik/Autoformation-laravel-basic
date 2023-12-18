<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function () {
//     return 'Bonjour hussein';
// });

// Route::get('/blog', function () {
//     return [
//         "article => 'Article 1",
//     ];
// });

// Route::get('/blog', function ( ) {
//     return [
//         "name" => $_GET['name'],
//         "article" => "Article 1"
//     ];
// });


// Route::get('/blog', function (Request $request ) {
//     return [
//         // "name" => $request ->path() ,
//         // "name" => $request ->url() ,
//         // "name" => $request ->all() ,
//         'name'=> $request->input('name','hussein'),
//         "article" => "Article 1"
//     ];
// });

// route::prefix('/blabla')->group(function () {
// Route::get("/", function () {
//     return [
//         "link" => \route('blog.show',['slug'=> 'article','id'=> '12']),
//     ];
// })->name('blog.index');

// Route::get('/{id}-{slug}', function (string $id,string $slug, Request $request) {
//     return[
//         "slug" => $slug,
//         "id"=> $id,
//         "name" => "Tanger",
//     ];
// })->name('blog.show');
// });

// route::prefix('/blabla')->name('blabla.')->group(function () {
//     Route::get("/", function () {
//         return [
//             "link" => \route('show',['slug'=> 'article','id'=> '12']),
//         ];
//     })->name('index');
    
//     Route::get('/{id}-{slug}', function (string $id,string $slug, Request $request) {
//         return[
//             "slug" => $slug,
//             "id"=> $id,
//             "name" => "Tanger",
//         ];
//     })->name('show');
//     });
route::prefix('/blog')->name('blog.')->group(function () {
    Route::get("/", function (Request $request) {
$post = new \App\Models\Post();
$post->title = 'solicoders';
$post->content = 'description';
$post->slug = 'blog1';
// $post->save();
// $post =  \App\Models\Post::findorFail(2); // id = 2 
// $post =  \App\Models\Post::paginate(2);  // 2 items
// $post =  \App\Models\Post::paginate(2,['id','title']);  
// $post =  \App\Models\Post::WHERE('id','>',2)->get();  


//  return $post;
//  dd($post);

// edit item
// $post = \App\Models\Post::find(1);
// $post->title = 'soliCO';
// $post->content = 'DSCRA';
// $post->slug = 'BOOM';

// $post->save();

// delete item
// $post = \App\Models\Post::find(1);
// $post->delete();
// return $post ;

// create item 
 
$post = \App\Models\Post::create([
    'title'=> 'al 3a9l al mouodabir',
    'slug'=> 'boom tam tam ',
    'content'=>'superfragilisticexpialidocious'
]);

// $post = \App\Models\Post::WHERE('id','>',5)->update([
//     'title'=> 'al 3a9l al mouodabir',
//     'slug'=> 'boom tam tam ',
//     'content'=>'superfragilisticexpialidocious'
// ]);
// return \App\Models\Post::all() ;

// delete items 
// $post = \App\Models\Post::WHERE('id','>',5)->delete([
//     'title'=> 'al 3a9l al mouodabir',
//     'slug'=> 'boom tam tam ',
//     'content'=>'superfragilisticexpialidocious'
// ]);
// return \App\Models\Post::all() ;

return \App\Models\Post :: paginate(25);
    })->name('index');
    Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
        $post = \App\Models\Post :: findOrFail($id);

      /* redirect  to the right url   */ 

        if ($post->slug != $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
            }
            
        return $post;
        })->where ([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
        ])->name('show');
});
 