<div class="{{ isset($custom_col) ? $custom_col : 'col-12 col-lg-6 col-xl-4'}} event-item">
<div class="event-item-wrap">
        <div class="thumbnail">
            <a href="/events/{{$post->slug}}"><img class="lazyload" data-src="{{$post->thumbnail}}" alt="image"></a>
            <div class="date">
                <div class="value">
                    <div class="day">{{ date('d', strtotime($post->published_date)) }}</div>
                    <div class="month">{{ date('m', strtotime($post->published_date)) }}</div>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="/events/{{$post->slug}}">
                {!! $post->title !!}
            </a>
        </div>
        <div class="read-more">
            <a href="/events/{{$post->slug}}"> {{__('index.read-more')}}</a>
        </div>
    </div>
</div>