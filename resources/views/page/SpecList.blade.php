@extends('layouts.index')
@section('content')
    <!-- Spacer -->
    <div class="margin-top-90"></div>
    <!-- Spacer / End-->
    <!-- Page Content
================================================== -->
    <div class="container">
        <div class="row">
            {{--<div class="col-xl-3 col-lg-4">--}}
                {{--<div class="sidebar-container">--}}

                    {{--<!-- Location -->--}}
                    {{--<div class="sidebar-widget">--}}
                        {{--<h3>Location</h3>--}}
                        {{--<div class="input-with-icon">--}}
                            {{--<div id="autocomplete-container">--}}
                                {{--<input id="autocomplete-input" type="text" placeholder="Location">--}}
                            {{--</div>--}}
                            {{--<i class="icon-material-outline-location-on"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Category -->--}}
                    {{--<div class="sidebar-widget">--}}
                        {{--<h3>Category</h3>--}}
                        {{--<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >--}}
                            {{--<option>Admin Support</option>--}}
                            {{--<option>Customer Service</option>--}}
                            {{--<option>Data Analytics</option>--}}
                            {{--<option>Design & Creative</option>--}}
                            {{--<option>Legal</option>--}}
                            {{--<option>Software Developing</option>--}}
                            {{--<option>IT & Networking</option>--}}
                            {{--<option>Writing</option>--}}
                            {{--<option>Translation</option>--}}
                            {{--<option>Sales & Marketing</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}

                    {{--<!-- Keywords -->--}}
                    {{--<div class="sidebar-widget">--}}
                        {{--<h3>Keywords</h3>--}}
                        {{--<div class="keywords-container">--}}
                            {{--<div class="keyword-input-container">--}}
                                {{--<input type="text" class="keyword-input" placeholder="e.g. task title"/>--}}
                                {{--<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>--}}
                            {{--</div>--}}
                            {{--<div class="keywords-list"><!-- keywords go here --></div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Hourly Rate -->--}}
                    {{--<div class="sidebar-widget">--}}
                        {{--<h3>Hourly Rate</h3>--}}
                        {{--<div class="margin-top-55"></div>--}}

                        {{--<!-- Range Slider -->--}}
                        {{--<input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="250" data-slider-step="5" data-slider-value="[10,250]"/>--}}
                    {{--</div>--}}

                    {{--<!-- Tags -->--}}
                    {{--<div class="sidebar-widget">--}}
                        {{--<h3>Skills</h3>--}}

                        {{--<div class="tags-container">--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag1"/>--}}
                                {{--<label for="tag1">front-end dev</label>--}}
                            {{--</div>--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag2"/>--}}
                                {{--<label for="tag2">angular</label>--}}
                            {{--</div>--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag3"/>--}}
                                {{--<label for="tag3">react</label>--}}
                            {{--</div>--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag4"/>--}}
                                {{--<label for="tag4">vue js</label>--}}
                            {{--</div>--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag5"/>--}}
                                {{--<label for="tag5">web apps</label>--}}
                            {{--</div>--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag6"/>--}}
                                {{--<label for="tag6">design</label>--}}
                            {{--</div>--}}
                            {{--<div class="tag">--}}
                                {{--<input type="checkbox" id="tag7"/>--}}
                                {{--<label for="tag7">wordpress</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}

                        {{--<!-- More Skills -->--}}
                        {{--<div class="keywords-container margin-top-20">--}}
                            {{--<div class="keyword-input-container">--}}
                                {{--<input type="text" class="keyword-input" placeholder="add more skills"/>--}}
                                {{--<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>--}}
                            {{--</div>--}}
                            {{--<div class="keywords-list"><!-- keywords go here --></div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}

                {{--</div>--}}
            {{--</div>--}}
            <div class="col-xl-9 col-lg-8 content-left-offset">

                {{--<h3 class="page-title">Search Results</h3>--}}

                <div class="notify-box margin-top-15">
                    {{--<div class="switch-container">--}}
                        {{--<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>--}}
                    {{--</div>--}}

                    <div class="sort-by">
                        <span>Фильтр:</span>
                        <select class="selectpicker hide-tick">
                            <option>По рейтингу</option>
                            <option>Новые</option>
                            <option>Старые(НАДО заменить)</option>
                            <option>Случайно</option>
                        </select>
                    </div>
                </div>

                <!-- Freelancers List Container -->
                <div class="freelancers-container freelancers-list-layout margin-top-35">

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
                                    <a href="single-freelancer-profile.html"><img src="{{asset('/storage/'. $user->avatar )}}" alt=""></a>
                                </div>

                                <!-- Name -->
                                <div class="freelancer-name">
                                    <h4><a href="#">{{$user->name}}</a></h4>
                                    <span>{{$user->specialty}}</span>
                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="{{$user->rating}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="freelancer-details">
                            <div class="freelancer-details-list">
                                <ul>
                                    <li>Город <strong><i class="icon-material-outline-location-on"></i> {{$user->sity}}</strong></li>
                                    <li>Цена <strong>{{$user->price}}р / ч</strong></li>
                                    <li>Бесед<strong>95</strong></li>
                                </ul>
                            </div>
                            <a href="/single-spec-profile/{{$user->id}}" class="button button-sliding-icon ripple-effect">Просмотреть профиль<i class="icon-material-outline-arrow-right-alt"></i></a>
                        </div>
                    </div>
                    <!-- Freelancer / End -->
                    @endforeach

                </div>
                <!-- Tasks Container / End -->


                {{--<!-- Pagination -->--}}
                {{--<div class="clearfix"></div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<!-- Pagination -->--}}
                        {{--<div class="pagination-container margin-top-40 margin-bottom-60">--}}
                            {{--<nav class="pagination">--}}
                                {{--<ul>--}}
                                    {{--<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>--}}
                                    {{--<li><a href="#" class="ripple-effect">1</a></li>--}}
                                    {{--<li><a href="#" class="current-page ripple-effect">2</a></li>--}}
                                    {{--<li><a href="#" class="ripple-effect">3</a></li>--}}
                                    {{--<li><a href="#" class="ripple-effect">4</a></li>--}}
                                    {{--<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</nav>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Pagination / End -->--}}

            </div>
        </div>
    </div>

@endsection