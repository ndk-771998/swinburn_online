@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => $post->title, 'banner_image' => $post->thumbnail])
<div class="container-fluid blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => [__('aboutus.aboutus') => '/aboutus', '#' => $post->title]])
    <div class="about-detail-wrap container">
            <div class="content">
                {!! $post->content !!}
            </div>

            @include('includes.facebook-plugin')

            <div class="row">
                @foreach($related_posts as $related_post)
                <div class="col-12 col-lg-6 col-xl-4 about-category-item">
                    <div class="about-category-thumbnail" style="background: url('{{$related_post->thumbnail}}'); background-size: cover;">
                        <div class="shadow-layer">
                            <h3>{!! $related_post->title !!}</h3>
                        </div>
                    </div>
                    <a href="/aboutus/{{$related_post->slug}}" class="btn btn-see-all w-100">
                        {{__('index.read-more')}}
                        <span>
                            <img src="/assets/logos/arrow.svg" alt="arrow">
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

</div>

@endsection