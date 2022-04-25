<div class="journey-section text-right-image-left-section" id="{{ $id }}">
    <div class="image-container" style="background-image: url('{{ $background }}');">
    </div>
    <div class="text-container">
        <h2>{!! $title !!}</h2>
        <p>{!! $description !!}</p>
        @if($link && $link_label)
        <a href="{{ $link }}" class="btn btn-banner-danger">{{ $link_label }}</a>
        @endif
    </div>
</div>