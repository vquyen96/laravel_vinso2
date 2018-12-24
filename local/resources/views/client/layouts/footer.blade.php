<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="footerItem">
                    <div class="footerItemTitle">
                        {{ $web_info->footer_contact0 }}
                    </div>
                    <div class="mb-2">
                        {{ $web_info->footer_contact1 }}
                    </div>
                    <div class="mb-2">
                        {{ $web_info->footer_contact2 }}
                    </div>
                    <div class="mb-2">
                        {{ $web_info->footer_contact3 }}
                    </div>
                    <div class="mb-2">
                        {{ $web_info->footer_contact4 }}
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12">
                <div class="footerItem">
                    <div class="footerItemTitle">
                        {{ $web_info->foter_mid_title }}
                    </div>
                    <div class="mb-2">
                        <a href="{{ $web_info->foter_mid_1_link }}">
                            {{ $web_info->foter_mid_1 }}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="{{ $web_info->foter_mid_2_link }}">
                            {{ $web_info->foter_mid_2 }}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="{{ $web_info->foter_mid_3_link }}">
                            {{ $web_info->foter_mid_3 }}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="{{ $web_info->foter_mid_4_link }}">
                            {{ $web_info->foter_mid_4 }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12">
                <div class="footerItem">
                    <div class="footerItemTitle">
                        {{ $web_info->footer_recruit_title }}
                    </div>
                    @foreach( $recruits as $item)
                    <div class="mb-2">
                        <a href="{{ asset('recruit/'.$item->slug.'--n-'.$item->id) }}">
                            {{ $item->title }}
                        </a>

                    </div>
                    @endforeach
                    {{--<div class="mb-2">--}}
                        {{--CNC Miller Programmer / Setter / Opearator--}}
                    {{--</div>--}}
                    {{--<div class="mb-2">--}}
                        {{--Planning Administrator--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footerBot">
                    <div class="footerBotLeft">
                        {{ $web_info->footer_bot_1 }}
                    </div>
                    <div class="footerBotRight">
                        <div class="footerBotRightContent">
                            {{ $web_info->footer_bot_2 }}
                        </div>
                        <a href="{{ $web_info->link_fb }}" class="footerBotRightLink">
                            <img src="images/fb_icon.png" alt="">
                        </a>
                        <a href="{{ $web_info->link_fb }}" class="footerBotRightLink">
                            <img src="images/gg_icon.png" alt="">
                        </a>
                        <a href="{{ $web_info->link_fb }}" class="footerBotRightLink">
                            <img src="images/yt_icon.png" alt="">
                        </a>
                        <a href="{{ $web_info->link_fb }}" class="footerBotRightLink">
                            <img src="images/tt_icon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
