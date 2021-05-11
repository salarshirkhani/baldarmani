<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Service;
use App\SliderItem;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index() {

        return view('welcome');

    }

    public function products() {

        return view('shop');

    }

    public function Sproduct() {

        return view('product');

    }

    public function blog() {

        return view('blog');

    }

    public function single() {

        return view('single');

    }

    public function contact() {

        return view('contact');

    }

}
