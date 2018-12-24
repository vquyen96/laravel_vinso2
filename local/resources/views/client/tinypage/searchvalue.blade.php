
@foreach($list_article as $news)
    <a href="{{ asset('news/'.$news->slug.'--n-'.$news->id) }}" class="searchValueItem">{{ $news->title }}</a>
@endforeach