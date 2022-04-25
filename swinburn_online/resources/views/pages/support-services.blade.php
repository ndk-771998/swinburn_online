@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => getOption('support-banner-title'), 'banner_image' => getOption('support-banner')])

<div class="container-fluid blog-list-container p-0">

    @include('includes.breadcrumb', ['breadcrumb' => ['/support' => getOption('support-banner-title')]])

    <div class="container">
        <div class="support-list-wrap">
            <div class="row">
                <div class="col-lg-12 block-support">
                    <div class="support-list">
                        {!! getOption('support-list-desc-1') !!}
                    </div>
                    <div class="support-item">
                        <div class="row">
                            @for($i = 1; $i<=6; $i++) <div class="col-lg-4 block-item ">
                                <div class="image">
                                    <img class="lazyload" data-src="{!! getOption('widget-image-support-'.$i.'') !!}" alt="support">
                                </div>
                                <div class="content">
                                    <h3>{!! getOption('widget-title-support-'.$i.'') !!}</h3>
                                    <p>{!! getOption('widget-desc-support-'.$i.'') !!}</p>
                                </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-lg-12 block-support block-bottom">
                <div class="support-list">
                    {!! getOption('support-list-desc-2') !!}
                </div>
                <div class="support-item">
                    <div class="row">
                        @for($i = 7; $i<=10; $i++) <div class="col-lg-6 block-item ">
                            <div class="image">
                                <img class="lazyload" data-src="{!! getOption('widget-image-support-'.$i.'') !!}" alt="support">
                            </div>
                            <div class="content">
                                <h3>{!! getOption('widget-title-support-'.$i.'') !!}</h3>
                                <p>{!! getOption('widget-desc-support-'.$i.'') !!}</p>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection