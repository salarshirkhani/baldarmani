@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{asset('css/vendor/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/rightbar-details.css')}}">
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>جزئیات محصولات</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="rightbar-list.html">محصولات</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">جزئیات محصولات</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ad-details-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ad-details-card">
                    <div class="ad-details-breadcrumb">
                        <ol class="breadcrumb">
                            <li>
                                <span class="flat-badge sale">برای فروش ویژه</span>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">محصولات </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">خانه </li>
                        </ol>
                    </div>
                    <div class="ad-details-heading">
                        <h2>
                            <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</a>
                        </h2>
                    </div>
                    <ul class="ad-details-meta">
                        <li>
                            <a href="#">
                                <i class="fas fa-eye"></i>
                                <p>
                                    پیش نمایش <span>(134)</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-mouse"></i>
                                <p>
                                    کلیک <span>(76)</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="ad-details-slider slider-arrow">
                        <div>
                            <img src="images/product/03.jpg" alt="details">
                        </div>
                    </div>

                    <div class="ad-details-action">
                        <ul>
                            <li>
                                <button type="button">
                                    <i class="fas fa-share-alt"></i>
                                    <span>اشتراک </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ad-details-card">
                    <div class="ad-details-title">
                        <h5>مشخصات </h5>
                    </div>
                    <div class="ad-details-specific">
                        <ul>
                            <li>
                                <h6>قیمت: </h6>
                                <p>20900 تومان</p>
                            </li>
                            <li>
                                <h6>نویسنده:</h6>
                                <p>عباس بوعزا </p>
                            </li>
                            <li>
                                <h6>منتشر شده:</h6>
                                <p>دی 1399</p>
                            </li>
                            <li>
                                <h6>انتشارات: </h6>
                                <p>تهران</p>
                            </li>
                            <li>
                                <h6>دسته بندی:</h6>
                                <p>محبوبیت </p>
                            </li>
                            <li>
                                <h6>وضعیت:</h6>
                                <p>استفاده شده</p>
                            </li>
                            <li>
                                <h6>نوع قیمت:</h6>
                                <p>قابل معامله </p>
                            </li>
                            <li>
                                <h6>نوع محصول:</h6>
                                <p>ویژه</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ad-details-card">
                    <div class="ad-details-title">
                        <h5>توضیحات </h5>
                    </div>
                    <div class="ad-details-descrip">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد..<span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت.</span>
                        </p>
                    </div>
                </div>
                <!-- YOU CAN ADD ANOTHER BOX HERE -->
            </div>
            <div class="col-lg-4">
                <div class="ad-details-price">
                    <h5>23000 تومان</h5>
                    <i class="fas fa-wallet"></i>
                </div>
                <button class="ad-details-number">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span>خرید محصول</span>
                </button>
                <div class="ad-details-card">
                    <div class="ad-details-title">
                        <h5>ساعات کاری</h5>
                    </div>
                    <div class="ad-details-opening">
                        <ul>
                            <li>
                                <h6>شنبه </h6>
                                <p>09:00 صبح  - 05:00 بعد ظهر</p>
                            </li>
                            <li>
                                <h6>یکشنبه </h6>
                                <p>09:00 صبح  - 05:00 بعد ظهر</p>
                            </li>
                            <li>
                                <h6>دوشنبه </h6>
                                <p>09:00 صبح  - 05:00 بعد ظهر</p>
                            </li>
                            <li>
                                <h6>سه شنبه </h6>
                                <p>09:00 صبح  - 05:00 بعد ظهر</p>
                            </li>
                            <li>
                                <h6>چهارشنبه </h6>
                                <p>09:00 صبح  - 05:00 بعد ظهر</p>
                            </li>
                            <li>
                                <h6>پنجشنبه </h6>
                                <p>09:00 صبح  - 05:00 بعد ظهر</p>
                            </li>
                            <li>
                                <h6>جمعه </h6>
                                <p>بسته</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/custom/price-range.js')}}"></script>
<script src="{{asset('js/vendor/slick.min.js')}}"></script>
<script src="{{asset('js/custom/slick.js')}}"></script>
@endsection