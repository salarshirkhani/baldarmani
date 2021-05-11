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
                    <h2>لیست وبلاگ</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">لیست وبلاگ</li>
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
                            <form class="blog-src">
                                <input type="text" placeholder="جستجو...">
                                <button>
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
                                <li>
                                    <div class="suggest-img">
                                        <a href="#">
                                            <img src="images/blog-suggest/01.jpg" alt="blog">
                                        </a>
                                    </div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4>
                                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</a>
                                            </h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date">
                                                <i class="far fa-calendar-alt"></i>
                                                <p>بهمن 1399</p>
                                            </div>
                                            <div class="suggest-comment">
                                                <i class="far fa-comments"></i>
                                                <p>16</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="suggest-img">
                                        <a href="#">
                                            <img src="images/blog-suggest/02.jpg" alt="blog">
                                        </a>
                                    </div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4>
                                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</a>
                                            </h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date">
                                                <i class="far fa-calendar-alt"></i>
                                                <p>بهمن 1399</p>
                                            </div>
                                            <div class="suggest-comment">
                                                <i class="far fa-comments"></i>
                                                <p>13</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="suggest-img">
                                        <a href="#">
                                            <img src="images/blog-suggest/03.jpg" alt="blog">
                                        </a>
                                    </div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4>
                                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</a>
                                            </h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date">
                                                <i class="far fa-calendar-alt"></i>
                                                <p>بهمن 1399</p>
                                            </div>
                                            <div class="suggest-comment">
                                                <i class="far fa-comments"></i>
                                                <p>19</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 m-auto">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-title">
                                <h5>دسته های برتر</h5>
                            </div>
                            <ul class="blog-cate">
                                <li>
                                    <h5>
                                        <a href="#">تکنولوژی</a>
                                    </h5>
                                    <p>23</p>
                                </li>
                                <li>
                                    <h5>
                                        <a href="#">آموزشی</a>
                                    </h5>
                                    <p>17</p>
                                </li>
                                <li>
                                    <h5>
                                        <a href="#">کسب و کار</a>
                                    </h5>
                                    <p>09</p>
                                </li>
                                <li>
                                    <h5>
                                        <a href="#">فریلنسری </a>
                                    </h5>
                                    <p>12</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 m-auto">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-title">
                                <h5>بهترین برچسب ها</h5>
                            </div>
                            <ul class="blog-tag">
                                <li>
                                    <a href="#">دامین ها </a>
                                </li>
                                <li>
                                    <a href="#">ابری </a>
                                </li>
                                <li>
                                    <a href="#">وب </a>
                                </li>
                                <li>
                                    <a href="#">تخفیفی </a>
                                </li>
                                <li>
                                    <a href="#">پشتیبان </a>
                                </li>
                                <li>
                                    <a href="#">پرداختی </a>
                                </li>
                                <li>
                                    <a href="#">فروشگاهی </a>
                                </li>
                                <li>
                                    <a href="#">امنیت </a>
                                </li>
                                <li>
                                    <a href="#">راه حل </a>
                                </li>
                                <li>
                                    <a href="#">پایگاه دانش </a>
                                </li>
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
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/01.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="marketing">بازار یابی</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/01.jpg" alt="avatar">
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
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/02.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="advertise">تبلیغات</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/02.jpg" alt="avatar">
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
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/03.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="safety">ایمنی </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/03.jpg" alt="avatar">
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
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/04.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="security">امنیت </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/04.jpg" alt="avatar">
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
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/05.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="security">امنیت </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/01.jpg" alt="avatar">
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
                    <div class="col-sm-10 col-md-6 col-lg-6 m-auto">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="images/blog/06.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="marketing">بازار یابی</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="images/avatar/02.jpg" alt="avatar">
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
        </div>
    </div>
</section>
@endsection