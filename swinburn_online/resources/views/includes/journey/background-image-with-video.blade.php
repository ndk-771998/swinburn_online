<div class="journey-section background-image-with-video" id="{{ $id }}">
    <div class="image-container" style="background-image: url('{{ $background }}');">
        <div class="play-button course-popup-open" openPopupTarget="#{{ Str::slug($title) }}-video">
            <img src="/assets/logos/play.svg" alt="play">
        </div>
    </div>

    @include('includes.video-popup', ['popup_id' => Str::slug($title).'-video'])

    <div class="text-container text-center">
        <h2>{!! $title !!}</h2>
        <p>{!! $description !!}</p>
        @if ($link && $link_label)
        <a href="{{$link}}" class="btn btn-banner-danger">{{$link_label}}</a>
        @endif
    </div>
</div>