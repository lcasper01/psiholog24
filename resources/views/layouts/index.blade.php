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
                        <a href="{{route('home')}}"><img src="{{ asset('images/logo.png')}}" alt=""></a>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">

                            <li><a href="{{route('home')}}" class="current">Главная</a>

                            </li>

                            <li><a href="#">Клиенты</a>

                            </li>

                            <li><a href="#">Специалисты</a>
                                <ul class="dropdown-nav">

                                    <li><a href="{{route('Speclist')}}">Все специалисты</a></li>

                                </ul>
                            </li>

                            <li><a href="#">Контакты</a>

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
                        <a href="#"><div class="user-avatar status-online"><img src="{{ asset('/storage/'. $user->avatar)}}" alt=""></div></a>
                        </div>

                    <!-- Dropdown -->

                        <div class="header-notifications-dropdown">

                        <!-- User Status -->


                        <!-- User Name / Avatar -->
                        <div class="user-details">
                        <div class="user-avatar status-online"><img src="{{asset('/storage/'. $user->avatar)}}" alt=""></div>
                        <div class="user-name">
                           <span> {{$user->name}}</span>
                        </div>
                        </div>




                        <ul class="user-menu-small-nav">

                        <li><a href="{{route('SpecProfileSettings')}}"><i class="icon-material-outline-settings"></i> Личный кабинет</a></li>
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



    <!-- Header / End -->
    </header>

@yield('content')

@yield('footer')
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

                <!-- Form -->
                <form method="post" action="{{ route('register') }}" id="register-account-form" >
                    @csrf

                    <!-- Account Type -->
                        <div class="account-type">
                            <div>
                                <input type="radio" name="account-type-radio"  value="0" id="freelancer-radio" class="account-type-radio" checked/>
                                <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Пользователь</label>
                            </div>

                            <div>
                                <input type="radio" name="account-type-radio"  value="1" id="employer-radio" class="account-type-radio"/>
                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Специалист</label>
                            </div>
                        </div>


                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-account-circle"></i>
                        <input type="text" class="input-text with-border" name="name" id="name" placeholder="ФИО" required/>
                    </div>
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