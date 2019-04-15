<!doctype html>
<html lang="ru">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Айгор24/7</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/colors/red.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>



<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{route('home')}}"><img src="images/logo.png" alt=""></a>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">

                            <li><a href="#" class="current">Главная</a>
                                {{--<ul class="dropdown-nav">--}}
                                {{--<li><a href="index.html">Home 1</a></li>--}}
                                {{--<li><a href="index-2.html">Home 2</a></li>--}}
                                {{--<li><a href="index-3.html">Home 3</a></li>--}}
                                {{--</ul>--}}
                            </li>

                            <li><a href="#">Клиенты</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#">Browse Jobs</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="jobs-list-layout-full-page-map.html">Full Page List + Map</a></li>
                                            <li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid + Map</a></li>
                                            <li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
                                            <li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
                                            <li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
                                            <li><a href="jobs-grid-layout.html">Grid Layout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Browse Tasks</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
                                            <li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
                                            <li><a href="tasks-grid-layout.html">Grid Layout</a></li>
                                            <li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="browse-companies.html">Browse Companies</a></li>
                                    <li><a href="single-job-page.html">Job Page</a></li>
                                    <li><a href="single-task-page.html">Task Page</a></li>
                                    <li><a href="single-company-profile.html">Company Profile</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Специалисты</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#">Find a Freelancer</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a></li>
                                            <li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
                                            <li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
                                            <li><a href="freelancers-list-layout-2.html">List Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-freelancer-profile.html">Freelancer Profile</a></li>
                                    <li><a href="dashboard-post-a-job.html">Post a Job</a></li>
                                    <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                </ul>
                            </li>

                            {{--<li><a href="#">Dashboard</a>--}}
                            {{--<ul class="dropdown-nav">--}}
                            {{--<li><a href="dashboard.html">Dashboard</a></li>--}}
                            {{--<li><a href="dashboard-messages.html">Messages</a></li>--}}
                            {{--<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>--}}
                            {{--<li><a href="dashboard-reviews.html">Reviews</a></li>--}}
                            {{--<li><a href="dashboard-manage-jobs.html">Jobs</a>--}}
                            {{--<ul class="dropdown-nav">--}}
                            {{--<li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>--}}
                            {{--<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>--}}
                            {{--<li><a href="dashboard-post-a-job.html">Post a Job</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="dashboard-manage-tasks.html">Tasks</a>--}}
                            {{--<ul class="dropdown-nav">--}}
                            {{--<li><a href="dashboard-manage-tasks.html">Manage Tasks</a></li>--}}
                            {{--<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>--}}
                            {{--<li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>--}}
                            {{--<li><a href="dashboard-post-a-task.html">Post a Task</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="dashboard-settings.html">Settings</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}

                            <li><a href="#">Контакты</a>
                                <ul class="dropdown-nav">
                                    <li><a href="pages-blog.html">Blog</a></li>
                                    <li><a href="pages-pricing-plans.html">Pricing Plans</a></li>
                                    <li><a href="pages-checkout-page.html">Checkout Page</a></li>
                                    <li><a href="pages-invoice-template.html">Invoice Template</a></li>
                                    <li><a href="pages-user-interface-elements.html">User Interface Elements</a></li>
                                    <li><a href="pages-icons-cheatsheet.html">Icons Cheatsheet</a></li>
                                    <li><a href="pages-login.html">Login & Register</a></li>
                                    <li><a href="pages-404.html">404 Page</a></li>
                                    <li><a href="pages-contact.html">Contact</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">

                    <!--  User Notifications -->





                    <!-- User Menu -->
                    @guest
                        <div class="header-widget">
                            <a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Вход / Регистрация</span></a>
                        </div>
                    @else
                        <div class="header-notifications user-menu">
                        <div class="header-notifications-trigger">
                        <a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div></a>
                        </div>

                    <!-- Dropdown -->

                        <div class="header-notifications-dropdown">

                        <!-- User Status -->


                        <!-- User Name / Avatar -->
                        <div class="user-details">
                        <div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
                        <div class="user-name">
                            {{ Auth::user()->name }}<span>Психолог</span>
                        </div>
                        </div>




                        <ul class="user-menu-small-nav">

                        <li><a href="{{route('SpecProfileSettings')}}"><i class="icon-material-outline-settings"></i> Настройки</a></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               <i class="icon-material-outline-power-settings-new" ></i> Выход</a></li>

                        </ul>
                        </div>
                        </div>
                    @endguest
                </div>

            </div>
            <!-- User Menu / End -->

            <!-- Mobile Navigation Button -->
            <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

        </div>
        <!-- Right Side Content / End -->

</div>
</div>
<!-- Header / End -->

</header>
@yield('content')

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

                            <!-- Language Switcher -->
                            {{--<div class="footer-row">--}}
                            {{--<div class="footer-row-inner">--}}
                            {{--<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">--}}
                            {{--<option selected>English</option>--}}
                            {{--<option>Français</option>--}}
                            {{--<option>Español</option>--}}
                            {{--<option>Deutsch</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>

                    </div>
                    <!-- Footer Rows Container / End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section / End -->

{{--<!-- Footer Middle Section -->--}}
{{--<div class="footer-middle-section">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}

{{--<!-- Links -->--}}
{{--<div class="col-xl-2 col-lg-2 col-md-3">--}}
{{--<div class="footer-links">--}}
{{--<h3>For Candidates</h3>--}}
{{--<ul>--}}
{{--<li><a href="#"><span>Browse Jobs</span></a></li>--}}
{{--<li><a href="#"><span>Add Resume</span></a></li>--}}
{{--<li><a href="#"><span>Job Alerts</span></a></li>--}}
{{--<li><a href="#"><span>My Bookmarks</span></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Links -->--}}
{{--<div class="col-xl-2 col-lg-2 col-md-3">--}}
{{--<div class="footer-links">--}}
{{--<h3>For Employers</h3>--}}
{{--<ul>--}}
{{--<li><a href="#"><span>Browse Candidates</span></a></li>--}}
{{--<li><a href="#"><span>Post a Job</span></a></li>--}}
{{--<li><a href="#"><span>Post a Task</span></a></li>--}}
{{--<li><a href="#"><span>Plans & Pricing</span></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Links -->--}}
{{--<div class="col-xl-2 col-lg-2 col-md-3">--}}
{{--<div class="footer-links">--}}
{{--<h3>Helpful Links</h3>--}}
{{--<ul>--}}
{{--<li><a href="#"><span>Contact</span></a></li>--}}
{{--<li><a href="#"><span>Privacy Policy</span></a></li>--}}
{{--<li><a href="#"><span>Terms of Use</span></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Links -->--}}
{{--<div class="col-xl-2 col-lg-2 col-md-3">--}}
{{--<div class="footer-links">--}}
{{--<h3>Account</h3>--}}
{{--<ul>--}}
{{--<li><a href="#"><span>Log In</span></a></li>--}}
{{--<li><a href="#"><span>My Account</span></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Newsletter -->--}}
{{--<div class="col-xl-4 col-lg-4 col-md-12">--}}
{{--<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>--}}
{{--<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>--}}
{{--<form action="#" method="get" class="newsletter">--}}
{{--<input type="text" name="fname" placeholder="Enter your email address">--}}
{{--<button type="submit"><i class="icon-feather-arrow-right"></i></button>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Footer Middle Section / End -->--}}

<!-- Footer Copyrights -->
    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    © 2018 <strong>Hireo</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#login">Вход</a></li>
            <li><a href="#register">Регистрация</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Login -->
            <div class="popup-tab-content" id="login">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Мы рады видеть Вас снова</h3>
                    <span>Нет аккаунта? <a href="#" class="register-tab">Зарегистрироваться</a></span>
                </div>

                <!-- Form -->
                <form method="post" id="login-form" action="{{ route('login') }}">
                    @csrf
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" id="email" name="email" placeholder="Email" required/>
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" id="password" name="password" placeholder="Пароль" required/>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-password">Забыли пароль?</a>
                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Войти <i class="icon-material-outline-arrow-right-alt"></i></button>

                </form>

                <!-- Social Login -->
                {{--<div class="social-login-separator"><span>or</span></div>--}}
                {{--<div class="social-login-buttons">--}}
                {{--<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>--}}
                {{--<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>--}}
                {{--</div>--}}

            </div>

            <!-- Register -->
            <div class="popup-tab-content" id="register">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Создание аккаунта!</h3>
                </div>

                {{--<!-- Account Type -->--}}
                {{--<div class="account-type">--}}
                    {{--<div>--}}
                        {{--<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>--}}
                        {{--<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Специалист</label>--}}
                    {{--</div>--}}

                    {{--<div>--}}
                        {{--<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>--}}
                        {{--<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Пользователь</label>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <!-- Form -->
                <form method="post" action="{{ route('register') }}" id="register-account-form" >
                    @csrf
                    {{--<div class="input-with-icon-left">--}}
                        {{--<i class="icon-material-outline-account-circle"></i>--}}
                        {{--<input type="text" class="input-text with-border" name="name" id="name" placeholder="Имя" required/>--}}
                    {{--</div>--}}
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" id="email" name="email" placeholder="Email" required/>
                    </div>

                    <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" id="password" name="password" placeholder="Пароль" required/>
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" id="password-confirm" name="password_confirmation" placeholder="Повторите пароль" required/>
                    </div>
                    <!-- Button -->
                    <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Регистрация <i class="icon-material-outline-arrow-right-alt"></i></button>

                </form>



                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>


                <!-- Social Login -->
                {{--<div class="social-login-separator"><span>or</span></div>--}}
                {{--<div class="social-login-buttons">--}}
                {{--<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>--}}
                {{--<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>--}}
                {{--</div>--}}

            </div>

        </div>
    </div>
</div>
<!-- Sign In Popup / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>


<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            // componentRestrictions: {country: "us"}
        };

        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    }

    // Autocomplete adjustment for homepage
    if ($('.intro-banner-search-form')[0]) {
        setTimeout(function(){
            $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
        }, 300);
    }

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete"></script>

</body>
</html>