@extends('layouts.index')


@section('content')

    <!-- Titlebar
================================================== -->
    <div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="left-side">
                            <div class="header-image freelancer-avatar"><img src="{{asset('/storage/'. $user->avatar )}}" alt=""></div>
                            <div class="header-details">
                                <h3>{{$user->name}} {{$user->last_name}}<span>{{$user->skills}}</span></h3>
                                <ul>
                                    <li><div class="star-rating" data-rating="5.0"></div></li>
                                    {{--<li><img class="flag" src="images/flags/de.svg" alt=""> Germany</li>--}}
                                    {{--<li><div class="verified-badge-with-title">Verified</div></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">

                <!-- Page Content -->
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Образование</h3>
                    {{$user->education}}
                </div>

                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Должность</h3>
                    {{$user->dolzhnost}}
                </div>

                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Специализация</h3>
                    {{$user->specialization}}
                </div>

                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Методы</h3>
                    {{$user->metods}}
                </div>



            </div>


            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">

                    <!-- Profile Overview -->
                    <div class="profile-overview">
                        <div class="overview-item"><strong>{{$user->price}}</strong><span>Цена за час</span></div>
                        <div class="overview-item"><strong>53</strong><span>Jobs Done</span></div>
                        <div class="overview-item"><strong>22</strong><span>Rehired</span></div>
                    </div>

                    <!-- Button -->
                    <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Написать <i class="icon-material-outline-arrow-right-alt"></i></a>

                    <!-- Freelancer Indicators -->
                    <div class="sidebar-widget">
                        <div class="freelancer-indicators">

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>88%</strong>
                                <div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
                                <span>Job Success</span>
                            </div>

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>100%</strong>
                                <div class="indicator-bar" data-indicator-percentage="100"><span></span></div>
                                <span>Рекомендаций</span>
                            </div>

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>90%</strong>
                                <div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
                                <span>On Time</span>
                            </div>

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>80%</strong>
                                <div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
                                <span>On Budget</span>
                            </div>
                        </div>
                    </div>

                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h3>Социальные сети</h3>
                        <div class="freelancer-socials margin-top-25">
                            <ul>
                                <li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
                                <li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                <li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>
                                <li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Spacer -->
    <div class="margin-top-15"></div>
    <!-- Spacer / End-->



@endsection()

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