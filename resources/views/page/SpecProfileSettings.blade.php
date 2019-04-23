@extends('layouts.index')
@section('content')
<!-- Dashboard Container -->
<div class="dashboard-container">

    <!-- Dashboard Sidebar
    ================================================== -->
    <div class="dashboard-sidebar">
        <div class="dashboard-sidebar-inner" data-simplebar>
            <div class="dashboard-nav-container">

                <!-- Responsive Navigation Trigger -->
                <a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
                    <span class="trigger-title">Dashboard Navigation</span>
                </a>

                <!-- Navigation -->
                @extends('layouts.settingleftmenu')
                <div class="dashboard-nav">
                    <div class="dashboard-nav-inner">

                        <ul data-submenu-title="Панель">
                            {{--<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>--}}
                            <li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Сообщения <span class="nav-tag">2</span></a></li>
                            {{--<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>--}}
                            <li><a href="{{route('WebConference')}}"><i class="icon-material-outline-rate-review"></i> Веб-конференции</a></li>
                        </ul>

                        {{--<ul data-submenu-title="Organize and Manage">--}}
                            {{--<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="dashboard-manage-jobs.html">Manage Jobs <span class="nav-tag">3</span></a></li>--}}
                                    {{--<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>--}}
                                    {{--<li><a href="dashboard-post-a-job.html">Post a Job</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="dashboard-manage-tasks.html">Manage Tasks <span class="nav-tag">2</span></a></li>--}}
                                    {{--<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>--}}
                                    {{--<li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>--}}
                                    {{--<li><a href="dashboard-post-a-task.html">Post a Task</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}

                        <ul data-submenu-title="Акаунт">
                            <li class="active"><a href="{{route('SpecProfileSettings')}}"><i class="icon-material-outline-settings"></i> Профиль</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                    <i class="icon-material-outline-power-settings-new" ></i> Выход</a></li>
                        </ul>

                    </div>
                </div>
                <!-- Navigation / End -->

            </div>
        </div>
    </div>
    <!-- Dashboard Sidebar / End -->


    <!-- Dashboard Content
    ================================================== -->

    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Личный кабинет</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li>Личный кабинет</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-account-circle"></i> Мой аккаунт</h3>
                        </div>

                        <div class="content with-padding">

                            <div class="row">

                                <form method="post" action="{{ route('UploadImage') }}" enctype="multipart/form-data" id="upload-image-form">
                                    {{csrf_field()}}
                                    <div class="col-auto">
                                        <div class="avatar-wrapper" data-tippy-placement="bottom" title="Сменить аватар">
                                            <input class="file-upload" type="file" name="image" accept="image/*"/>

                                            <img class="profile-pic" src="{{asset('/storage/'. $user->avatar )}}" alt="" />
                                            <div class="upload-button"></div>

                                        </div>
                                        <button class="button ripple-effect big margin-top-30" type="submit" form="upload-image-form">Загрузить</button>
                                    </div>

                                </form>

                                <form method="post" action="{{ route('EditProfile') }}" id="EditProfile" >
                                    @csrf
                                <div class="col">
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>ФИО</h5>
                                                <input name="name" type="text" class="with-border" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Страна</h5>
                                                <input name="country" type="text" class="with-border" value="{{$user->country}}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <!-- Account Type -->
                                            <div class="submit-field">
                                                <h5>Тип аккаунта</h5>
                                                <div class="account-type">
                                                    <div>
                                                        <input type="radio" name="account-type-radio"  value="0" id="freelancer-radio" class="account-type-radio" />
                                                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Пользователь</label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" name="account-type-radio"  value="1" id="employer-radio" class="account-type-radio" checked/>
                                                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Специалист</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Email</h5>
                                                <input type="text" class="with-border" value="tom@example.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-account-circle"></i> Мой профиль</h3>
                        </div>

                        <div class="content">
                            <ul class="fields-ul">
                                <li>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <div class="bidding-widget">
                                                    <!-- Headline -->
                                                    <span class="bidding-detail">Укажите плату за час</span>

                                                    <!-- Slider -->
                                                    <div class="bidding-value margin-bottom-10"><span id="biddingVal"></span> р</div>
                                                    <input class="bidding-slider" type="text" value="" name="price" data-slider-handle="custom" data-slider-currency="$" data-slider-min="500" data-slider-max="3000" data-slider-value="{{$user->price}}" data-slider-step="1" data-slider-tooltip="hide" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Специальность <i class="help-icon" data-tippy-placement="right" title="Специальность"></i></h5>

                                                <!-- Skills List -->
                                                <div class="keywords-container">
                                                    <div class="keyword-input-container">
                                                        <input type="text" name="skills" class="keyword-input with-border" placeholder="{{$user->specialty}}"/>
                                                    </div>
                                                    {{--<div class="keywords-list">--}}
                                                        {{--<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Психолог</span></span>--}}
                                                        {{--<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Работа с маньяками</span></span>--}}
                                                        {{--<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Работа с душевнобольными</span></span>--}}
                                                        {{--<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>--}}
                                                        {{--<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>--}}
                                                    {{--</div>--}}
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="col-xl-4">--}}
                                            {{--<div class="submit-field">--}}
                                                {{--<h5>Attachments</h5>--}}

                                                {{--<!-- Attachments -->--}}
                                                {{--<div class="attachments-container margin-top-0 margin-bottom-0">--}}
                                                    {{--<div class="attachment-box ripple-effect">--}}
                                                        {{--<span>Cover Letter</span>--}}
                                                        {{--<i>PDF</i>--}}
                                                        {{--<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="attachment-box ripple-effect">--}}
                                                        {{--<span>Contract</span>--}}
                                                        {{--<i>DOCX</i>--}}
                                                        {{--<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="clearfix"></div>--}}

                                                {{--<!-- Upload Button -->--}}
                                                {{--<div class="uploadButton margin-top-0">--}}
                                                    {{--<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>--}}
                                                    {{--<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>--}}
                                                    {{--<span class="uploadButton-file-name">Maximum file size: 10 MB</span>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Должность</h5>
                                                <textarea name="description" cols="30" rows="3" class="with-border">{{$user->dolzhnost}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Специализация</h5>
                                                <textarea name="specialization" cols="30" rows="3" class="with-border">{{$user->specialization}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Методы</h5>
                                                <textarea name="metod" cols="30" rows="2" class="with-border">{{$user->description}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div id="test1" class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-lock"></i> Смена пароля</h3>
                        </div>

                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Пароль</h5>
                                        <input type="password" class="with-border">
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Новый пароль</h5>
                                        <input type="password" class="with-border">
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Повторите новый пароль</h5>
                                        <input type="password" class="with-border">
                                    </div>
                                </div>

                                {{--<div class="col-xl-12">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<input type="checkbox" id="two-step" checked>--}}
                                        {{--<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <button class="button ripple-effect big margin-top-30" type="submit" form="EditProfile">Сохранить </button>
                        </div>
                    </div>
                </div>


            </div>


        </div>


    </form>
    </div>
</div>
@endsection