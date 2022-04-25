@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => getOption('service-banner-1-title'), 'banner_image' => getOption('service-banner-1')])

<div class="blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['/services' => getOption('service-banner-1-title')]])

    <div class="container">
        <div class="services-list-wrap">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="services-list-title">{!! getOption('service-banner-1-title') !!}</h2>
                    <div class="services-list">
                        <div class="row">
                            @for($i=1; $i<=3; $i++)
                            <div class="col-lg-4">
                                <div class="services-item">
                                    <div class="image">
                                        <img class="lazyload" data-src="{!! getOption('widget-service-image-'.$i.'') !!}" alt="service">
                                        <div class="play-button course-popup-open" openpopuptarget="#home-support-video">
                                            <img src="/assets/logos/play.svg" alt="play">
                                        </div>
                                    </div>
                                    @include('includes.video-popup', ['video' => getOption('home-support-video'), 'popup_id' => 'home-support-video'])
                                    <div class="content">
                                        <h3>{!! getOption('widget-service-title-'.$i.'') !!}</h3>
                                        <p>{!! getOption('widget-service-desc-'.$i.'') !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="description">
                        {!! getOption('service-seo-desc') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.banner-service', ['title' => getOption('service-banner-2-title'), 'desc' => getOption('service-banner-2-desc') ,'banner_image' => getOption('service-banner-2')])
</div>
@endsection