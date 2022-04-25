@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => getOption('event-banner-title'), 'banner_image' => getOption('event-banner')])

<div class="container-fluid event-detail-container">
    
    @include('includes.breadcrumb', ['breadcrumb' => [getOption('event-banner-title') => '/events', '#' => $post->title]])
    
    <div class="container">
        <div class="event-detail-wrap">
            <h1> {{$post->title}} </h1>
            <div class="content">
                {!! $post->content !!}
            </div>
            @include('includes.facebook-plugin')

            <div class="related-events">
                <div class="title">
                    <h3>{!! getOption('event-related-title') !!}</h3>
                </div>
                <div class="event-list">
                    <div class="row">
                        @foreach($related_posts as $related_post)
                            @include('includes.event.event-item', ['custom_col' => 'col-12 col-md-6 col-lg-4 col-xl-3', 'post' => $related_post])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection