@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{ asset('css/COMPONENTS.css') }}" >
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >

<div class="c-layout-page">
	<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
		<div class="container">
			<div class="c-page-title c-pull-right">
				<h1 class="c-font-sbold">محصولات</h1>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-left c-fonts-regular">
				<li><a href="https://www.leadermedica.com/">خانه</a></li>
				<li>/</li><li><a href="https://www.leadermedica.com/bio-medical/" title="">ایمپلنت دندان</a></li><li>/</li><li><a href="https://www.leadermedica.com/bio-medical/cranioplastica/" title="">ایمپلنت نمونه 2</a></li>	
			</ul>

		</div>
	</div>
    <!--  INFO  -->
		<div class="container">

<div class="c-shop-product-details-2">
			<div class="row">
				<div class="col-sm-4 col-md-4 wow animate slideInLeft" style="visibility: visible; animation-name: slideInLeft; opacity: 1;">
											<a href="images/TTI3413.jpg" rel="lightbox" data-lightbox="example-set" title="FIVE Ø3,4">
							<img src="images/TTI3413.jpg" alt="TTI3413.jpg" class="img-responsive">
						</a>
									</div>
				<div class="col-sm-8 wow animate slideInRight" style="visibility: visible; animation-name: slideInRight; opacity: 1;">
					<div class="c-product-meta">
						<div class="c-content-title-1">
							<h3 class="c-font-uppercase c-font-bold">ایمپلنت یک</h3>
							<div class="c-line-left"></div>
						</div>
												<div style="clear:both;"></div>
						<!--<div class="c-product-price"><small style="font-size:18px;">cod.TSK3507</small></div>-->
												<!--<div class="row c-product-variant">
							<div class="col-sm-12 col-xs-12">
								<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Altezza:</p>
								<div class="c-product-size">
									<select>
										<option value="7">7 mm</option>
										<option value="8.5">8.5 mm</option>
										<option value="10">10 mm</option>
										<option value="11">11 mm</option>
									</select>
								</div>
							</div>
						</div>-->
					<div class="c-product-short-desc c-margin-t-20">
اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود. طراحان وب و گرافیک از این متن برای پرکردن صفحه و ارائه شکل کلی طرح استفاده می‌کنند			</div>
					</div>

				</div>
			</div>
		</div>
		<div class="c-contact ktop-60">
						<div class="c-content-title-1 ktop-20">
							<h4 class="c-title c-font-bold c-font-22 c-font-dark ktop-20 mbot-20">درخواست خرید </h4>
						</div>
						<form id="contactForm" action="javascript:;" method="post" autocomplete="off">
							<input type="hidden" name="tag" value="MAGNETIC MALLET">
		                    <input type="hidden" name="webkey" value="encl0nnxye">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
							    		<input type="text" placeholder="نام" name="ragione_sociale" id="ragione_sociale" class="form-control c-square c-theme input-lg">
							    	</div>
							    </div>
							    <div class="col-md-6">
							    	<div class="form-group">
							    		<input type="email" placeholder="ایمیل" name="email" id="email" class="form-control c-square c-theme input-lg">
							    	</div>
						    	</div>
						    	<div class="col-md-6">
							    	<div class="form-group">
							    		<input type="text" placeholder="تعداد کالای درخواستی" name="cellulare" id="cellulare" class="form-control c-square c-theme input-lg">
							    	</div>
							    </div>
							    <div class="col-md-12">
							       	<div class="form-group">
							    	   	<textarea rows="8" name="richiesta_web" id="richiesta_web" placeholder="یادداشت" class="form-control c-theme c-square input-lg"></textarea>
							        </div>
						        </div>
		                        <div class="col-12">
		                            <input class="r-space privacy-checkbox-2" type="checkbox" name="privacy" id="privacy">من قوانین و مقررات مجموعه را می پذیرم
		                            <a href="https://www.leadermedica.com/.html" title="Privacy" target="_blank" rel="nofollow">
		                            قوانین
		                            </a>
		                        </div>
		                        <div class="col-12">
		                        	<div id="loadResult" class="kalert"></div>
		                        </div>
		                    </div>
					        <button type="submit" style="margin:20px 0px; background:blue;" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">ثبت درخواست</button> 
					   	</form>
					</div></div>
</div>

@endsection