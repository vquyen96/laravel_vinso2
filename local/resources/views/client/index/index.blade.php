@extends('client.master')
@section('title', 'Vinso')
@section('fb_title', 'Vinso')
@section('fb_des', 'Vinso')
@section('fb_img', asset('local/resources/assets/images/PostLink.png'))

@section('main')
    <link rel="stylesheet" href="css/list_news.css">
    <div id="main">
        <div class="bannerHeaderHome" style="background: url('{{ asset('local/storage/app/article/'.$list[0]->fimage) }}') no-repeat center /cover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bannerHeaderHomeBig">
                            <div class="bannerHeaderHomeTop">
                                <div class="bannerHeaderHomeTopItem">
                                    <a href="#">
                                        <img src="images/Logo.png" alt="">
                                    </a>
                                </div>
                                <div class="bannerHeaderHomeTopItem">
                                    <div class="btnSearch">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    {{--<div class="btnLogin">--}}
                                        {{--<a href="#" class="btnOutLineRed">--}}
                                            {{--login--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="btnSignup">--}}
                                        {{--<a href="#" class="btnRed">--}}
                                            {{--signup--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="bannerHeaderHomeMain">
                                {{--<div class="txt30_15 text-uppercase cl_303030">--}}
                                    {{--hight tech--}}
                                {{--</div>--}}
                                <div class="txt40_20 text-uppercase cl_303030">
                                    {{ $list[0]->title }}
                                </div>
                                <div class="bannerHeaderHomeMainContent">
                                    <p>{{ $list[0]->title }}</p>
                                </div>
                                <div class="btnReacmore">
                                    <a href="{{ asset('quality/'.$list[0]->slug.'--n-'.$list[0]->id) }}" class="btnRed">
                                        read more
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        {{--<section class="section1">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-12">--}}
                        {{--<div class="sectionMain">--}}
                            {{--<div class="txt25_14 text-center">--}}
                                {{--{{ $web_info->home1 }}--}}
                            {{--</div>--}}
                            {{--<div class="sectionBranch d-flex">--}}
                                {{--<div class="sectionBranchItem">--}}
                                    {{--<img src="images/Layer 2.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="sectionBranchItem">--}}
                                    {{--<img src="images/Logo.png" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="sectionBranchItem">--}}
                                    {{--<img src="images/Bosch-logo.png" alt="">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        <section class="section1 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-3 txt40_20">
                        <h1>News</h1>
                    </div>
                    @foreach( $list_news as $item)
                        <div class="col-md-4 col-sm-6 col-xs-1">
                            <div class="newsItem mb-5">
                                <a href="{{ asset('news/'.$item->slug.'--n-'.$item->id) }}" class="newsItemImg mb-2" style="background: url('{{ asset('local/storage/app/article/resized500-'.$item->fimage) }}') no-repeat center /cover"></a>
                                <a href="{{ asset('news/'.$item->slug.'--n-'.$item->id) }}" class="newsItemTitle">
                                    {{ $item->title }}
                                </a>
                                <div class="newsItemSummnary">
                                    {{ cut_string($item->summary, 100) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @if(isset($list[1]))
        <section class="section2" style="background: url('{{ asset('local/storage/app/article/'.$list[1]->fimage) }}') no-repeat center /cover;">
            <div class="sectionMain">
                <div class="txt40_20 sectionMainTitle">
                    {{ $list[1]->title }}
                </div>
                <div class="cl_303030 sectionMainContent">
                    {{ $list[1]->summary }}
                </div>
                <div class="btnReacmore">
                    <a href="{{ asset('quality/'.$list[1]->slug.'--n-'.$list[1]->id) }}" class="btnRed">
                        read more
                    </a>
                </div>
            </div>
        </section>
        @endif
        @if(isset($list[2]))
        <section class="section3" style="background: url('{{ asset('local/storage/app/article/'.$list[2]->fimage) }}') no-repeat center /cover;">
            <div class="sectionMain">
                <div class="txt40_20 sectionMainTitle">
                    {{ $list[2]->title }}
                </div>
                <div class="sectionMainContent">
                    {{ $list[2]->summary }}
                </div>
                <div class="btnReacmore">
                    <a href="{{ asset('quality/'.$list[1]->slug.'--n-'.$list[2]->id) }}" class="btnRed">
                        read more
                    </a>
                </div>
            </div>
        </section>
        @endif
        @if(isset($list[3]))
        <section class="section4 d-flex" style="background: url('{{ asset('local/storage/app/article/'.$list[3]->fimage) }}') no-repeat center /cover;">
            <div class="container d-flex">
                <div class="row d-flex">
                    <div class="col-12">
                        <div class="sectionMain">
                            <div class="txt40_20 sectionMainTitle">
                                {{ $list[3]->title }}
                            </div>
                            <div class="cl_303030 sectionMainContent">
                                {{ $list[3]->summary }}
                            </div>
                            <div class="btnReacmore ">
                                <a href="{{ asset('quality/'.$list[3]->slug.'--n-'.$list[3]->id) }}" class="btnRed">
                                    read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if(isset($list[4]))
        <section class="section2" style="background: url('{{ asset('local/storage/app/article/'.$list[4]->fimage) }}') no-repeat center /cover;">
            <div class="sectionMain">
                <div class="txt40_20 sectionMainTitle">
                    {{ $list[4]->title }}
                </div>
                <div class="cl_303030 sectionMainContent">
                    {{ $list[4]->summary }}
                </div>
                <div class="btnReacmore">
                    <a href="{{ asset('quality/'.$list[4]->slug.'--n-'.$list[4]->id) }}" class="btnRed">
                        read more
                    </a>
                </div>
            </div>
        </section>
        @endif
        <section class="section6">
            <div class="sectionMain text-center">
                <div class="txt40_20 sectionMainTitle">
                    {{ $web_info->home2 }}
                </div>
                <div class="sectionMainContent">
                    {{ $web_info->home3 }}
                </div>
            </div>
        </section>
        <section class="section7 d-flex">
            @foreach( $list_news as $index=>$item)
                @if( $index < 5 )
                    <div class="section7Item" style="background: url('{{ asset('local/storage/app/article/resized500-'.$item->fimage) }}') no-repeat center /cover">
                        <div class="section7ItemHover">
                            <div class="section7ItemHoverCenter">
                                <div class="txt30_15">
                                    {{ $item->title }}
                                </div>
                                <a href="{{ asset('news/'.$item->slug.'--n-'.$item->id) }}">
                                    learn more
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
           @endforeach
        </section>
    </div>
@stop
@section('script')
    <script type="text/javascript" src="js/main.js"></script>
@stop
