<div class="course-popup-container container-fluid" id="{{ $post->slug }}">
    <div class="container">
        <div class="course-popup-wrap">
            <div class="header">
                <h2>{!! $post->title !!}</h2>
                <p>{!! $post->getMetaField('unit_code') !!}</p>
            </div>
            <div class="body">
                <div class="info">
                    <p><strong>Unit code: </strong>{!! $post->getMetaField('unit_code') !!}</p>
                    <p><strong>Duration: </strong>{!! $post->getMetaField('duration') !!}</p>
                    <p><strong>Contact hours: </strong>{!! $post->getMetaField('contact_hours') !!}</p>
                </div>
                <div class="content">
                    {!! $post->content !!}
                </div>
            </div>
            <div class="more-information">
                <a href="{{ $post->getMetaField('more_information_link') }}" target="_blank">{{__('course.view-further')}} <img src="/assets/logos/red_arrow.svg" alt="arrow"></a>
            </div>
            <div class="close course-popup-close" closePopupTarget="#{{ $post->slug }}">
                <img src="/assets/logos/beautyful-close.svg" alt="close" width="30" height="30">
            </div>
        </div>
    </div>
</div>