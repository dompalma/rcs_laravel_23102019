<?php

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
    $posts = \App\Post::get();

    // $post_by_id = \App\Post::find(1);
    $few_posts = \App\Post::take(3)->get();

    $data = [
        'myposts' => $few_posts,
        'title' => 'BaltHIV',
    ];

    return view('pages.home', $data);
});


Route::get('/news', function () {
    $posts = \App\Post::get();
    $first_post = $posts->pull(0);

    $data = [
        'myposts'    => $posts,
        'first_post' => $first_post,
        'title' => 'BaltHIV jaunumi',
    ];


    return view('pages.posts', $data);
});


Route::get('/contacts', function () {
    $posts = \App\Post::get();
    $data=[
      'title' => 'BaltHIV Kontakti',
    ];

    return view('pages.contact',$data);
});


Route::get('/news/{id}', function ($id) {

    $one_post = \App\Post::find($id);

    if ($one_post == null){
        abort(404);
    }

    $data = [
        'my_one_post' => $one_post,
        'title' => 'BaltHIV ieraksts',
    ];
    return view('pages.posts--single', $data);
});

Route::get('/contactS', 'SendEmailController@index');

Route::post('/contactS/send', 'SendEmailController@send');
