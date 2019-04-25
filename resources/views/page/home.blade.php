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
            <form method="post" action="{{route('search')}}" id="search-form" >
                @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-banner-search-form margin-top-95">
                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <input id="title" name="title" type="text" placeholder="Поиск по специалистам">
                        </div>
                        <!-- Button -->
                        <div class="intro-search-button">
                            <button type="submit" class="button ripple-effect" form="search-form">Поиск</button>
                        </div>
                    </div>
                </div>

            </div>
            </form>
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