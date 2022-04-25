@extends('layout.master')
@section('content')

@php
    $posts = $filtered_posts;
@endphp

@include('includes.banner', ['title' => getOption('posts-banner-title'), 'banner_image' => getOption('posts-banner')])

<div class="container-fluid blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => isset($category) ? [getOption('posts-banner-title') => '/posts', '/categories\/'.$category->slug => $category->name] : ['/posts' => getOption('posts-banner-title')]])

    <div class="container">
        <div class="blog-list-wrap">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="blog-list-sidebar">
                        @include('includes.blog.blog_sidebar')
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="blog-list">
                        <h2 class="blog-list-title">
                            {!! isset($category->name) ? $category->name : getOption('posts-list-title') !!}
                        </h2>
                        @include('includes.blog.blog_list')        
                    </div>
                    <div class="w-100 text-center readmore">
                        @if ($posts->lastPage() > 1)
                        <a href="#load-more-submit" class="btn btn-footer-danger load-more-submit" lastPage="{{$posts->lastPage()}}" loadPage="2" loadType="{{ $type }}" loadCategory="{{isset($category) ? $category->name : ''}}" loadTag="{{ app('request')->get('tag') ? app('request')->get('tag') : ''}}">
                            {{__('blog.load-more')}}
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection