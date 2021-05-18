<!DOCTYPE html>
<html lang="fa_IR">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Salar shirkhani">
        <meta name="name" content="بلع درمانی">
        <meta name="type" content="وب سایت آموزشی">
        <title>صفحه اصلی - گفتار درمانی</title>
        <link rel="icon" href="{{asset('images/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('fonts/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom/index.css')}}">
    </head>
    <body>
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-left">
                        <ul class="header-widget">
                            <li>
                                <button type="button" class="header-menu">
                                    <i class="fas fa-align-left"></i>
                                </button>
                            </li>
                            <li>
                                <a href="{{route('/')}}" class="header-logo">
                                    <img src="images/logo.png" alt="logo">
                                </a>
                            </li>
                            <li>
                                <a href="{{route('login')}}" class="header-user">
                                    <i class="fas fa-user"></i>
                                    <span>ورود</span>
                                </a>
                            </li>
                            <li>
                                <button type="button" class="header-src">
                                    <i class="fas fa-search"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <form action="{{route('search')}}" class="header-search">
                        <div class="header-main-search">
                            <button type="submit" class="header-search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                            <input type="text" name="q" class="form-control" placeholder="چیزی که دوست داری را جستجو کن ..."  autocomplete="off">
                        </div>
                    </form>
                    <div class="header-right">
                        <ul class="header-widget">
                            <li>
                                <button class="header-favourite">
                                    <i class="fas fa-heart"></i>
                                    <sup>0</sup>
                                </button>
                            </li>
                            <li>
                                <button class="header-notify">
                                    <i class="fas fa-bell"></i>
                                    <sup>0</sup>
                                </button>
                            </li>
                            <li>
                                <button class="header-message">
                                    <i class="fas fa-envelope"></i>
                                    <sup>0</sup>
                                </button>
                            </li>
                        </ul>
                        <a href="{{route('register')}}" class="btn btn-inline">
                            <i class="fas fa-plus-circle"></i>
                            <span style="font-size: 16px;">ثبت نام</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="sidebar-part">
            <div class="sidebar-body">
                <div class="sidebar-header">
                    <a href="index.html" class="sidebar-logo">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <button class="sidebar-cross">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="sidebar-content">
                    <div class="sidebar-profile">
                        <a href="#" class="sidebar-avatar">
                            <img src="images/avatar/01.jpg" alt="avatar">
                        </a>
                        <h4>
                            <a href="#" class="sidebar-name">جکسون هندرسون</a>
                        </h4>
                        <a href="ad-post.html" class="btn btn-inline sidebar-btn">
                            <i class="fas fa-plus-circle"></i>
                            <span style="font-size: 16px;">ثبت نام</span>
                        </a>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#main-menu" class="nav-link active" data-toggle="tab">منوی اصلی </a>
                            </li>
                            <li>
                                <a href="#author-menu" class="nav-link" data-toggle="tab">منوی نویسنده</a>
                            </li>
                        </ul>
                        <div class="tab-pane active" id="main-menu">
                            <ul class="navbar-list">
                                <li class="navbar-item">
                                    <a class="navbar-link" href="index.html">صفحه اصلی</a>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>دسته بندی</span>
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <ul class="dropdown-list">
                                        <li>
                                            <a class="dropdown-link" href="category-list.html">لیست دسته ها</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="category-details.html">جزئیات دسته</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>لیست تبلیغات</span>
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <ul class="dropdown-list">
                                        <li>
                                            <a class="dropdown-link" href="grid-list.html">لیست گرید</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="leftbar-list.html">لیست نوار راست</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="rightbar-list.html">لیست نوار چپ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>جزئیات تبلیغات</span>
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <ul class="dropdown-list">
                                        <li>
                                            <a class="dropdown-link" href="grid-details.html">جزئیات گرید</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="leftbar-details.html">جزئیات نوار راست</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="rightbar-details.html">جزئیات نوار چپ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>صفحات</span>
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <ul class="dropdown-list">
                                        <li>
                                            <a class="dropdown-link" href="about.html">درباره ما</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="compare.html">مقایسه تبلیغات</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="cities.html">آگهی توسط شهرها</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="price.html">قیمت گذاری</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="user-form.html">فرم کاربر</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>وبلاگ </span>
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <ul class="dropdown-list">
                                        <li>
                                            <a class="dropdown-link" href="blog-list.html">وبلاگ لیستی </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-link" href="blog-details.html">جزئیات وبلاگ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-item">
                                    <a class="navbar-link" href="contact.html">تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="author-menu">
                            <ul class="navbar-list">
                                <li class="navbar-item">
                                    <a class="navbar-link" href="dashboard.html">داشبورد</a>
                                </li>
                                <li class="navbar-item">
                                    <a class="navbar-link" href="profile.html">پروفایل</a>
                                </li>
                                <li class="navbar-item">
                                    <a class="navbar-link" href="ad-post.html">ارسال آگهی </a>
                                </li>
                                <li class="navbar-item">
                                    <a class="navbar-link" href="my-ads.html">تبلیغات من </a>
                                </li>
                                <li class="navbar-item">
                                    <a class="navbar-link" href="setting.html">تنظیمات </a>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="bookmark.html">
                                        <span>نشانک </span>
                                        <span>0</span>
                                    </a>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>پیام </span>
                                        <span>0</span>
                                    </a>
                                </li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="#">
                                        <span>اعلانات</span>
                                        <span>0</span>
                                    </a>
                                </li>
                                <li class="navbar-item">
                                    <a class="navbar-link" href="user-form.html">خروج </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer">
                        <p>
                            کلیه حقوق محفوظ است توسط <a href="#">کلاسیک ادز </a>
                        </p>
                        <p>
                            طراحی توسط <a href="http://webitofa.ir">سالار شیرخانی </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="btmbar-part">
            <div class="container">
                <ul class="btmbar-widget">
                    <li>
                        <a href="user-form.html">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-star"></i>
                            <sup>0</sup>
                        </a>
                    </li>
                    <li>
                        <a class="plus-btn" href="ad-post.html">
                            <i class="fas fa-plus"></i>
                            <span style="font-size: 16px;">ثبت نام</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-bell"></i>
                            <sup>0</sup>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                            <sup>0</sup>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

@yield('content')


<footer class="footer-part">
    <div class="container">
        <div class="row newsletter">
            <div class="col-lg-6">
                <div class="news-content">
                    <h2>مشترک شدن در آخرین پیشنهادات</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="news-form">
                    <input type="text" placeholder="ادرس ایمیل شما">
                    <button class="btn btn-inline">
                        <i class="fas fa-envelope"></i>
                        <span>عضویت </span>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="footer-content">
                    <h3>تماس با ما</h3>
                    <ul class="footer-address">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                1420 جالکوری غربی فتح الله, <span>نارایانگانج ، بنگلادش</span>
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <p>
                                support@classicads.com <span>info@classicads.com</span>
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <p>
                                +8801838288389 <span>+8801941101915</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="footer-content">
                    <h3>لینک های کمکی </h3>
                    <ul class="footer-widget">
                        <li>
                            <a href="#">ادرس فروشگاه </a>
                        </li>
                        <li>
                            <a href="#">رهگیری سفارشات</a>
                        </li>
                        <li>
                            <a href="#">حساب کاربری من</a>
                        </li>
                        <li>
                            <a href="#">راهنمای اندازه </a>
                        </li>
                        <li>
                            <a href="#">گفت و گو </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="footer-content">
                    <h3>اطلاعات </h3>
                    <ul class="footer-widget">
                        <li>
                            <a href="#">درباره ما</a>
                        </li>
                        <li>
                            <a href="#">سیستم تحویل </a>
                        </li>
                        <li>
                            <a href="#">پرداخت امن </a>
                        </li>
                        <li>
                            <a href="#">تماس با ما</a>
                        </li>
                        <li>
                            <a href="#">نقشه سایت</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="footer-info">
                    <a href="#">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <ul class="footer-count">
                        <li>
                            <h5>929,238</h5>
                            <p>کاربران ثبت نام شده </p>
                        </li>
                        <li>
                            <h5>242,789</h5>
                            <p>تبلیغات جامعه </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-card-content">
                    <div class="footer-payment">
                        <a href="#">
                            <img src="images/pay-card/01.jpg" alt="01">
                        </a>
                        <a href="#">
                            <img src="images/pay-card/02.jpg" alt="02">
                        </a>
                        <a href="#">
                            <img src="images/pay-card/03.jpg" alt="03">
                        </a>
                        <a href="#">
                            <img src="images/pay-card/04.jpg" alt="04">
                        </a>
                    </div>
                    <div class="footer-option">
                        <button type="button">
                            <i class="fas fa-globe"></i>
                            انگلیسی 
                        </button>
                        <button type="button">
                            <i class="fas fa-dollar-sign"></i>
                            تومان 
                        </button>
                    </div>
                    <div class="footer-app">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end">
        <div class="container">
            <div class="footer-end-content">
                <p>
                    تمام حق و حقوق محفوظ است. 1399 - طراحی توسط <a href="#">سالارشیرخانی  </a>
                </p>
                <ul class="social-transparent footer-social">
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
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendor/slick.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/custom/slick.js')}}"></script>
<script src="{{asset('js/custom/main.js')}}"></script>
</body>
</html>
