<div class="journey-section slide-section" id="{{ $id }}">
    <div class="slide-container journey-slide">
        @foreach ($image_collection as $item)
            @if ($item) 
            <div class="image-item">
                <img class="journey-slide-item lazyload" data-src="{{$item}}" alt="{{$item}}">
            </div>
            @endif
        @endforeach
    </div>
    <div class="text-container text-center">
        <h2>{!! $title !!}</h2>
        <p>{!! $description !!}</p>
        @if($link && $link_label)
        <a href="{{ $link }}" class="btn btn-banner-danger">{{ $link_label }}</a>
        @endif
    </div>
</div>