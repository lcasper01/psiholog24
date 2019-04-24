@extends('layouts.index')


@section('content')
    <div class="clearfix"></div>
    <!-- Header Container / End -->



    <!-- Intro Banner
    ================================================== -->
    <!-- add class "disable-gradient" to enable consistent background overlay -->
    <div class="intro-banner" data-background-image="images/home-background.jpg">
        <div class="container">

            <!-- Intro Headline -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-headline">
                        <h3>
                            {{--<strong>Круглосуточная психологическая помощь онлайн</strong>--}}
                            <span>Круглосуточная<br> психологическая помощь<br> онлайн</span>
                            {{--<br>--}}
                            {{--<span>Thousands of small businesses use <strong class="color">Hireo</strong> to turn their ideas into reality.</span>--}}
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-banner-search-form margin-top-95">

                        <!-- Search Field -->
                        {{--<div class="intro-search-field with-autocomplete">--}}
                        {{--<label for="autocomplete-input" class="field-title ripple-effect">Город</label>--}}
                        {{--<div class="input-with-icon">--}}
                        {{--<input id="autocomplete-input" type="text" placeholder="Клиенты онлайн">--}}
                        {{--<i class="icon-material-outline-location-on"></i>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="intro-search-field">
                            <label for ="intro-keywords" class="field-title ripple-effect">Город</label>
                            <input id="intro-keywords" type="text" placeholder="">
                        </div>

                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <label for ="intro-keywords" class="field-title ripple-effect">Специалист</label>
                            <input id="intro-keywords" type="text" placeholder="Профиль специалиста">
                        </div>

                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Поиск</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">1,586</strong>
                            <span>Клиенты</span>
                        </li>
                        <li>
                            <strong class="counter">3,543</strong>
                            <span>Заявки</span>
                        </li>
                        <li>
                            <strong class="counter">1,232</strong>
                            <span>Специалисты</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <!-- Category Boxes -->
    <div class="section margin-top-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="section-headline centered margin-bottom-15">
                        <h3>Популярные направления</h3>
                    </div>

                    <!-- Category Boxes Container -->
                    <div class="categories-container">

                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-file-code-o"></i>
                            </div>
                            <div class="category-box-counter">612</div>
                            <div class="category-box-content">
                                <h3>Детские</h3>
                                <p>Software Engineer, Web / Mobile Developer & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-cloud-upload"></i>
                            </div>
                            <div class="category-box-counter">113</div>
                            <div class="category-box-content">
                                <h3>Семейные</h3>
                                <p>Data Specialist / Scientist, Data Analyst & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-suitcase"></i>
                            </div>
                            <div class="category-box-counter">186</div>
                            <div class="category-box-content">
                                <h3>КОНСУЛЬТАНТЫ</h3>
                                <p>Auditor, Accountant, Fnancial Analyst & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pencil"></i>
                            </div>
                            <div class="category-box-counter">298</div>
                            <div class="category-box-content">
                                <h3>Психоаналитики</h3>
                                <p>Copywriter, Creative Writer, Translator & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pie-chart"></i>
                            </div>
                            <div class="category-box-counter">549</div>
                            <div class="category-box-content">
                                <h3>Сексопатологи</h3>
                                <p>Brand Manager, Marketing Coordinator & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-image"></i>
                            </div>
                            <div class="category-box-counter">873</div>
                            <div class="category-box-content">
                                <h3>Психотерапевты</h3>
                                <p>Creative Director, Web Designer & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-bullhorn"></i>
                            </div>
                            <div class="category-box-counter">125</div>
                            <div class="category-box-content">
                                <h3>ПСИХИАТРЫ</h3>
                                <p>Darketing Analyst, Social Profile Admin & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-graduation-cap"></i>
                            </div>
                            <div class="category-box-counter">445</div>
                            <div class="category-box-content">
                                <h3>Преподаватели</h3>
                                <p>Advisor, Coach, Education Coordinator & More</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Category Boxes / End -->


    {{--<!-- Features Jobs -->--}}
    {{--<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xl-12">--}}

    {{--<!-- Section Headline -->--}}
    {{--<div class="section-headline margin-top-0 margin-bottom-35">--}}
    {{--<h3>Последние заявки</h3>--}}
    {{--<a href="jobs-list-layout-full-page-map.html" class="headline-link">Browse All Jobs</a>--}}
    {{--</div>--}}

    {{--<!-- Jobs Container -->--}}
    {{--<div class="listings-container compact-list-layout margin-top-35">--}}

    {{--<!-- Job Listing -->--}}
    {{--<a href="single-job-page.html" class="job-listing with-apply-button">--}}

    {{--<!-- Job Listing Details -->--}}
    {{--<div class="job-listing-details">--}}

    {{--<!-- Logo -->--}}
    {{--<div class="job-listing-company-logo">--}}
    {{--<img src="images/company-logo-01.png" alt="">--}}
    {{--</div>--}}

    {{--<!-- Details -->--}}
    {{--<div class="job-listing-description">--}}
    {{--<h3 class="job-listing-title">Bilingual Event Support Specialist</h3>--}}

    {{--<!-- Job Listing Footer -->--}}
    {{--<div class="job-listing-footer">--}}
    {{--<ul>--}}
    {{--<li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>--}}
    {{--<li><i class="icon-material-outline-location-on"></i> San Francissco</li>--}}
    {{--<li><i class="icon-material-outline-business-center"></i> Full Time</li>--}}
    {{--<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Apply Button -->--}}
    {{--<span class="list-apply-button ripple-effect">Apply Now</span>--}}
    {{--</div>--}}
    {{--</a>--}}


    {{--<!-- Job Listing -->--}}
    {{--<a href="single-job-page.html" class="job-listing with-apply-button">--}}

    {{--<!-- Job Listing Details -->--}}
    {{--<div class="job-listing-details">--}}

    {{--<!-- Logo -->--}}
    {{--<div class="job-listing-company-logo">--}}
    {{--<img src="images/company-logo-05.png" alt="">--}}
    {{--</div>--}}

    {{--<!-- Details -->--}}
    {{--<div class="job-listing-description">--}}
    {{--<h3 class="job-listing-title">Competition Law Officer</h3>--}}

    {{--<!-- Job Listing Footer -->--}}
    {{--<div class="job-listing-footer">--}}
    {{--<ul>--}}
    {{--<li><i class="icon-material-outline-business"></i> Laxo</li>--}}
    {{--<li><i class="icon-material-outline-location-on"></i> San Francissco</li>--}}
    {{--<li><i class="icon-material-outline-business-center"></i> Full Time</li>--}}
    {{--<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Apply Button -->--}}
    {{--<span class="list-apply-button ripple-effect">Apply Now</span>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--<!-- Job Listing -->--}}
    {{--<a href="single-job-page.html" class="job-listing with-apply-button">--}}

    {{--<!-- Job Listing Details -->--}}
    {{--<div class="job-listing-details">--}}

    {{--<!-- Logo -->--}}
    {{--<div class="job-listing-company-logo">--}}
    {{--<img src="images/company-logo-02.png" alt="">--}}
    {{--</div>--}}

    {{--<!-- Details -->--}}
    {{--<div class="job-listing-description">--}}
    {{--<h3 class="job-listing-title">Barista and Cashier</h3>--}}

    {{--<!-- Job Listing Footer -->--}}
    {{--<div class="job-listing-footer">--}}
    {{--<ul>--}}
    {{--<li><i class="icon-material-outline-business"></i> Coffee</li>--}}
    {{--<li><i class="icon-material-outline-location-on"></i> San Francissco</li>--}}
    {{--<li><i class="icon-material-outline-business-center"></i> Full Time</li>--}}
    {{--<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Apply Button -->--}}
    {{--<span class="list-apply-button ripple-effect">Apply Now</span>--}}
    {{--</div>--}}
    {{--</a>--}}


    {{--<!-- Job Listing -->--}}
    {{--<a href="single-job-page.html" class="job-listing with-apply-button">--}}

    {{--<!-- Job Listing Details -->--}}
    {{--<div class="job-listing-details">--}}

    {{--<!-- Logo -->--}}
    {{--<div class="job-listing-company-logo">--}}
    {{--<img src="images/company-logo-03.png" alt="">--}}
    {{--</div>--}}

    {{--<!-- Details -->--}}
    {{--<div class="job-listing-description">--}}
    {{--<h3 class="job-listing-title">Restaurant General Manager</h3>--}}

    {{--<!-- Job Listing Footer -->--}}
    {{--<div class="job-listing-footer">--}}
    {{--<ul>--}}
    {{--<li><i class="icon-material-outline-business"></i> King <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>--}}
    {{--<li><i class="icon-material-outline-location-on"></i> San Francissco</li>--}}
    {{--<li><i class="icon-material-outline-business-center"></i> Full Time</li>--}}
    {{--<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Apply Button -->--}}
    {{--<span class="list-apply-button ripple-effect">Apply Now</span>--}}
    {{--</div>--}}
    {{--</a>--}}

    {{--<!-- Job Listing -->--}}
    {{--<a href="single-job-page.html" class="job-listing with-apply-button">--}}

    {{--<!-- Job Listing Details -->--}}
    {{--<div class="job-listing-details">--}}

    {{--<!-- Logo -->--}}
    {{--<div class="job-listing-company-logo">--}}
    {{--<img src="images/company-logo-05.png" alt="">--}}
    {{--</div>--}}

    {{--<!-- Details -->--}}
    {{--<div class="job-listing-description">--}}
    {{--<h3 class="job-listing-title">International Marketing Coordinator</h3>--}}

    {{--<!-- Job Listing Footer -->--}}
    {{--<div class="job-listing-footer">--}}
    {{--<ul>--}}
    {{--<li><i class="icon-material-outline-business"></i> Skyist</li>--}}
    {{--<li><i class="icon-material-outline-location-on"></i> San Francissco</li>--}}
    {{--<li><i class="icon-material-outline-business-center"></i> Full Time</li>--}}
    {{--<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Apply Button -->--}}
    {{--<span class="list-apply-button ripple-effect">Apply Now</span>--}}
    {{--</div>--}}
    {{--</a>--}}

    {{--</div>--}}
    {{--<!-- Jobs Container / End -->--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Featured Jobs / End -->--}}


    <!-- Features Cities -->
    <div class="section margin-top-65 margin-bottom-65">
        <div class="container">
            <div class="row">

                <!-- Section Headline -->
                <div class="col-xl-12">
                    <div class="section-headline centered margin-top-0 margin-bottom-45">
                        <h3>Города</h3>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Photo Box -->
                    <a href="jobs-list-layout-1.html" class="photo-box" data-background-image="images/featured-city-01.jpg">
                        <div class="photo-box-content">
                            <h3>San Francisco</h3>
                            <span>376 Jobs</span>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Photo Box -->
                    <a href="jobs-list-layout-full-page-map.html" class="photo-box" data-background-image="images/featured-city-02.jpg">
                        <div class="photo-box-content">
                            <h3>New York</h3>
                            <span>645 Jobs</span>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Photo Box -->
                    <a href="jobs-grid-layout-full-page.html" class="photo-box" data-background-image="images/featured-city-03.jpg">
                        <div class="photo-box-content">
                            <h3>Los Angeles</h3>
                            <span>832 Jobs</span>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Photo Box -->
                    <a href="jobs-list-layout-2.html" class="photo-box" data-background-image="images/featured-city-04.jpg">
                        <div class="photo-box-content">
                            <h3>Miami</h3>
                            <span>513 Jobs</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Features Cities / End -->


    <!-- Highest Rated Freelancers -->
    <div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-25">
                        <h3>Лучшие специалисты</h3>
                        <a href="{{route('Speclist')}}" class="headline-link">Просмотреть всех специалистов</a>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="default-slick-carousel freelancers-container freelancers-grid-layout">
                         @foreach($users as $user)
                        <!--Freelancer -->
                        <div class="freelancer">

                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">

                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>

                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="/single-spec-profile/{{$user->id}}"><img src="{{asset('/storage/'. $user->avatar )}}" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="/single-spec-profile/{{$user->id}}">{{$user->name}}
                                                {{--<img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top">--}}
                                            </a></h4>
                                        <span>{{$user->specialty}}</span>
                                    </div>

                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="{{$user->rating}}"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Город <strong><i class="icon-material-outline-location-on"></i> {{$user->sity}}</strong></li>
                                        <li>Оплата<strong>{{$user->price}} р /час</strong></li>
                                        <li>Заявок<strong>95</strong></li>
                                    </ul>
                                </div>
                                <a href="/single-spec-profile/{{$user->id}}" class="button button-sliding-icon ripple-effect">Просмотреть профиль<i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
                         @endforeach



                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Highest Rated Freelancers / End-->


    {{--<!-- Membership Plans -->--}}
    {{--<div class="section padding-top-60 padding-bottom-75">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}

    {{--<div class="col-xl-12">--}}
    {{--<!-- Section Headline -->--}}
    {{--<div class="section-headline centered margin-top-0 margin-bottom-35">--}}
    {{--<h3>Membership Plans</h3>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--<div class="col-xl-12">--}}

    {{--<!-- Billing Cycle  -->--}}
    {{--<div class="billing-cycle-radios margin-bottom-70">--}}
    {{--<div class="radio billed-monthly-radio">--}}
    {{--<input id="radio-5" name="radio-payment-type" type="radio" checked>--}}
    {{--<label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>--}}
    {{--</div>--}}

    {{--<div class="radio billed-yearly-radio">--}}
    {{--<input id="radio-6" name="radio-payment-type" type="radio">--}}
    {{--<label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Pricing Plans Container -->--}}
    {{--<div class="pricing-plans-container">--}}

    {{--<!-- Plan -->--}}
    {{--<div class="pricing-plan">--}}
    {{--<h3>Basic Plan</h3>--}}
    {{--<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>--}}
    {{--<div class="pricing-plan-label billed-monthly-label"><strong>$19</strong>/ monthly</div>--}}
    {{--<div class="pricing-plan-label billed-yearly-label"><strong>$205</strong>/ yearly</div>--}}
    {{--<div class="pricing-plan-features">--}}
    {{--<strong>Features of Basic Plan</strong>--}}
    {{--<ul>--}}
    {{--<li>1 Listing</li>--}}
    {{--<li>30 Days Visibility</li>--}}
    {{--<li>Highlighted in Search Results</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>--}}
    {{--</div>--}}

    {{--<!-- Plan -->--}}
    {{--<div class="pricing-plan recommended">--}}
    {{--<div class="recommended-badge">Recommended</div>--}}
    {{--<h3>Standard Plan</h3>--}}
    {{--<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>--}}
    {{--<div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>--}}
    {{--<div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>--}}
    {{--<div class="pricing-plan-features">--}}
    {{--<strong>Features of Standard Plan</strong>--}}
    {{--<ul>--}}
    {{--<li>5 Listings</li>--}}
    {{--<li>60 Days Visibility</li>--}}
    {{--<li>Highlighted in Search Results</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>--}}
    {{--</div>--}}

    {{--<!-- Plan -->--}}
    {{--<div class="pricing-plan">--}}
    {{--<h3>Extended Plan</h3>--}}
    {{--<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>--}}
    {{--<div class="pricing-plan-label billed-monthly-label"><strong>$99</strong>/ monthly</div>--}}
    {{--<div class="pricing-plan-label billed-yearly-label"><strong>$1069</strong>/ yearly</div>--}}
    {{--<div class="pricing-plan-features">--}}
    {{--<strong>Features of Extended Plan</strong>--}}
    {{--<ul>--}}
    {{--<li>Unlimited Listings Listing</li>--}}
    {{--<li>90 Days Visibility</li>--}}
    {{--<li>Highlighted in Search Results</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Membership Plans / End-->--}}


@endsection
@section('footer')
    <!-- Footer
================================================== -->
    <div id="footer">

        <!-- Footer Top Section -->
        <div class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- Footer Rows Container -->
                        <div class="footer-rows-container">

                            <!-- Left Side -->
                            <div class="footer-rows-left">
                                <div class="footer-row">
                                    <div class="footer-row-inner footer-logo">
                                        <img src="images/logo2.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="footer-rows-right">

                                <!-- Social Icons -->
                                <div class="footer-row">
                                    <div class="footer-row-inner">
                                        <ul class="footer-social-links">
                                            <li>
                                                <a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
                                                    <i class="icon-brand-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- Footer Rows Container / End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Section / End -->



        <!-- Footer Copyrights -->
        <div class="footer-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        © 2019 <strong>IT-PARTY - Pages&Content</strong>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyrights / End -->

    </div>
    <!-- Footer / End -->
    @endsection