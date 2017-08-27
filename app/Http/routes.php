<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function ()
//{
//    return view('welcome');
//
//});
//
//Route::get('/about', function ()
//{
//    return 'Hi ABOUT ME page';
//
//});
//
//Route::get('/contact', function ()
//{
//    return 'HI, CONTACT ME page';
//
//});
//
//Route::get('/post/{id}/{name}', function ($id, $name)
//{
//    return 'This is post number ' . $id . " " . $name;
//});
//

//Route::get('/post/{id}', 'PostsController@index');
//
//
//Route::resource('posts', 'PostsController');

//Route::get('/admin/posts/example', array('as'=>'admin.home' ,function ()
//{
//    $url = route('admin.home');
//    return 'This url is '. $url;
//}));

//
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');


//use Illuminate\Support\Facades\DB;
//
//Route::get('/insert', function(){
//    DB::insert('insert into posts (title, content) values (?, ?)',['PHP with Laravel', 'Dayle']);
//});

//Route::get('/read', function(){
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    return var_dump($results);
////    foreach ($results as $post){
////        return $post->title;
////    }
//});

Route::get('/update', function(){

    $updated = DB::update('update posts set title = "update title" WHERE id=?', [1]);
    return $updated;
});

// Middleware //

Route::group(['middleware' => ['web']], function ()
{
    //
});
