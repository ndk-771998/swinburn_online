<div class="journey-section text-container-background-image-section {{ isset($mb) ? $mb : ''}}" id="{{ $id }}" style="background-image: url('{{ $background }}');">
    <div class="text-container">
        <h2>{!! $title !!}</h2>
        <p>{!! $description !!}</p>
        @if($link && $link_label)
        <a href="{{ $link }}" class="btn btn-banner-danger">{{ $link_label }}</a>
        @endif
    </div>
</div>