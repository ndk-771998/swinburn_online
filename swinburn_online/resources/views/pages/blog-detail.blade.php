@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => __('blog.blogs'), 'banner_image' => '/assets/images/banners/event_banner.jpg'])

<div class="container-fluid blog-detail-container">

    @include('includes.breadcrumb', ['breadcrumb' => [__('blog.blogs') => '/posts', '#' => $post->title]])

    <div class="blog-detail-wrap container">
        <h1> {{$post->title}} </h1>
        <div class="content">
            {!! $post->content !!}
        </div>
        @include('includes.facebook-plugin')
        <div class="related-blogs">
            <div class="title">
                <h3>{!! getOption('posts-related-title') !!}</h3>
            </div>
            <div class="_blog-list">
                <div class="row">
                    @foreach($related_posts as $related_post)
                    @include('includes.blog.blog_item', ['custom_col' => 'col-12 col-md-6 col-lg-4 col-xl-4', 'post' => $related_post])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection