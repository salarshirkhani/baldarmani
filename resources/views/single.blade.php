@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{asset('css/custom/blog-details.css')}}">
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>{{$item->title}}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="blog-list.html">وبلاگ  </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$item->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-details-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="blog-details-title">
                    <h2>
                        <a href="{{route('single',['id'=>$item->id])}}">{{$item->title}}</a>
                    </h2>
                </div>
                <ul class="blog-details-meta">
                    <li>
                        <a href="#">
                            <i class="far fa-user"></i>
                            <p>{{$item->writer}}</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('single',['id'=>$item->id])}}">
                            <i class="far fa-calendar-alt"></i>
                            <p>{{$item->created_at}}</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('single',['id'=>$item->id])}}">
                            <i class="far fa-folder-open"></i>
                            <p>گفتار درمانی</p>
                        </a>
                    </li>
                </ul>
                <div class="blog-details-image">
                    <img src="{{ asset('images/'.$item['pic'].'/'.$item['pic'] ) }}" alt="{{$item->title}}">
                </div>
                <div class="blog-details-content">
                    <div class="description">
                        {{$item->explain}}
                    </div>
                    <div class="sub-content">
                        {!!$item->content!!}
                </div>
                <div class="blog-details-widget">
                    <ul class="tag-list">
                        <li>
                            <h4>برچسب ها:</h4>
                        </li>
                        <li>
                            <a href="#">ازدحام جمعیت </a>
                        </li>
                        <li>
                            <a href="#">جشن </a>
                        </li>
                        <li>
                            <a href="#">کنسرت </a>
                        </li>
                    </ul>
                    <ul class="share-list">
                        <li>
                            <h4>اشتراک:</h4>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://iranmedslp.com/single/{{$item->id}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/share?text={{$item->title}}&url=http://iranmedslp.com/single/{{$item->id}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://telegram.me/share/url?url=http://iranmedslp.com/single/{{$item->id}}">
                                <i class="fab fa-telegram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://web.whatsapp.com/send?text=http://iranmedslp.com/single/{{$item->id}}">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="blog-details-author">
                    <div class="author-intro">
                        <a href="#">
                            <img src="{{asset('images/avatar/01.jpg')}}" alt="author">
                        </a>
                        <h4>
                            <a href="#">ادمین</a>
                        </h4>
                        <p>
                            <a href="#">www.iranmedslp.com</a>
                        </p>
                    </div>
                    <div class="author-content">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-telegram"></i>
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
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ Storage::url('images/'.$item->pic.'/'.$item->pic) }}" alt="blog">
                                <div class="blog-overlay">
                                    <span class="advertise">تبلیغات</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="{{asset('images/avatar/01.jpg')}}" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p>
                                            <a href="#">میلون محمود </a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>بهمن 1399</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4>
                                        <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</a>
                                    </h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است....</p>
                                </div>
                                <a href="#" class="blog-read">
                                    <span>ادامه مطلب</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ Storage::url('images/'.$item->pic.'/'.$item->pic) }}" alt="blog">
                                <div class="blog-overlay">
                                    <span class="safety">ایمنی </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="{{asset('images/avatar/01.jpg')}}" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p>
                                            <a href="#">علی انصاریان فقید</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>بهمن 1399</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4>
                                        <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</a>
                                    </h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است....</p>
                                </div>
                                <a href="#" class="blog-read">
                                    <span>ادامه مطلب</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-details-navigate">
                            <a href="#">
                                <i class="fas fa-long-arrow-alt-left"></i>
                                <span>پست قبلی</span>
                            </a>
                            <a href="#">
                                <span>پست بعدی</span>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection