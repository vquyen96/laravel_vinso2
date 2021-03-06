<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headerMain">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" class="headerMainItem">
                                home
                            </a>
                        </li>
                        @foreach($menu as $root)
                            <li>
                                <a href="{{ route('client.group', $root->slug.'--n-'.$root->id) }}"  class="headerMainItem">{{ $root->title }}</a>
                                <ul>
                                    @foreach($root->child as $child)
                                    <li>
                                        <a href="{{ route('client.group', $child->slug.'--n-'.$child->id) }}"  class="">{{ $child->title }}</a>
                                        <ul>
                                            @foreach($child->child as $item)
                                                <li>
                                                    <a href="{{ route('client.group', $item->slug.'--n-'.$item->id) }}"  class="">{{ $item->title }}</a>
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

                </div>
            </div>
        </div>
    </div>
</header>
<div class="btn-menu">
    <i class="fas fa-bars"></i>
</div>