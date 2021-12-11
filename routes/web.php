<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::namespace(value:'Site')->group(function(){
//    Route::get(uri:'/', action:'HomeController');
// });
// Route::namespace(value:'Site')->group(function(){
// 	// Route::get(uri:'/', action:'HomeController');
//     return view(view:'site.home.index');
// });


// Route::namespace(value:'Site')->group(function(){
//     Route::get('/',[HomeController::class, 'index']);
// });

Route::namespace('Site')->group(function(){
    
    Route::get('/', 'HomeController')->name(name:'site.home');
    
    Route::get('servicos', 'CategoryController@index')->name('site.products');
    Route::get('servicos/{category:slug}', 'CategoryController@show')->name('site.products.category');

    Route::get('blog', 'BlogController')->name('site.blog');
    Route::get('post/{post:id}', 'BlogController@editCategory')->name('site.show.post');
    Route::view(uri:'sobre', view:'site.about.index')->name('site.about');

    Route::get('contato', 'ContactController@index')->name('site.contact');
    Route::post('contato', 'ContactController@form')->name('site.contact.form');;
});

Route::namespace('Cms')->group(function(){
    
    Route::get('cms', 'CmsHomeController@index')->name(name:'cms.home');
    Route::get('entrar', 'CmsRegister@index')->name(name:'cms.login.index');
    Route::post('entrar', 'CmsRegister@login')->name(name:'cms.login.post');
    Route::get('cadastrar', 'CmsRegister@register')->name(name:'cms.register.index');
    Route::post('cadastrar', 'CmsRegister@create')->name(name:'cms.register.post');
    Route::get('logout', 'CmsRegister@logout')->name(name:'cms.logout');

    Route::get('edit/categoria/{category:id}', 'CmsCategoryController@editCategory')->name('cms.edit.category');
    Route::get('edit/servico/{product:id}', 'CmsCategoryController@editService')->name('cms.edit.service');
    Route::get('create/categoria', 'CmsCategoryController@createCategory')->name('cms.create.category');
    Route::get('create/servico', 'CmsCategoryController@createService')->name('cms.create.service');

    Route::get('edit/post/{post:id}', 'CmsBlogController@editPost')->name('cms.edit.post');
    Route::get('create/post', 'CmsBlogController@createPost')->name('cms.create.post');

});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
