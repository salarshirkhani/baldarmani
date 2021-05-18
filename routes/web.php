<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'FrontController@index')->name('/');
Route::get('products', 'FrontController@products')->name('products');
Route::get('product/{id}', 'FrontController@Sproduct')->name('product');
Route::get('blog', 'FrontController@blog')->name('blog');
Route::get('single/{id}', 'FrontController@single')->name('single');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('search', 'FrontController@search')->name('search');

Auth::routes();

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware('auth')
    ->namespace('Dashboard')
    ->group(function() {
        Route::get('', 'IndexController@get')->name('index');
        Route::prefix('admin')
            ->name('admin.')
            ->middleware('user_type:admin')
            ->namespace('Admin')
            ->group(function() {
                Route::get('', 'IndexController@get')->name('index');

                Route::resource('slider-items', 'SliderItemController')->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
          
                Route::post('news/create', ['uses' => 'PostController@CreatePost','as' => 'news.create' ]);
                Route::get('news/create', ['uses' => 'PostController@GetCreatePost','as' => 'news.create']); 
                
                Route::get('news/manage', 'PostController@GetManagePost')->name('news.manage');
                Route::get('deletepost/{id}','PostController@DeletePost')->name('news.deletepost');  
                Route::get('updatepost/{id}','PostController@GetEditPost')->name('news.updatepost');
                Route::post('updatepost/{id}','PostController@UpdatePost')->name('news.updatepost');

                Route::post('product/create', ['uses' => 'ProductController@CreatePost','as' => 'product.create' ]);
                Route::get('product/create', ['uses' => 'ProductController@GetCreatePost','as' => 'product.create']); 
                Route::get('product/manage', 'ProductController@GetManagePost')->name('product.manage');
                Route::get('deleteproduct/{id}','ProductController@DeletePost')->name('product.deleteproduct');  
                Route::get('updateproduct/{id}','ProductController@GetEditPost')->name('product.updateproduct');
                Route::post('updateproduct/{id}','ProductController@UpdatePost')->name('product.updateproduct');      
 
                //Category Controller 
                Route::resource("categories", "CategoryController");

                //Consultant Controller
                Route::get('consultant/manage', 'ConsultantController@GetManagePost')->name('consultant.manage');
                Route::get('consultant/show/{id}','ConsultantController@ShowPost')->name('consultant.show'); 
                Route::post('consultant/answer/{id}','ConsultantController@AnswerPost')->name('consultant.answer'); 
           
            });

        Route::prefix('customer')
            ->name('customer.')
            ->middleware('user_type:buyer')
            ->namespace('Customer')
            ->group(function() {
                Route::get('', 'IndexController@get')->name('index');

                Route::post('consultant/create', ['uses' => 'ConsultantController@CreatePost','as' => 'consultant.create' ]);
                Route::get('consultant/create', ['uses' => 'ConsultantController@GetCreatePost','as' => 'consultant.create']); 
                Route::get('consultant/manage', 'ConsultantController@GetManagePost')->name('consultant.manage');
                Route::get('consultant/show/{id}','ConsultantController@ShowPost')->name('consultant.show'); 
            });

    });
