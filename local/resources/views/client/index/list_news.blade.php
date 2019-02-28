@extends('client.master')
@section('title', 'Vinso')
@section('fb_title', 'Vinso')
@section('fb_des', 'Vinso')
@section('fb_img', asset('local/resources/assets/images/PostLink.png'))

@section('main')
    <link rel="stylesheet" href="css/banner_head.css">
    <link rel="stylesheet" href="css/list_news.css">
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
                                    {{ $group->title }} Vinso
                                </h1>
                            </div>
                            <div class="bannerHeaderMainBreadcrumb">
                                <div class="breadcrumbItem">
                                    <a href="{{ route('home') }}">Home</a>
                                </div>
                                <div class="breadcrumbItem">
                                    <a href="{{ asset(Request::segment(1)) }}">{{ $group->title }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container pt-100">
                <div class="row">
                    <div class="col-12 text-center mb-3 txt40_20">
                        <h1 class="mb-5"> {{ $group->title }}</h1>
                    </div>
                    @foreach( $list as $item)
                    <div class="col-md-4 col-sm-6 col-xs-1">
                        <div class="newsItem mb-5">
                            <a href="{{ $item->link != null ? $item->link : route('client.detail', $item->slug.'--n-'.$item->id) }}" class="newsItemImg mb-2" style="background: url('{{ asset('local/storage/app/article/resized500-'.$item->fimage) }}') no-repeat center /cover"></a>
                            <a href="{{ $item->link != null ? $item->link : route('client.detail', $item->slug.'--n-'.$item->id) }}" class="newsItemTitle">
                                {{ $item->title }}
                            </a>
                            <div class="newsItemSummnary">
                                {{ cut_string($item->summary, 100) }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end mb-5">
                    @include('client.tinypage.custom-paginate', ['paginator' => $list])
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script type="text/javascript" src="js/main.js"></script>
@stop
