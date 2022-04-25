@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => $post->title, 'banner_image' => $post->thumbnail])

<div class="container-fluid course-detail-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['Khoá học trực tuyến & Bằng cấp' => $post->type, '#' => $post->title]])

    <div class="container">
        <div class="container course-container">
            <div class="course-icons">
                <div class="course-icon">
                    <div class="image-wrap">
                        <img class="lazyload" height="70" width="70" data-src="/assets/logos/qualification.svg" alt="qualification">
                    </div>
                    <h4>{{__('course.degree')}}</h4>
                    <p>{!! $post->getMetaField('qualification') !!}</p>
                </div>
                <div class="course-icon">
                    <div class="image-wrap">
                        <img class="lazyload" height="70" width="70" data-src="/assets/logos/duration.svg" alt="duration">
                    </div>
                    <h4>{{__('course.time')}}</h4>
                    <p>{!! $post->getMetaField('duration') !!}</p>
                </div>
                <div class="course-icon">
                    <div class="image-wrap">
                        <img class="lazyload" height="70" width="70" data-src="/assets/logos/unit.svg" alt="unit">
                    </div>
                    <h4>{{__('course.subjects')}}</h4>
                    <p>{!! $post->getMetaField('units') !!}</p>
                </div>
                <div class="course-icon">
                    <div class="image-wrap">
                        <img class="lazyload" height="70" width="70" data-src="/assets/logos/date.svg" alt="date">
                    </div>
                    <h4>{{__('course.time-start')}}</h4>
                    <p>{!! $post->getMetaField('start_date') !!}</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="course-table-of-content-wrap" id="course-navigation">
    <div class="container">
        <ul>
            <li><a class="tocs" scrollTarget="#tong-quan-ve-khoa-hoc">{{__('course.overall')}}</a></li>
            <li><a class="tocs" scrollTarget="#tieu-chuan-dau-vao">{{__('course.entry-standard')}}</a></li>
            <li><a class="tocs" scrollTarget="#hoc-phan">{{__('course.term')}}</a></li>
            <li><a class="tocs" scrollTarget="#ket-qua-hoc-tap">{{__('course.result')}}</a></li>
            <li><a class="tocs" scrollTarget="#ket-thuc-chuyen-nganh">{{__('course.end-major')}}</a></li>
            <li><a class="tocs" scrollTarget="#quy-tac-khoa-hoc">{{__('course.course-rules')}}</a></li>
        </ul>
    </div>
</div>


<div class="container-fluid course-detail-container">
    <div class="course-detail-overview-container container course-detail-section" id="tong-quan-ve-khoa-hoc">
        <div class="course-detail-overview-wrap course-detail-section-wrap">

            {!! $post->description !!}

            <div>
                <a href="{{ getOption('file-brochure')}}" class="download-brochure" download>{{__('course.download')}} <img src="/assets/logos/brochure.svg" width="16" height="16" alt="brochure"></a>
            </div>
        </div>
    </div>

    <div class="course-detail-standards-container container course-detail-section" id="tieu-chuan-dau-vao">
        <div class="course-detail-standards-wrap course-detail-section-wrap">
            <h2>
                {{__('course.entry-standard')}}
            </h2>

            <div class="standards">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="tab-list">
                            <ul>
                                @foreach ($standards as $item)
                                <li class="tabs" navTarget="#{{ $item->slug }}">{!! $item->title !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="content">
                            @foreach ($standards as $item)
                            <div class="tab-content" id="{{ $item->slug}}">
                                <h3>{!! $item->title !!}</h3>
                                {!! $item->content !!}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="course-detail-content-container container course-detail-section">
        <div class="course-detail-section-wrap">
            <div class="course-detail-testimonial-wrap">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="testimonial-author">
                            <img src="{{ $post->getMetaField('testimonial_image') }}" alt="author">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="testimonial-content">
                            <p>{!! $post->getMetaField('testimonial_content') !!}</p>
                            <h5>{!! $post->getMetaField('testimonial_author') !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-detail-content-wrap">
                <div class="content slide-content" id="course-content">
                    {!! $post->content !!}
                </div>
                <div>
                    <div class="extend-content" slideTarget="#course-content">
                        <div class="zoom_in" style="display: none">
                            {{__('course.zoom-in')}}
                            <img src="/assets/logos/red_next1.svg" width="14" height="14" alt="arrow">
                        </div>
                        <div class="zoom_out">
                            {{__('course.zoom-out')}}
                            <img src="/assets/logos/red_next1.svg" style="transform: rotate(180deg)" width="14" height="14" alt="arrow">
                        </div>
                    </div>
                    <a href="{{ getOption('file-brochure')}}" class="download-brochure" download>{{__('course.download')}} <img src="/assets/logos/brochure.svg" width="16" height="16" alt="brochure"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="course-detail-unit-container container course-detail-section" id="hoc-phan">
        <div class="course-detail-unit-wrap course-detail-section-wrap">
            <h2>{{__('course.term')}}</h2>
            <div class="unit-list slide-content" id="unit-list">
                @foreach ($units as $item)
                <div class="unit">
                    <div class="course-popup-open" openPopupTarget="#{{ $item->slug }}">
                        {!! $item->title !!}
                        <h5>{!! $item->getMetaField('unit_code') !!}</h5>
                        <span class="arrow"><img src="/assets/logos/red_arrow.svg" alt="arrow" width="12" height="12"></span>
                    </div>
                    @include('includes.course.popup', ['post' => $item])
                </div>
                @endforeach
            </div>
            <div>
                <div class="extend-content hidden" slideTarget="#unit-list">
                    <div class="zoom_in">
                        {{__('course.zoom-in')}}
                        <img src="/assets/logos/red_next1.svg" width="14" height="14" alt="arrow">
                    </div>
                    <div class="zoom_out" style="display: none">
                        {{__('course.zoom-out')}}
                        <img src="/assets/logos/red_next1.svg" style="transform: rotate(180deg)" width="14" height="14" alt="arrow">
                    </div>
                </div>
                <a href="{{ getOption('file-brochure')}}" class="download-brochure" download>{{__('course.download')}} <img src="/assets/logos/brochure.svg" width="16" height="16" alt="brochure"></a>
            </div>
        </div>
    </div>

    <div class="container course-detail-section" id="ket-qua-hoc-tap">
        <div class="course-detail-section-wrap">
            {!! $post->getMetaField('learning_outcome') !!}
        </div>
    </div>

    <div class="container course-detail-section" id="ket-thuc-chuyen-nganh">
        <div class="course-detail-section-wrap">
            {!! $post->getMetaField('end_of_major') !!}
        </div>
    </div>

    <div class="container course-detail-section" id="quy-tac-khoa-hoc">
        <div class="course-detail-section-wrap" style="border-bottom: none;">
            {!! $post->getMetafield('course_rules') !!}
        </div>
    </div>
</div>

@include('includes.course-register')
@endsection