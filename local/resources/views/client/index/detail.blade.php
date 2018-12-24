@extends('client.master')
@section('title', 'Vinso')
@section('fb_title', 'Vinso')
@section('fb_des', 'Vinso')
@section('fb_img', asset('local/resources/assets/images/PostLink.png'))

@section('main')
    <link rel="stylesheet" href="css/banner_head.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/style.css">
    <div id="main">
        <div class="bannerHeader" style="background: url('images/BackGround.png') no-repeat center /cover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bannerHeaderMain">
                            <div class="bannerHeaderMainLogo">
                                <a href="">
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
                                    <a href="{{ asset('/') }}">Home</a>
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
        <section class="et-faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2 text-center et-service-sect">
                        <div class="et-services-title">
                            <h1 class="text-uppercase titleCustom">{{ $news->title }}</h1>
                            <div class="et-service-icon">
                                <span class="et-title-faq"></span><img src="images/icons/faq-page.png" alt=""><span class="et-title-faq2"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="et-blog-inner-search">
                            <div class="input-group">
                                <input placeholder="Search" class="form-control et-bisrch search-input" name="search-field" type="text">
                                <span class="input-group-btn">
								<button type="button" class="btn text-thm et-search"><i class="fa fa-search"></i></button>
							</span>
                            </div>
                            <div class="searchValue">

                            </div>
                        </div>
                        <div class="et-categories et-inner-box">
                            <h3 class="et-popular-categori-ttl text-uppercase titleCustom"><i class="pe-7s-paper-plane"></i> CATEGORY</h3>
                            <ul class="list-unstyled">
                                @foreach( $gr_childs as $gr)
                                    <li><p><a href="{{ $gr->link == null ? asset('group/'.$gr->slug.'--n-'.$gr->id) : $gr->link }}" {{ $gr->link == null ? '' : 'target="_blank"' }} >{{ $gr->title }}</a></p></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="et-blog-smlastest-post et-inner-box">
                            <h3 class="et-blog-smttl text-uppercase titleCustom"><i class="pe-7s-tools"></i> LAST News</h3>
                            @foreach($latestpost as $news)
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{ asset('news/'.$news->slug.'--n-'.$news->id) }}" style="background: url('{{ asset('local/storage/app/article/resized200-'.$news->fimage) }}') no-repeat center /cover;">
                                            {{--<img class="media-object" src="{{ asset('local/storage/app/article/resized200-'.$news->fimage) }}" alt="{{ $news->title }}.jpg">--}}
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="{{ asset('news/'.$news->slug.'--n-'.$news->id) }}">{{ $news->title }}</a> </h5>
                                        <h6 class="et-bsmp-ttl">{{ date('d M Y',$news->created_at) }}</h6>
                                        {{--<a class="et-bsmpa" href="{{ asset('detail/'.$news->slug.'--n-'.$news->id) }}">readmore</a>--}}
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="col-md-8 et-pzero">
                        <div class="et-blog-col et-blg-grid">
                            <div class="et-blog-cntnt">
                                {!! $content->noidung !!}
                                <hr>
                            </div>
                        </div>
                        @if($news->tacgia != null)
                            <ul class="et-bpstcmnt list-inline">
                                <li><a href="#"><span class="fa fa-user"> posted by {{ $news->tacgia }} </span></a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        var url = $('.currentUrl').text();
        $(document).on('keypress', '.search-input', function(e) {
            var search = $(this).val();
            $.ajax({
                method: 'POST',
                url: url+'search',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'search': search
                },
                success: function (resp) {
                    if(resp){
                        $('.searchValue').html(resp);
                    }
                },
                error: function () {
                    $('.searchValue').html('');
                    console.log('error');
                }
            });


        });
    </script>
@stop
