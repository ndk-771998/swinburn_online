@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => getOption('faqs-banner-title'), 'banner_image' => getOption('faqs-banner')])

<div class="container-fluid questions-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['/cac-cau-hoi-thuong-gap' => getOption('faqs-banner-title')]])

    <div class="container">
        <div class="questions-list-wrap">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="questions-wrap">
                        <h2>{{__('faqs.topics')}}</h2>
                        <div class="list-questions">
                            @foreach($faqs_categories as $faqs_category)
                            <div class="sub-question">
                                <a href="/categories/{{$faqs_category->slug}}"><img class="lazyload" data-src="{{$faqs_category->thumbnail}}" alt="{{$faqs_category->name}}"></a>
                                <div class="shadow-layer">
                                    <a href="/categories/{{$faqs_category->slug}}">{!!$faqs_category->name!!}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid questions-list-container">
    <div class="container">
        <div class="questions-list-wrap">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="detail-questions">
                        <div class="item-question">
                            <h3>{{__('faqs.frequent-questions')}}</h3>
                            <a href="">{{__('faqs.watch-all')}}</a>
                            @foreach($posts as $post)
                            <div class="sub-question">
                                <div class="question">
                                    <p><span>Q.</span> {{$post->title}}</p>
                                    <div class="dropdown">
                                        <div class="show"> + </div>
                                        <div class="hide"> - </div>
                                    </div>
                                </div>
                                <div class="answer">
                                    <span>A.</span>
                                    <p>{{$post->content}}</p>
                                    <div class="links">
                                        <div class="label">
                                            {{__('faqs.share')}}
                                        </div>
                                        <div class="icon">
                                            <div class="logo">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" target="_blank"><img src="{{url('assets/logos/facebook_around.svg')}}" width="16" height="16" alt="facebook"></a>
                                            </div>
                                            <div class="zalo-share-button logo" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize="false" style="border-radius: 50%;"></div>
                                            <div class="logo">
                                                <a href="https://www.tiktok.com/" target="_blank"><img src="{{url('assets/logos/tiktok.svg')}}" width="16" height="16" alt="tiktok"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection