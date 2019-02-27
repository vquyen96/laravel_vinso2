@extends('client.master')
@section('title', 'Vinso')
@section('fb_title', 'Vinso')
@section('fb_des', 'Vinso')
@section('fb_img', asset('local/resources/assets/images/PostLink.png'))

@section('main')
    <link rel="stylesheet" href="css/about.css">
    <div id="main">
        <div class="bannerHeader" style="background: url('images/BackGround.png') no-repeat center /cover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bannerHeaderMain">
                            <div class="bannerHeaderMainLogo">
                                <a href="{{ route('home') }}">
                                    <img src="images/Logo.png" alt="">
                                </a>
                            </div>
                            <div class="bannerHeaderMainTitle">
                                <h1>
                                    About Vinso
                                </h1>
                            </div>
                            <div class="bannerHeaderMainBreadcrumb">
                                <div class="breadcrumbItem">
                                    <a href="{{ route('home') }}">Home</a>
                                </div>
                                <div class="breadcrumbItem">
                                    <a href="{{ route('client.about') }}">About</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="welcome">
                            <div class="welcomeItem">
                                <div class="welcomeItemBigTitle txt40_20">
                                    {{ $about[0]->title }}
                                </div>
                                <div class="">
                                    {!! $about[0]->content !!}
                                </div>
                                {{--<div class="welcomeItemContent">--}}
                                    {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.--}}
                                {{--</div>--}}
                                {{--<div class="welcomeItemTitle">--}}
                                    {{--Unordered & Ordered Lists--}}
                                {{--</div>--}}
                                {{--<div class="list_vinso">--}}
                                    {{--<div class="list_vinso_item">--}}
                                        {{--<div class="list_vinso_item_icon">--}}
                                            {{--<img src="images/icon.png" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="list_vinso_item_content">--}}
                                            {{--Online Courses with full discount systems.--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="list_vinso_item">--}}
                                        {{--<div class="list_vinso_item_icon">--}}
                                            {{--<img src="images/icon.png" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="list_vinso_item_content">--}}
                                            {{--Online Courses with full discount systems.--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="list_vinso_item">--}}
                                        {{--<div class="list_vinso_item_icon">--}}
                                            {{--<img src="images/icon.png" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="list_vinso_item_content">--}}
                                            {{--Online Courses with full discount systems.--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="welcomeItem " style="background: url('{{ asset('local/storage/app/about/resized-'.$about[0]->img) }}') no-repeat center /cover">
                            </div>
                        </div>
                        <div class="welcome">
                            <div class="welcomeItem" style="background: url('{{ asset('local/storage/app/about/resized-'.$about[1]->img) }}') no-repeat center /cover"></div>
                            <div class="welcomeItem">
                                <div class="welcomeNav">
                                    <div class="welcomeItemNav">
                                        {{ $about[1]->title }}
                                    </div>
                                    <div class="welcomeItemNav active">
                                        {{ $about[2]->title }}
                                    </div>
                                </div>
                                <div class="welcomeNavContent">
                                    <div class="welcomeItemNavContent">
                                        {!! $about[1]->content !!}
                                        {{--<div class="welcomeItemTitle">--}}
                                            {{--Professional Certificate Courses (Online)--}}
                                        {{--</div>--}}
                                        {{--<ul>--}}
                                            {{--<li>Online certificates can be obtained in a range of specialized areas.</li>--}}
                                            {{--<li>Online diplomas are awarded for one to two years of study with LMS.</li>--}}
                                            {{--<li>Online associate degrees usually take approximately two years then.</li>--}}
                                            {{--<li>Online certificates can be obtained in a range of specialized areas.</li>--}}
                                            {{--<li>Online diplomas are awarded for one to two years of study with LMS.</li>--}}
                                        {{--</ul>--}}
                                    </div>
                                    <div class="welcomeItemNavContent">
                                        {!! $about[2]->content !!}
                                        {{--<div class="welcomeItemTitle">--}}
                                            {{--Professional Certificate Courses (Online)--}}
                                        {{--</div>--}}
                                        {{--<ul>--}}
                                            {{--<li>Onlineqqq certificates can be obtained in a range of specialized areas.</li>--}}
                                            {{--<li>qqqq diplomas are awarded for one to two years of study with LMS.</li>--}}
                                            {{--<li>Online associate degrees usually take approximately two years then.</li>--}}
                                            {{--<li>qq certificates can be obtained in a range of specialized areas.</li>--}}
                                            {{--<li>Online diplomas are awarded for one to two years of study with LMS.</li>--}}
                                        {{--</ul>--}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="borDer">
                            <div class="borderLeft"></div>
                            <div class="borderRight"></div>
                        </div>
                        <div class="certification">
                            <div class="certificationTitle txt40_20">
                                Certifications
                            </div>
                            <div class="row">
                                @foreach( $cer as $item)
                                <div class="col-sm-4 col-12">
                                    <div class="certificationItem">
                                        <div class="certificationItemImg" style="background: url('{{ asset('local/storage/app/cer/resized-'.$item->img) }}') no-repeat center /cover;"></div>
                                        <div class="certificationItemContent">
                                            {{ $item->title }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script type="text/javascript" src="js/main.js"></script>
@stop
