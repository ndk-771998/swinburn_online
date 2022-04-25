@extends('layout.master')
@section('content')

<div class="container-fluid home-banner-container" style="background: url('{{ getOption('home-banner') }}')">
    <div class="container">
        <div class="home-banner-wrap">
            <h2>{!! getOption('home-title-banner') !!}</h2>
            <h3>{!! getOption('home-desc-banner') !!}</h3>
            <div class="home-banner-action">
                <a class="btn btn-banner-primary" href="#">{{__('index.find-courses-btn')}}</a>
                <a class="btn btn-banner-danger" href="/apply">{{__('index.courses-btn')}}</a>
            </div>
        </div>
    </div>
</div>

<!-- <div class="cotainer-fluid home-it-container home-section">
    <div class="container">
        <div class="home-it-wrap">
            <h2>{!! getOption('home-course') !!}</h2>
            <div class="home-it-desc">
                {!! getOption('home-course-desc') !!}
            </div>
            <div class="course-icons">
                <div class="course-icon">
                    <div class="image-wrap">
                        <img height="70" width="70" src="assets/logos/qualification.svg" alt="qualification">
                    </div>
                    <h4>Bằng cấp</h4>
                    <p>{!! getOption('home-qualification') !!}</p>
                </div>
                <div class="course-icon">
                    <div class="image-wrap">
                        <img height="70" width="70" src="assets/logos/duration.svg" alt="duration">
                    </div>
                    <h4>Thời gian</h4>
                    <p>{!! getOption('home-duration') !!}</p>
                </div>
                <div class="course-icon">
                    <div class="image-wrap">
                        <img height="70" width="70" src="assets/logos/unit.svg" alt="unit">
                    </div>
                    <h4>Tín chỉ</h4>
                    <p>{!! getOption('home-units') !!}</p>
                </div>
                <div class="course-icon">
                    <div class="image-wrap">
                        <img height="70" width="70" src="assets/logos/date.svg" alt="date">
                    </div>
                    <h4>Thời gian bắt đầu</h4>
                    <p>{!! getOption('home-start-date') !!}</p>
                </div>
            </div>
            <div class="detail">

                <a href="{{ getOption('home-course-link') }}" class="btn btn-see-all m-auto">
                    {!! getOption('home-course-link-label') !!}
                    <span>
                        <img src="/assets/logos/arrow.svg" alt="arrow">
                    </span>
                </a>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid home-courses-container home-section">
    <div class="row">
        <div class="container">
            <div class="home-courses-wrap">
                <div class="row">
                    <div class="col-12">
                        <h2>{!! getOption('home-reason-title') !!}</h2>
                    </div>
                    <div class="col-12">
                        <div class="home-courses-desc">
                            {!! getOption('home-reason-desc') !!}
                        </div>
                    </div>
                    <!-- <div class="col-12">
                    <div class="home-courses">
                        @include('includes.course_category.course_category_list', ['posts' => $onlinecourses])
                    </div>
                </div> -->
                </div>
            </div>
        </div>
        <div class="banner-body">
            <img class="lazyload" data-src="{{getOption('home-body-banner')}}" alt="middle-banner">
        </div>
    </div>
</div>

<div class="container-fluid home-contact-container home-section">
    <div class="container">
        <div class="home-contact-wrap">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="home-contact-info">
                        <h2>{!! getOption('home-contact-title') !!}</h2>
                        {!! getOption('home-contact-desc') !!}
                        <div class="hotline">{!! getOption('home-contact-phone') !!}</div>
                        <div class="calendar">{!! getOption('home-contact-working-time') !!}</div>
                        <a href="#" class="contact-detail"> {{__('index.contact-us')}} <img src="/assets/logos/red_arrow.svg" alt="arrow"></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="home-contact-image">
                        <img width="500" height="408" class="lazyload" data-src="{{ getOption('home-contact-thumbnail') }}" alt="contact">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid home-reason-container home-section">
    <div class="container">
        <div class="home-reason-wrap">
            <h2>{!! getOption('home-numbers') !!}</h2>
            <div class="home-reasons">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 reason">
                        <div class="title">{!! getOption('home-found-year-title') !!}</div>
                        <div class="number">{!! getOption('home-found-year-value') !!}</div>
                        <div class="desc">{!! getOption('home-found-year-desc') !!}</div>
                    </div>
                    <div class="line"></div>
                    <div class="col-12 col-md-6 col-lg-4 reason">
                        <div class="title">{!! getOption('home-rank-title') !!}</div>
                        <div class="number">{!! getOption('home-rank-value') !!}</div>
                        <div class="desc">{!! getOption('home-rank-desc') !!}</div>
                    </div>
                    <div class="line"></div>
                    <div class="col-12 offset-lg-0 offset-md-3 offset-0-3 col-md-6 col-lg-4 reason">
                        <div class="title">{!! getOption('home-number-of-students-title') !!}</div>
                        <div class="number">{!! getOption('home-number-of-students') !!}</div>
                        <div class="desc">{!! getOption('home-number-of-students-desc') !!}</div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-see-all w-100 reason-detail">
                {{__('index.study-with-us-btn')}}
                <span>
                    <img src="/assets/logos/arrow.svg" alt="arrow">
                </span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid home-support-container home-section">
    <div class="container">
        <div class="home-support-wrap">
            <div class="row">
                <div class="col-12 col-md-6 home-support-info">
                    <div class="title">{!! getOption('home-support-title') !!}</div>
                    <div class="desc">
                        {!! getOption('home-support-content') !!}
                    </div>
                    <a href="#" class="support-detail">Đọc thêm <img src="/assets/logos/red_arrow.svg" alt="arrow"></a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="home-support-image">
                        <img width="570" height="322" src="{{ getOption('home-support-thumbnail')}}" alt="support">
                        <div class="play-button course-popup-open" openPopupTarget="#home-support-video">
                            <img src="/assets/logos/play.svg" alt="play">
                        </div>

                        @include('includes.video-popup', ['video' => getOption('home-support-video'), 'popup_id' => 'home-support-video'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid home-blog-container home-section">
    <div class="container">
        <div class="home-blog-wrap">
            <h2>{{__('index.detail-info')}}</h2>
            <div class="blog-categories">
                @foreach ($hot_post_categories as $item)
                <a href="/categories/{{ $item->slug }}" class="btn btn-secondary">{!! $item->name !!}</a>
                @endforeach
            </div>
            <div class="home-blogs">
                <div class="row">
                    @foreach($posts as $post)
                    @include('includes.blog.blog_item', ['custom_col' => 'col-12 col-lg-6 col-xl-3', 'post' => $post])
                    @endforeach
                </div>
            </div>

            <a class="readmore" href="#">
                {{__('index.read-more')}}
            </a>
        </div>
    </div>
</div>

@endsection