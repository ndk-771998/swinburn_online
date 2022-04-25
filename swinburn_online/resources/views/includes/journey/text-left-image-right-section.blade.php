<div class="journey-section text-left-image-right-section" id="{{ $id }}">
    <div class="text-container">
        <h2>{!! $title !!}</h2>
        <p>{!! $description !!}</p>
        @if($link && $link_label)
        <a href="{{ $link }}" class="btn btn-banner-danger">{{ $link_label }}</a>
        @endif
    </div>
    <div class="image-container" style="background-image: url('{{ $background }}');">
    </div>
</div>