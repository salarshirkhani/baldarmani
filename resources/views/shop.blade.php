@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{asset('css/vendor/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/grid-list.css')}}">
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>محصولات</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">لیست گرید</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ad-list-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
               <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                             <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                               <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 card-grid">
                    <div class="product-card">
                         <div class="product-head">
                            <div class="product-img" style="background:url(images/product/03.jpg) no-repeat center; background-size:cover;">
                                <i class="cross-badge fas fa-bolt"></i>
                                <span class="flat-badge sale">ویژه </span>
                                <ul class="product-meta">
                                    <li>
                                        <i class="fas fa-eye"></i>
                                        <p>264</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mouse"></i>
                                        <p>134</p>
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
                                        <a href="#">ثابت </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">کتاب ها </li>
                                </ol>
                            </div>
                            <div class="product-title">
                                <h5>
                                    <a href="rightbar-details.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a>
                                </h5>
                                <ul class="product-location">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>30 دقیقه قبل</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <div class="product-price">
                                    <h5>47000 تومان</h5>
                                    <span>/ با تخیف</span>
                                </div>
                                <ul class="product-widget">
                                    <li>
                                        <a href="compare.html" class="tooltip">
                                            <i class="fas fa-compress"></i>
                                            <span class="tooltext top">مقایسه کردن </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="tooltip">
                                            <i class="far fa-heart"></i>
                                            <span class="tooltext top">نشانک </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link active" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">...</li>
                    <li class="page-item">
                        <a class="page-link" href="#">67</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection