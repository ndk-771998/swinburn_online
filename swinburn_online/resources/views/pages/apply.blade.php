@extends('layout.master')
@section('content')

@include('includes.banner', ['title' => session('success') ? session('success') : getOption('apply-banner-title') , 'banner_image' =>
getOption('apply-banner') ])
<div class="container-fluid apply-us-container">

    @include('includes.breadcrumb', ['breadcrumb' => ['#' => getOption('apply-seo-title') ]])

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="apply-us-wrap">
                    <h2>{!! getOption('apply-form-title') !!}</h2>
                    <p>{!! getOption('apply-form-desc') !!}</p>
                    @include('includes.apply.send-apply-info-notification')
                    @include('contact_form::show-contact-form', ['page' => 'apply', 'position' => 'position-1' ])
                </div>
            </div>
        </div>
    </div>

</div>

@endsection