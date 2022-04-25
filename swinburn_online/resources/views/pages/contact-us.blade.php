@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => session('success') ? session('success') : getOption('contact-banner-title') , 'banner_image' =>
getOption('contact-banner') ])
<div class="container-fluid contact-us-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['#' => getOption('contact-seo-title') ]])

    <div class="container">
        <div class="contact-us-wrap">
            <div class="row">
                <div class="col-12 col-md-7 ">
                    <div class="contact-us-left-form">
                        <h2>{!! getOption('contact-title') !!}</h2>
                        {!! getOption('contact-desc') !!}
                        <hr style="margin: 50px 0 0; border: none;">
                        <h2>{!! getOption('contact-policy-title') !!}</h2>
                        {!! getOption('contact-policy-desc') !!}
                        <hr style="margin: 50px 0 0; border: none;">
                        <h2>{!! getOption('contact-report-title') !!}</h2>
                        {!! getOption('contact-report-desc') !!}
                        @include('includes.contact.send-contact-info-notification')
                        @include('contact_form::show-contact-form', ['page' => 'contact-us', 'position' => 'position-1' ])
                    </div>
                </div>
                <div class="col-12 col-md-5 ">
                    <div class="contact-us-right-content">
                        <div class="content">
                            <h2>{!! getOption('contact-widget-1-title') !!}</h2>
                            {!! getOption('contact-widget-1-desc') !!}
                        </div>
                        <div class="content">
                            <h2>{!! getOption('contact-widget-2-title') !!}</h2>
                            {!! getOption('contact-widget-2-desc') !!}
                        </div>
                        <div class="content">
                            <h2>{!! getOption('contact-widget-3-title') !!}</h2>
                            {!! getOption('contact-widget-3-desc') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection