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

                        <ul data-submenu-title="Start">
                            <li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
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
                            <li class="active"><a href="{{route('SpecProfileSettings')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
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
                <h3>Настройки</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li>Настройки</li>
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
                                                <h5>Имя</h5>
                                                <input name="name" type="text" class="with-border" value="{{$user->name}}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Фамилия</h5>
                                                <input name="last_name" type="text" class="with-border" value="{{$user->last_name}}">
                                            </div>
                                        </div>

                                        {{--<div class="col-xl-6">--}}
                                            {{--<!-- Account Type -->--}}
                                            {{--<div class="submit-field">--}}
                                                {{--<h5>Account Type</h5>--}}
                                                {{--<div class="account-type">--}}
                                                    {{--<div>--}}
                                                        {{--<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>--}}
                                                        {{--<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>--}}
                                                    {{--</div>--}}

                                                    {{--<div>--}}
                                                        {{--<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>--}}
                                                        {{--<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-xl-6">--}}
                                            {{--<div class="submit-field">--}}
                                                {{--<h5>Email</h5>--}}
                                                {{--<input type="text" class="with-border" value="">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

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
                                                    <span class="bidding-detail">Укажите <strong>плату за час</strong></span>

                                                    <!-- Slider -->
                                                    <div class="bidding-value margin-bottom-10"><span id="biddingVal"></span> р</div>
                                                    <input class="bidding-slider" type="text" value="" name="price" data-slider-handle="custom" data-slider-currency="$" data-slider-min="50" data-slider-max="3000" data-slider-value="{{$user->price}}" data-slider-step="1" data-slider-tooltip="hide" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Skills <i class="help-icon" data-tippy-placement="right" title="Ваша специализация"></i></h5>

                                                <!-- Skills List -->
                                                <div class="keywords-container">
                                                    <div class="keyword-input-container">
                                                        <input type="text" name="skills" class="keyword-input with-border" placeholder="{{$user->skills}}"/>
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
                                        {{--<div class="col-xl-6">--}}
                                            {{--<div class="submit-field">--}}
                                                {{--<h5>Tagline</h5>--}}
                                                {{--<input type="text" class="with-border" value="iOS Expert + Node Dev">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-xl-6">--}}
                                            {{--<div class="submit-field">--}}
                                                {{--<h5>Nationality</h5>--}}
                                                {{--<select class="selectpicker with-border" data-size="7" title="Select Job Type" data-live-search="true">--}}
                                                    {{--<option value="AR">Argentina</option>--}}
                                                    {{--<option value="AM">Armenia</option>--}}
                                                    {{--<option value="AW">Aruba</option>--}}
                                                    {{--<option value="AU">Australia</option>--}}
                                                    {{--<option value="AT">Austria</option>--}}
                                                    {{--<option value="AZ">Azerbaijan</option>--}}
                                                    {{--<option value="BS">Bahamas</option>--}}
                                                    {{--<option value="BH">Bahrain</option>--}}
                                                    {{--<option value="BD">Bangladesh</option>--}}
                                                    {{--<option value="BB">Barbados</option>--}}
                                                    {{--<option value="BY">Belarus</option>--}}
                                                    {{--<option value="BE">Belgium</option>--}}
                                                    {{--<option value="BZ">Belize</option>--}}
                                                    {{--<option value="BJ">Benin</option>--}}
                                                    {{--<option value="BM">Bermuda</option>--}}
                                                    {{--<option value="BT">Bhutan</option>--}}
                                                    {{--<option value="BG">Bulgaria</option>--}}
                                                    {{--<option value="BF">Burkina Faso</option>--}}
                                                    {{--<option value="BI">Burundi</option>--}}
                                                    {{--<option value="KH">Cambodia</option>--}}
                                                    {{--<option value="CM">Cameroon</option>--}}
                                                    {{--<option value="CA">Canada</option>--}}
                                                    {{--<option value="CV">Cape Verde</option>--}}
                                                    {{--<option value="KY">Cayman Islands</option>--}}
                                                    {{--<option value="CO">Colombia</option>--}}
                                                    {{--<option value="KM">Comoros</option>--}}
                                                    {{--<option value="CG">Congo</option>--}}
                                                    {{--<option value="CK">Cook Islands</option>--}}
                                                    {{--<option value="CR">Costa Rica</option>--}}
                                                    {{--<option value="CI">Côte d'Ivoire</option>--}}
                                                    {{--<option value="HR">Croatia</option>--}}
                                                    {{--<option value="CU">Cuba</option>--}}
                                                    {{--<option value="CW">Curaçao</option>--}}
                                                    {{--<option value="CY">Cyprus</option>--}}
                                                    {{--<option value="CZ">Czech Republic</option>--}}
                                                    {{--<option value="DK">Denmark</option>--}}
                                                    {{--<option value="DJ">Djibouti</option>--}}
                                                    {{--<option value="DM">Dominica</option>--}}
                                                    {{--<option value="DO">Dominican Republic</option>--}}
                                                    {{--<option value="EC">Ecuador</option>--}}
                                                    {{--<option value="EG">Egypt</option>--}}
                                                    {{--<option value="GP">Guadeloupe</option>--}}
                                                    {{--<option value="GU">Guam</option>--}}
                                                    {{--<option value="GT">Guatemala</option>--}}
                                                    {{--<option value="GG">Guernsey</option>--}}
                                                    {{--<option value="GN">Guinea</option>--}}
                                                    {{--<option value="GW">Guinea-Bissau</option>--}}
                                                    {{--<option value="GY">Guyana</option>--}}
                                                    {{--<option value="HT">Haiti</option>--}}
                                                    {{--<option value="HN">Honduras</option>--}}
                                                    {{--<option value="HK">Hong Kong</option>--}}
                                                    {{--<option value="HU">Hungary</option>--}}
                                                    {{--<option value="IS">Iceland</option>--}}
                                                    {{--<option value="IN">India</option>--}}
                                                    {{--<option value="ID">Indonesia</option>--}}
                                                    {{--<option value="NO">Norway</option>--}}
                                                    {{--<option value="OM">Oman</option>--}}
                                                    {{--<option value="PK">Pakistan</option>--}}
                                                    {{--<option value="PW">Palau</option>--}}
                                                    {{--<option value="PA">Panama</option>--}}
                                                    {{--<option value="PG">Papua New Guinea</option>--}}
                                                    {{--<option value="PY">Paraguay</option>--}}
                                                    {{--<option value="PE">Peru</option>--}}
                                                    {{--<option value="PH">Philippines</option>--}}
                                                    {{--<option value="PN">Pitcairn</option>--}}
                                                    {{--<option value="PL">Poland</option>--}}
                                                    {{--<option value="PT">Portugal</option>--}}
                                                    {{--<option value="PR">Puerto Rico</option>--}}
                                                    {{--<option value="QA">Qatar</option>--}}
                                                    {{--<option value="RE">Réunion</option>--}}
                                                    {{--<option value="RO">Romania</option>--}}
                                                    {{--<option value="RU">Russian Federation</option>--}}
                                                    {{--<option value="RW">Rwanda</option>--}}
                                                    {{--<option value="SZ">Swaziland</option>--}}
                                                    {{--<option value="SE">Sweden</option>--}}
                                                    {{--<option value="CH">Switzerland</option>--}}
                                                    {{--<option value="TR">Turkey</option>--}}
                                                    {{--<option value="TM">Turkmenistan</option>--}}
                                                    {{--<option value="TV">Tuvalu</option>--}}
                                                    {{--<option value="UG">Uganda</option>--}}
                                                    {{--<option value="UA">Ukraine</option>--}}
                                                    {{--<option value="GB">United Kingdom</option>--}}
                                                    {{--<option value="US" selected>United States</option>--}}
                                                    {{--<option value="UY">Uruguay</option>--}}
                                                    {{--<option value="UZ">Uzbekistan</option>--}}
                                                    {{--<option value="YE">Yemen</option>--}}
                                                    {{--<option value="ZM">Zambia</option>--}}
                                                    {{--<option value="ZW">Zimbabwe</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Описание</h5>
                                                <textarea name="description" cols="30" rows="5" class="with-border">{{$user->description}}</textarea>
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

                {{--<!-- Button -->--}}
                {{--<div class="col-xl-12">--}}
                    {{--<button class="button ripple-effect big margin-top-30" type="submit" form="EditProfile">Сохранить </button>--}}
                    {{--<br>--}}
                    {{--<a href="#" class="button ripple-effect big margin-top-30">Сохранить</a>--}}
                {{--</div>--}}

            </div>
            <!-- Row / End -->

        </div>


    </form>
    </div>
</div>
@endsection