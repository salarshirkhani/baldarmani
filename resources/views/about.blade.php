@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/contact.css')}}">
<section class="single-banner" style="background-image: url({{asset('images/products.jpg')}}) ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content" >
                    <h2>درباره ی ما</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('/')}}">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-part">
    <div class="container">
        <div class="row">
             <div class="col-lg-12">
                <div class="contact-map">
                    <p>گروه آموزشی- درمانی Iran-Med-SLP متشکل از درمانگران با سابقه کار بیشتر از 5 سال و ویزیت بیش از 12 هزار بیمار دارای اختلال بلع در بیمارستان‌های تهران، در سال 1399 تاسیس شده است. هدف اصلی ایجاد این گروه آگاه‌سازی مردم سرزمینمان ایران در مورد اختلالات بلع، عواقب آن و ارائه خدمت به بیماران نیازمند دریافت خدمات گفتار درمانی است. همچنین جهت ارتقاء سطح کیفی خدمات گفتاردرمانی در سطح کشور، آموزش‌هایی را برای همکاران گفتاردرمانگر شاغل در بیمارستان‌ها و سایر محیط‌های درمانی تدارک دیده است. کادر درمان این گروه متشکل از درمانگرانی است که در بیمارستان‌های بزرگ تهران مانند عرفان، لاله، تهران، نیکان غرب آموزش دیده اند و به صورت تخصصی در زمینه اختلال بلع فعالیت می‌کنند. استفاده از ابزارهای با کیفیت تشخیصی و درمانی در زمینه اختلالات بلع و همکاری با مجموعه‌ای از پزشکان و متخصصان باتجربه از ویژگی‌های خاص گروهIran-Med-SLP است</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection