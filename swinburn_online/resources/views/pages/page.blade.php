@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => $post->title, 'banner_image' => $post->thumbnail])
<div class="container-fluid blog-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['#' => $post->title]])
    <div class="container">
        <div class="fee-detail-wrap">
            <div class="content">
                <p>{!! $post->content !!}</p>
            </div>
        </div>
    </div>

</div>
@endsection