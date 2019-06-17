 <?php
use App\Post;
 use App\Tag;
 use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Video;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/about', function () {
    return "Basic About Page";
});

Route::get('/contact', function () {
    return "Basic Contact Page";
});
Route::get('/post/{id}/{name}', function($id,$name){
    return "This is post no: ".$id ." ". $name;
    
});
Route::get('admin/posts/example',array('as'=>'admin.home',function(){
   $url=route('admin.home');
   
    return "This url is ".$url;
}));*/
/*Route::get('/post/{id}', 'PostsController@index'
    
);*/
//Route::resource('posts', 'PostsController');
//Route::get('/contact','PostsController@contact');
//Route::get('posts/{id}/{name}/{password}', 'PostsController@showPost');

 //Raw SQL Query insertion of data

//  Route::get('/insert', function(){
//     \Illuminate\Support\Facades\DB::insert('insert into posts(title, body) values(?, ?)', ['new features', 'Get the latest feature explained at laravel.com']);
//
// });
 /*
Route::get('/read', function (){
    $results=\Illuminate\Support\Facades\DB::select('select *from posts where id=?',[1]);
    //This returns an array
    //return $results;
    return var_dump($results);
//    foreach($results as $result ){
//        return $result->title ."</br>";
//        return $result->body;

//    }
});
 */
// Route::get('/update', function(){
//     $updated=\Illuminate\Support\Facades\DB::update('update posts set title="up" where id=?',[1]);
//     return $updated;
//
// });

// Route::get ('/delete', function(){
//     $deleted=DB::delete('delete from posts where id =?',[2] );
//     return $deleted;
// });

 //Eloquent Object Relational Mapper

 //reading and finding data


// Route::get('/read', function(){
//     $posts= Post::all();
//     foreach($posts as $post){
//         return $post->title;
//    }
// });

// Route::get('/find', function(){
//     $post=Post::find(2);
//     return $post->title;
// });

// Route::get('/findWhere', function(){
//    $post= Post::where('id',4)->orderBy('id', 'desc')->take (1)->get();
//
//    return $post;
// });

// Route::get('/findMore', function(){
//    $post= Post::findOrFail(3);
//    return $post;
////     Another method to use more functions
////     $post=Post::where('users_count','<', 50)->firstOrFail();
//
// });

// //insert data
// Route::get ('/basicInsert', function(){
//
//     $post = new Post;
//
//     $post->title= "worray the Eloquent insertion";
//     $post->body="This is the coolest feature so far";
//
//     $post->save();
//     return "hollah";
//
// });
 //update data

// Route::get('/basicUpdate', function(){
//
//     $post=Post::find(4);
//     $post->title="hey there";
//     $post->body="It's me again, hollah";
//     $post->save();
// });

// Route::get('/create', function(){
//
//     Post::create(['title'=>'The create method', 'body'=>'This is the best ever actually']);
// });

// Route::get('/updateMass', function(){
//     Post::where('id', 4)->where('is_admin',1)->update(['title'=>'The new Era is here with us', 'body'=>'And the era is PHP with laravel']);
// });

//delete no 1
// Route::get('/delete', function(){
//     $post=Post::find(4);
//
//     $post->delete();
//     return 'deleted';
// });

//delete no2

//Route::get('/delete2', function(){
//   Post::destroy(3);
//});
//
// //deleting multiple records
// Route::get('/delete3', function(){
//     Post::destroy([5,6]);
//     //post::where('is_admin', 0)->delete();
// });

// Route::get('/softDelete', function(){
//     Post::find(10)->delete();
// });
//
// Route::get('/readsoftDelete', function(){
////     $post=Post::find(9);
//     $post=Post::withTrashed()->where('is_admin',0)->get();
////     $post=Post::onlyTrashed()->where('is_admin',0)->get();
//     return $post;
//
// });
//
// Route::get('/restore',function(){
//     Post::withTrashed()->restore();
// });
// Route::get('/forceDelete', function(){
//     Post::withTrashed()->forceDelete();
// });

 //Eloquent Relationship
 //One to One Relationship

// Route::get('user/{id}/post', function($id){
//
//     $user=User::find($id)->post;
//     return $user->title;
//
// });

//// reverse insertion
// Route::get('post/{id}/user', function($id){
//      return Post::find($id)->user->name;
// });


 //has many relationship
// Route::get('posts', function()  {
//     $user=User::find(1);
//
//     foreach($user->posts as $post) {
//        echo $post->title ."<br/>";
//        echo $post->body ."<br/>";
//     }
// });
//
// //has many inverse
// Route::get('users', function(){
//     return Post::find(2)->name;
// });

 //many to many
// Route::get('user/{id}/roles', function($id){
//
////  return User::find($id)->roles()->orderBy('id', 'name')->get();
//     return User::find($id)->roles;
// });
//

// //inverse of many to many relationship
// Route::get('/roles/{id}/user', function($id){
//      return Role::find($id)->users;
// });

// Accessing the intermediate table/ pivot/ lookup table

// Route::get('user/pivot', function(){
//     $user=User::find(1);
//
//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }
// });

// Route::get('user/country', function(){
//     $country=Country::find(4);
//
//     foreach($country->posts as $post){
//         echo $post->title ."<br/>";
//         echo $post->body ."<br/>";
//
//     }
// });
 //polymorphic relations
// Route::get('user/photos', function(){
//     $user=User::find(1);
//     foreach( $user->photos as $photo){
//         return $photo->path;
//     }
//
//
// });
// Route::get('post/photos', function(){
//   $post=Post::find(1);
//     foreach( $post->photos as $photo){
//         return $photo;
//     }
//
//
// });
//Route::get('photos/{id}/post', function($id){
//    $photos=Photo::findOrFail($id);
//
//        return $photos->imageable;
//
//
//});

 //Polymorphic many to many relationship

// Route::get('post/tag', function(){
//     $post=Post::find(1);
//     foreach($post->tags as $tag){
//         echo $tag->name;
//     }
// });
// Route::get('video/tag', function(){
//     $video= Video::find(2);
//     foreach($video->tags as $value){
//         echo $value->name;
//     }
// });


//  //inverse of polymorphic many to many relationship

//  Route::get('tag/post', function(){
//      $tag=Tag::find(1);

//      foreach($tag->posts as $post){
//          echo $post->title;
//      }
//  });

Route::get('/posts', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/index', 'PostsController@index');
Route::get('/show/{post}', 'PostsController@show');
Route::get('/edit/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');
Route::delete('/delete/{post}/destroy', 'PostsController@destroy');
// Route::get('/posts', 'PostsController');