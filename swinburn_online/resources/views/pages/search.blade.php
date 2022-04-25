@extends('layout.master')
@section('content')
@include('includes.banner', ['title' => getOption('search-banner-title'), 'banner_image' => getOption('search-banner')])
<div class="container-fluid blog-list-container">
    <div class="container">
        <div class="blog-list-wrap">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="blog-list">
                        <div class="_blog-list">
                            <div class="row" id="result-list">
                                @if($posts->count())
                                    @include('includes.ajax.search-item')
                                @else
                                    <h2>{{__('index.result-not-found')}}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-center readmore">
                        @if ($posts->lastPage() > 1)
                        <a href="#" class="btn btn-footer-danger load-more-submit-search" lastPage="{{$posts->lastPage()}}" loadPage="2">
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