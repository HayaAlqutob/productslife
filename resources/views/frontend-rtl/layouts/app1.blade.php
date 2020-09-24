<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(config('favicon_image') != "")
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/logos/'.config('favicon_image'))}}"/>
        @endif
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', '')">
        <meta name="keywords" content="@yield('meta_keywords', '')">

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->


        <link rel="stylesheet" href="{{asset('assets-rtl/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets-rtl/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/video.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/progess.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets-rtl/css/slider.css')}}">


        {{--<link rel="stylesheet" href="{{ asset('css/frontend-rtl.css') }}">--}}
        <link rel="stylesheet" href="{{asset('assets-rtl/css/style.css')}}">

        <link rel="stylesheet" href="{{asset('assets-rtl/css/responsive.css')}}">
        {{--<link rel="stylesheet" href="{{ asset('css/frontend.css') }}">--}}
        <!--link rel="stylesheet" href="{{asset('assets/css/colors/switch.css')}}">

        <link href="{{asset('assets/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-2">
        <link href="{{asset('assets/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-3">
        <link href="{{asset('assets/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-4">
        <link href="{{asset('assets/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-5">
        <link href="{{asset('assets/css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-6">
        <link href="{{asset('assets/css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-7">
        <link href="{{asset('assets/css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-8">
        <link href="{{asset('assets/css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-9"-->
              <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
              <style>
                body{
                    font-family: "Droid Arabic Kufi" , serif !important;
                }


                .gradient-bg, .modal-body .nws-button button, 
.teacher-pic-content .teacher-img-content:after,
.course-details-category li:hover,
.add-cart:after,
.category-icon-title:after,
.gradient-bdr,
.address-icon {
	background: {{config('end_color')}};
	background: -moz-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
	background: -webkit-gradient(left top, right top, color-stop(0%, #4eb3bf), color-stop(51%, {{config('end_color')}}), color-stop(100%, #4eb3bf));
	background: -webkit-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, #0071b0 100%);
	background: -o-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
	background: -ms-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
	background: -webkit-gradient(linear, left top, right top, from({{config('start_color')}}), color-stop(51%, {{config('end_color')}}), to({{config('start_color')}}));
	background: -webkit-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
	background: linear-gradient(to right, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
	background-size: 200% auto;
}
.text-gradiant {
	background: -moz-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 100%);
	background: -webkit-gradient(left top, right top, color-stop(0%, {{config('start_color')}}), color-stop(100%, {{config('end_color')}}));
	background: -webkit-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 100%);
	background: -o-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 100%);
	background: -ms-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 100%);
	background-clip: text;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent; }
	.section-title .subtitle:before, 
	.section-title .subtitle:after {
		color: {{config('start_color')}};
		text-shadow: 15px 0 {{config('start_color')}};
	}
	.breadcrumb-section .breadcrumb-item {
		background-color: {{config('start_color')}};
	}
	.nav-menu li a:after {
		background: {{config('end_color')}};
		background: -moz-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, #4eb3bf), color-stop(51%, {{config('end_color')}}), color-stop(100%, #4eb3bf));
		background: -webkit-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, #0071b0 100%);
		background: -o-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
		background: -ms-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
		background: -webkit-gradient(linear, left top, right top, from({{config('start_color')}}), color-stop(51%, {{config('end_color')}}), to({{config('start_color')}}));
		background: -webkit-linear-gradient(left, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
		background: linear-gradient(to right, {{config('start_color')}} 0%, {{config('end_color')}} 51%, {{config('start_color')}} 100%);
		background-size: 200% auto;
	}
	.cart-search li {
		border: 2px solid {{config('end_color')}};
	}

	.sub-menu:before {
		border-top: 10px solid {{config('end_color')}};
	}
	.search-body .search-form .search-close {
		background-color: {{config('end_color')}};
	}
	.sub-menu li a:hover {
		color: {{config('end_color')}} !important;
	}
	.header-style-2 .sub-menu li a:hover {
		color: {{config('end_color')}}; 
	}
	#slider-item .genius-btn {
		border: 2px solid {{config('end_color')}};
	}
	#slider-item .slider-course-category li:hover {
		color: {{config('end_color')}}; 
	}
	.coming-countdown li {
		border: 2px solid {{config('end_color')}};
	}
	.home-secound-course-search .about-list li {
		color: {{config('end_color')}};
	}
	.search-course-secound .counter-number p {
		color: {{config('end_color')}};
	}
	.search-course-third .counter-icon-number:after {
		background-color: {{config('end_color')}};
	}
	.select-lang select,
	.nav-menu-4 .login-cart-lang .login a,
	.course-meta .course-category, .latest-events .course-meta .course-author,
	.about-teacher-2 .section-title-2 h2 b,
	.testimonial-slide .student-name-designation span,
	.view-all-btn i,
	.teacher-img-content .teacher-category .st-name,
	.secound-teacher-section .teacher-img-text .teacher-designation,
	.teacher-pic-content .teacher-social-name li,
	.teacher-pic-content .teacher-name-designation .teacher-designation,
	.teacher-details-text .teacher-deg span,
	.best-product-section .price-start span,
	.best-sellers-pic-text .b-price,
	.panel-group .panel-title .btn-link,
	.panel-group .panel-title .btn-link:before,
	.panel-group .panel-title .btn-link:after,
	.panel-group .panel-title .btn-link:hover,
	.version-four .features-icon .feat-tag span,
	.blog-details-content .date-meta span,
	.blog-details-content .author-comment .author-designation-comment span,
	.blog-details-content .next-prev-post i,
	.blog-comment-area .author-name-rate span,
	.affiliate-market-accordion .panel-group .panel-title .btn-link span,
	.course-by b,
	.avrg-rating .avrg-rate,
	.course-side-bar-widget h3 span,
	.course-side-bar-widget h3 span,
	.student-number,
	.checkbox label .sub-text b,
	.terms-text b,
	.purchase-list .in-total span,
	.footer-menu li i {
		color: {{config('start_color')}};
	}

	.about-us-text .section-title:after,
	.about-list li:before,
	.testimonial-slide .student-name-designation span:before,
	.teacher-img-content .teacher-img:after,
	.teacher-desc-social li:hover,
	.ui-slider-horizontal .ui-slider-handle,
	ul.product-tab li:after,
	.panel-group .panel-body:before,
	.blog-button ul.product-tab li.active,
	.side-bar-widget .tag-clouds li:hover,
	.blog-details-content .blog-category li:hover,
	.course-page-section .course-type-list span,
	.avrg-rating .rating-overview:hover .start-bar,
	.section-title-2 h2:after {
		background-color: {{config('start_color')}};
	}

.cart-search li,
#slider-item .genius-bt,
.coming-countdown li,
.secound-teacher-section .teacher-img-text .teacher-social-list li,
.footer-social li,
.subscribe-form li {
	border: 2px solid {{config('start_color')}};
}

.contact-address-details {
    border-bottom: 1px solid {{config('start_color')}};
}
.genius-btn a i {  
    color: {{config('start_color')}};
}
.widget-title:after {  
    background-color: {{config('start_color')}};
}
.course-title:after {
    background-color: {{config('start_color')}};
}
a {
    color: {{config('start_color')}};
}
.teacher-img-content {
    background-color: {{config('start_color')}};
}
.teacher-img-content .teacher-social-name li {
    color: {{config('start_color')}};
    background-color: {{config('end_color')}};
}
                .color-smart{
               /*     {{config('start_color')}}
                    {{config('end_color')}} */
                     background: #797; 
    background: -webkit-linear-gradient(to right, #dc2, #797);  
    background: linear-gradient(to right, #dc2, #797); 
    border-radius: 100%;
                }
                </style>
        @yield('css')
        @stack('after-styles')
        @if(config('onesignal_status') == 1)
            {!! config('onesignal_data') !!}
        @endif

        @if(config('google_analytics_id') != "")
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{config('google_analytics_id')}}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }

                gtag('js', new Date());
                gtag('config', '{{config('google_analytics_id')}}');
            </script>
        @endif

        @if(!empty(config('custom_css')))
            <style>
                {!! config('custom_css')  !!}
            </style>
        @endif

    </head>
    <body class="{{config('layout_type')}}">

    <div id="app">
    {{--<div id="preloader"></div>--}}
    @include('frontend.layouts.modals.loginModal')


    <!-- Start of Header section
        ============================================= -->
        <header>
            <div id="main-menu" class="main-menu-container">
                <div class="main-menu">
                    <div class="container">
                        <div class="navbar-default">
                            <div class="navbar-header float-left">
                                <a class="navbar-brand text-uppercase" href="{{url('/')}}">
                                    {{--<img src="{{asset("storage/logos/".config('logo_w_image'))}}" alt="logo">--}}
                                    <img src="{{asset("storage/logos/".config('logo_w_image'))}}" alt="logo">
                                </a>
                            </div><!-- /.navbar-header -->

                            <div class="cart-search float-right ul-li">
                                <ul>
                                    <li>
                                        <a href="{{route('cart.index')}}"><i class="fas fa-shopping-bag"></i>
                                            @if(auth()->check() && Cart::session(auth()->user()->id)->getTotalQuantity() != 0)
                                                <span class="badge badge-danger position-absolute">{{Cart::session(auth()->user()->id)->getTotalQuantity()}}</span>
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <nav class="navbar-menu float-right">
                                <div class="nav-menu ul-li">

                                    <ul>
                                        @if(count($custom_menus) > 0 )
                                            @foreach($custom_menus as $menu)
                                                @if($menu['id'] == $menu['parent'])
                                                    @if(count($menu->subs) == 0)

                                                        <li class="nav-item">
                                                            <a href="{{asset($menu->link)}}"
                                                               class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"
                                                               id="menu-{{$menu->id}}">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                        </li>

                                                    @else
                                                        <li class="menu-item-has-children ul-li-block">
                                                            <a href="#!">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                            <ul class="sub-menu">
                                                                @foreach($menu->subs as $item)
                                                                    @include('frontend.layouts.partials.dropdown', $item)
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endif

                                                @endif
                                            @endforeach
                                        @endif

                                        @if(auth()->check())
                                            <li class="menu-item-has-children ul-li-block">
                                                <a href="#!">{{ $logged_in_user->name }}</a>
                                                <ul class="sub-menu">
                                                    @can('view backend')
                                                        <li>
                                                            <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                        </li>
                                                    @endcan

                                                    <li>
                                                        <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <div class="log-in mt-0">
                                                    <a id="openLoginModal" data-target="#myModal"
                                                       href="#">@lang('navs.general.login')</a>
                                                    <!-- The Modal -->
                                                    {{--@include('frontend.layouts.modals.loginModal')--}}
                                                </div>
                                            </li>
                                        @endif
                                        @if(count($locales) > 1)
                                            <li class="menu-item-has-children ul-li-block">
                                                <a href="#">
                                                    <span class="d-md-down-none"> @lang('menus.language-picker.language')
                                                        ({{ strtoupper(app()->getLocale()) }})</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    @foreach($locales as $lang)
                                                        @if($lang != app()->getLocale())
                                                            <li>
                                                                <a href="{{ '/lang/'.$lang }}"
                                                                   class=""> @lang('menus.language-picker.langs.'.$lang)</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>

                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        <img src={{asset("storage/logos/".config('logo_w_image'))}} alt="Logo">
                                    </a>
                                </div>
                                <nav>
                                    <ul>
                                        @if(count($custom_menus) > 0 )
                                            @foreach($custom_menus as $menu)
                                                @if($menu['id'] == $menu['parent'])
                                                    @if(count($menu->subs) == 0)
                                                        <li class="">
                                                            <a href="{{asset($menu->link)}}"
                                                               class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"
                                                               id="menu-{{$menu->id}}">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                        </li>
                                                    @else
                                                        <li class="">
                                                            <a href="#!">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                            <ul class="">
                                                                @foreach($menu->subs as $item)
                                                                    @include('frontend.layouts.partials.dropdown', $item)
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endif
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(auth()->check())
                                            <li class="">
                                                <a href="#!">{{ $logged_in_user->name}}</a>
                                                <ul class="">
                                                    @can('view backend')
                                                        <li>
                                                            <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                        </li>
                                                    @endcan


                                                    <li>
                                                        <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <div class=" ">
                                                    <a id="openLoginModal" data-target="#myModal"
                                                       href="#">@lang('navs.general.login')</a>
                                                    <!-- The Modal -->
                                                </div>
                                            </li>
                                        @endif
                                        @if(count($locales) > 1)
                                            <li class="menu-item-has-children ul-li-block">
                                                <a href="#">
                                                    <span class="d-md-down-none">@lang('menus.language-picker.language')
                                                        ({{ strtoupper(app()->getLocale()) }})</span>
                                                </a>
                                                <ul class="">
                                                    @foreach($locales as $lang)
                                                        @if($lang != app()->getLocale())
                                                            <li>
                                                                <a href="{{ '/lang/'.$lang }}"
                                                                   class=""> @lang('menus.language-picker.langs.'.$lang)</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start of Header section
            ============================================= -->


        @yield('content')
        @include('cookieConsent::index')
        @include('frontend-rtl.layouts.partials.footer')

    </div><!-- #app -->

    <!-- Scripts -->
    @stack('before-scripts')

    <!-- For Js Library -->
    <script src="{{asset('assets-rtl/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/popper.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/jarallax.js')}}"></script>
    <script src="{{asset('assets-rtl/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/lightbox.js')}}"></script>
    <script src="{{asset('assets-rtl/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('assets-rtl/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets-rtl/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets-rtl/js/gmap3.min.js')}}"></script>

    <script src="{{asset('assets-rtl/js/switch.js')}}"></script>

    <script>
        @if(request()->has('user')  && (request('user') == 'admin'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('admin@lms.com')
        $('#loginForm').find('#password').val('secret')

        @elseif(request()->has('user')  && (request('user') == 'student'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('student@lms.com')
        $('#loginForm').find('#password').val('secret')

        @elseif(request()->has('user')  && (request('user') == 'teacher'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('teacher@lms.com')
        $('#loginForm').find('#password').val('secret')

        @endif
    </script>


    <script src="{{asset('assets-rtl/js/script.js')}}"></script>
    <script>
        @if((session()->has('show_login')) && (session('show_login') == true))
        $('#myModal').modal('show');
                @endif
        var font_color = "{{config('font_color')}}"
        setActiveStyleSheet(font_color);
    </script>

    @yield('js')

    @stack('after-scripts')


    @include('includes.partials.ga')
    @if(!empty(config('custom_js')))
        <script>
            {!! config('custom_js') !!}
        </script>
    @endif
    </body>
    </html>
