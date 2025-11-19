<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
    //return '<h1>Our Post page</h1>';
});
//Route::view('/post', 'post'); //alternate template vdisplay through view method

//change route name
// Route::get('/hello', function () {
//     return view('post');
//     //return '<h1>Our Post page</h1>';
// });


Route::get('/post/firstpost', function () {
    return view('firstpost');
    //return '<h1>Our Post page</h1>';
});


// Route::get('/post/{id?}', function (string $id=null) {    
//         return view('post', ['id' => $id]);    
// });

Route::get('/post/{id?}', function (string $id=null) {    
        return view('post', ['id' => $id]);    
})->whereNumber('id'); 
// Laravel Route Constraints
// http://localhost/post/10   -------  whereNumber('id')
// http://localhost/post/yahoobaba   -------  whereAlpha('name')
// http://localhost/post/news10   -------  whereAlphaNumeric('name')
// http://localhost/post/song   -------  whereln('category', ['movie', 'song'])
// http://localhost/post/@10   -------  where('id', '[@0-9]+') //Regular Expressions


//Laravel Name Route
Route::get('/about-us', function(){
    return view('about');

})->name('about');



Route::get('/contact-us', function(){
    return view('contact');

})->name('contact');

//old url to new url redirection
//Route::redirect('/contact-us', '/contact-new');


//Laravel Group Route
Route::prefix('/page')->group(function(){

    Route::get('gallery', function(){
        return view('gallery');
    });

    Route::get('slider', function(){
        return view('slider');
    });
});


//overwrite 404/page not found page
Route::fallback(function(){
    return '<h1>Page not Found</h1>';
});