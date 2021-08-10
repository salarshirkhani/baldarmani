@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{asset('css/vendor/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/blog-list.css')}}">
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2> وبلاگ</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> وبلاگ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-part">
    <div class="container">
        <div class="row content-reverse">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-title">
                                <h5>جستجو </h5>
                            </div>
                            <form action="{{route('search')}}" class="blog-src">
                                <input type="text" name="q" placeholder="جستجو...">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 m-auto">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-title">
                                <h5>پست های محبوب</h5>
                            </div>
                            <ul class="blog-suggest">
                               @foreach($posts as $item)  
                                <li>
                                    <div class="suggest-img">
                                        <a href="{{route('single',['id'=>$item->title])}}">
                                            <img src="{{ asset('images/'.$item['pic'].'/'.$item['pic'] ) }}" alt="{{$item->title}}">
                                        </a>
                                    </div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4>
                                                <a href="{{route('single',['id'=>$item->title])}}">{{$item->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date">
                                                <i class="far fa-calendar-alt"></i>
                                                <p>{{$item->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach       
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 m-auto">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-title">
                                <h5>دنبال کردن ما </h5>
                            </div>
                            <ul class="blog-icon">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/moayed_salmani_slp">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($posts as $item) 
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('images/'.$item['pic'].'/'.$item['pic'] ) }}" alt="{{$item->title}}">
                            </div>
                            <div class="blog-content">
                                <a href="{{route('single',['id'=>$item->id])}}" class="blog-avatar">
                                    <img src="images/avatar/01.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p>
                                            <a href="{{route('single',['id'=>$item->id])}}">{{$item->writer}}</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>{{$item->created_at}}</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4>
                                        <a href="{{route('single',['id'=>$item->id])}}">{{$item->title}}</a>
                                    </h4>
                                    {{$item->explain}}      
                               </div>
                                <a href="{{route('single',['id'=>$item->id])}}" class="blog-read">
                                    <span>ادامه مطلب</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination">
                            {{$posts->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection