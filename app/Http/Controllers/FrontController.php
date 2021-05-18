<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Post;
use App\SliderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;

class FrontController extends Controller
{

    public function index() {

        return view('welcome',[
            'products' => Product::orderBy('id','desc')->paginate(6),
            'categories' => Category::whereNull('parent_id')->with('allChildren')->get(),
            'posts' => Post::orderBy('id','desc')->paginate(10)
        ]);

    }

    public function products() {

        return view('shop',[
            'products' => Product::orderBy('id','desc')->paginate(16),
            'categories' => Category::whereNull('parent_id')->with('allChildren')->get(),
        ]);

    }

    public function Sproduct($id) {
        $item=Product::find($id);
        return view('product',[
            'categories' => Category::whereNull('parent_id')->with('allChildren')->get(),
            'item' => $item,
        ]);

    }

    public function blog() {

        return view('blog',[
            'categories' => Category::whereNull('parent_id')->with('allChildren')->get(),
            'posts' => Post::orderBy('id','desc')->paginate(10)
        ]);

    }

    public function single($id) {
        $item=Post::find($id);
        $related_posts = Post::inRandomOrder()->get();
        return view('single',[
            'categories' => Category::whereNull('parent_id')->with('allChildren')->get(),
            'item' => $item,
            'related_posts' => $related_posts,         
        ]);

    }

    public function contact() {

        return view('contact');

    }

    //SEARCH FORM 

    private function escape_like(string $value, string $char = '\\'): string
    {
        return str_replace(
            [$char, '%', '_'],
            [$char.$char, $char.'%', $char.'_'],
            $value
        );
    }

    public function search(request $request)
    {
        $data = $request->validate([
            'q' => 'sometimes|string',
        ]);
        $products = Product::where('name',$data['q'])->orderBy('id','desc')->paginate(16);
        return view('shop',['products' => $products, 
        'categories' => Category::whereNull('parent_id')->with('allChildren')->get()]);
    }

}
