@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => getOption('event-banner-title'), 'banner_image' => getOption('event-banner')])
@php 

$now = Carbon\Carbon::now();
 
@endphp
<div class="container-fluid event-list-container">

    @include('includes.breadcrumb', ['breadcrumb' => isset($category) ? [getOption('event-banner-title') => '/events', '/categories\/'.$category->slug => $category->name] : ['/events' => getOption('event-banner-title')]])

    <div class="container">
        <div class="event-list-wrap">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="event-list-sidebar">
                        @include('includes.event.event-sidebar')
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="event-list">
                        <h2 class="event-list-title">
                            @if(isset($category))
                                [{{$category->name}}] {{__('event.in')}} {{ $now->format('m/Y') }}
                            @else
                                {!! getOption('event-list-title') !!}
                            @endif
                        </h2>
                        @include('includes.event.event-list') 
                    </div>
                    <div class="w-100 text-center">
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