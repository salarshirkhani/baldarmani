@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/contact.css')}}">
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>تماس با ما</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>پیدا کردن</h3>
                    <p>
                        خیابان شریعتی پس از دولت<span>ایران تهران</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <i class="fas fa-phone-alt"></i>
                    <h3>در تماس باشید</h3>
                    <p>
                        021-88213163 (رایگان) <span>021-91083808</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <h3>ارسال ایمیل</h3>
                    <p>
                        contact@example.com <span>info@example.com</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام شما">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="ایمیل شما">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="موضوع شما">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="پیام شما"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-btn">
                                <button class="btn btn-inline">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>ارسال پیام</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection