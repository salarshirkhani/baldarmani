@extends('layouts.front')
@section('content')
        <section class="banner-part">
            <div class="container">
                <div class="banner-content">
                    <h1>با صحبت کردن درست #تاثیر کلام خود را بیشتر کنید</h1>
                    <p>گفتار درمانی روشی است تا طریه صحبت کردن خود را بهبود ببخشید و بتوانید قوی تر کار کنید و بیشتر تلاش کنید</p>
                    <a href="{{route('products')}}" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>نمایش تمام محصول ها</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="suggest-part">
            <div class="container">
                <div class="suggest-slider slider-arrow">
                    <div class="suggest-card">
                        <div class="suggest-img">
                            <img src="images/suggest/education.png" alt="car">
                        </div>
                        <div class="suggest-meta">
                            <h6>
                                <p> مقالات </p>
                            </h6>
                            <a href="https://www.iranmedslp.com/blog">مشاهده </a>
                        </div>
                    </div>
                    <div class="suggest-card">
                        <div class="suggest-img">
                            <img src="images/suggest/software.png" alt="furniture">
                        </div>
                        <div class="suggest-meta">
                            <h6>
                               <p>آموزش</p>
                            </h6>
                            <a href="https://www.iranmedslp.com/blog">مشاهده </a>
                        </div>
                    </div>
                    <div class="suggest-card">
                        <div class="suggest-img">
                            <img src="images/suggest/properties.png" alt="house">
                        </div>
                        <div class="suggest-meta">
                            <h6>
                                <p> پرونده الکترونیکی</p>
                            </h6>
                            <a href="https://www.iranmedslp.com/dashboard/customer/consultant/manage">مشاهده </a>
                        </div>
                    </div>
                    <div class="suggest-card">
                        <div class="suggest-img">
                            <img src="images/suggest/hospitality.png" alt="house">
                        </div>
                        <div class="suggest-meta">
                            <h6>
                                <p>فروشگاه</p>
                            </h6>
                            <a href="{{route('products')}}">مشاهده </a>
                        </div>
                    </div>             
                </div>
            </div>
        </section>
        <section class="section feature-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5">
                        <div class="section-side-heading">
                            <h2>
                                نیازهای خود را در بهترین موارد پیدا کنید <span>محبوب ترین مطالب</span>
                            </h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. .</p>
                            <a href="{{route('blog')}}" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>مشاهده همه مطلب ها</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div class="feature-item-slider slider-arrow">
                            @foreach($posts as $item) 
                            <div class="feature-card">
                                <div class="feature-img">
                                    <a href="#">
                                        <img src="{{ asset('images/'.$item['pic'].'/'.$item['pic'] ) }}" alt="{{$item->title}}">
                                    </a>
                                </div>
                                <div class="feature-badge">
                                    <p>ویژه </p>
                                </div>
                                <div class="feature-bookmark">
                                    <button type="button">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                                <div class="feature-content">
                                    <ol class="breadcrumb">
                                        <li>
                                            <span class="feature-cate sale">ویژه </span>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">گجت </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$item->title}} </li>
                                    </ol>
                                    <div class="feature-title">
                                        <h3>
                                            <a href="{{route('single',['id'=>$item->title])}}">{{$item->title}}</a>
                                        </h3>
                                    </div>
                                    <ul class="feature-meta">
                                        <li>
                                            <span>
                                                <small>توسط {{$item->writer}}</small>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <span>{!! Facades\Verta::instance($item->created_at)->formatDate() !!}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="feature-thumb-slider">
                            @foreach($posts as $item) 
                            <div>
                                <img src="{{ asset('images/'.$item['pic'].'/'.$item['pic'] ) }}" alt="{{$item->title}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section recomend-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2 style="background:url(images/title.png) no-repeat center; background-size:cover; background-size: contain; height: 93px;">
                                <span>آخرین محصولات</span>
                            </h2>
                            <p>آخرین محصولات سایت مارا در اینجا مشاهده کنید</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="recomend-slider slider-arrow">
                            @foreach($products as $item)  
                            <div class="product-card">
                                 <div class="product-head">
                                    <div class="product-img" style="background:url({{ asset('images/'.$item['pic'].'/'.$item['pic'] ) }}) no-repeat center; background-size:cover;">
                                        <i class="cross-badge fas fa-bolt"></i>
                                        <span class="flat-badge sale">ویژه </span>
                                        <ul class="product-meta">
                                            <li>
                                                <i class="fas fa-eye"></i>
                                                <p>264</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <p>4.5/7</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-tag">
                                        <i class="fas fa-tags"></i>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="#">محصولات </a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                        </ol>
                                    </div>
                                    <div class="product-title">
                                        <h5>
                                            <a href="{{route('product',['name'=>$item->name])}}">{!! \Illuminate\Support\Str::limit($item->explain, 70, ' ...') !!}</a>
                                        </h5>
										<ul class="product-location">
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                <p>{!! Facades\Verta::instance($item->created_at)->formatDate() !!}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-price">
                                            <h5>{{$item->price}} تومان</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-50">
                            <a href="{{route('products')}}" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>مشاهده تمامی محصولات</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="intro-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>درباره وب سایت گفتار درمانی ما</h2>
<p>گروه آموزشی- درمانی Iran-Med-SLP متشکل از درمانگران با سابقه کار بیشتر از 5 سال و ویزیت بیش از 12 هزار بیمار دارای اختلال بلع در بیمارستان‌های تهران، در سال 1399 تاسیس شده است. هدف اصلی ایجاد این گروه آگاه‌سازی مردم سرزمینمان ایران در مورد اختلالات بلع، عواقب آن و ارائه خدمت به بیماران نیازمند دریافت خدمات گفتار درمانی است. </p>
                            <a href="{{route('about')}}" class="btn btn-outline">
                                <i class="fas fa-plus-circle"></i>
                                <span>بیشتر درباره ما بخوانید</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

      