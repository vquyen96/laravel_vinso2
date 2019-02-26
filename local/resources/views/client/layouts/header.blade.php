<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headerMain">
                    <ul>
                        <li>
                            <a href="{{ asset('/') }}" class="headerMainItem">
                                home
                            </a>
                        </li>
                        @foreach($menu as $root)
                            <li>
                                <a href=""  class="headerMainItem">{{ $root->title }}</a>
                                <ul>
                                    @foreach($root->child as $child)
                                    <li>
                                        <a href=""  class="">{{ $child->title }}</a>
                                        <ul>
                                            @foreach($child->child as $item)
                                                <li>
                                                    <a href=""  class="">{{ $child->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                        @endforeach
                        <li>
                            <a href="{{ asset('contact') }}" class="headerMainItem">
                                contact
                            </a>
                        </li>
                    </ul>


                    {{--<a href="{{ asset('quality') }}" class="headerMainItem">--}}
                        {{--qualiti--}}
                    {{--</a>--}}
                    {{--<a href="{{ asset('about') }}" class="headerMainItem">--}}
                        {{--about vinso--}}
                    {{--</a>--}}
                    {{--<a href="{{ asset('document') }}" class="headerMainItem">--}}
                        {{--document--}}
                    {{--</a>--}}
                    {{--<a href="{{ asset('news') }}" class="headerMainItem">--}}
                        {{--news--}}
                    {{--</a>--}}

                </div>
            </div>
        </div>
    </div>
</header>