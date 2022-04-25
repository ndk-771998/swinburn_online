@extends('layout.master')
@section('content')

<div class="container-fluid journey-container">
    <div class="journey-wrap d-flex">
        @include('includes.journey.left-navigation', ['titles' => [
            __('flexible-study.flex-study'),
            __('flexible-study.study-anywhere'),
            __('flexible-study.connect-anytime'),
            __('flexible-study.sort-prioritize'),
            __('flexible-study.arrange-study-route'),
            __('flexible-study.3-time-subject'),
            __('flexible-study.support-alltime'),
            __('flexible-study.flexible-experience'),
        ]])
        <div class="right-content">
            @include('includes.journey.text-container-background-image-section', [
                'id' => Str::slug( __('flexible-study.flex-study')),
                'title' => getOption('flexible-study-widget-title-1'), 
                'description' => getOption('flexible-study-widget-desc-1'),
                'background' => getOption('flexible-study-widget-background-1'),
                'link' => getOption('flexible-study-widget-link-1'),
                'link_label' => getOption('flexible-study-widget-button-1'),
                'mb' => 'mb' 
            ])

            @include('includes.journey.text-left-image-right-section', [
                'id' => Str::slug( __('flexible-study.study-anywhere')),
                'title' => getOption('flexible-study-widget-title-2'),
                'description' => getOption('flexible-study-widget-desc-2'),
                'link' => getOption('flexible-study-widget-link-2'),
                'link_label' => getOption('flexible-study-widget-button-2'),
                'background' => getOption('flexible-study-widget-background-2'),
            ])

            @include('includes.journey.text-right-image-left-section', [
                'id' => Str::slug( __('flexible-study.connect-anytime')),
                'title' => getOption('flexible-study-widget-title-3'),
                'description' => getOption('flexible-study-widget-desc-3'),
                'link' => getOption('flexible-study-widget-link-3'),
                'link_label' => getOption('flexible-study-widget-button-3'),
                'background' => getOption('flexible-study-widget-background-3'),
            ])

            @include('includes.journey.background-image-with-video', [
                'id' => Str::slug( __('flexible-study.sort-prioritize')),
                'title' => getOption('flexible-study-widget-title-4'),
                'description' => getOption('flexible-study-widget-desc-4'),
                'link' => getOption('flexible-study-widget-link-4'),
                'link_label' => getOption('flexible-study-widget-button-4'),
                'background' =>  getOption('flexible-study-widget-background-4'),
                'video' => getOption('flexible-study-widget-video-4'),
            ])

            @include('includes.journey.text-container-background-image-section', [
                'id' => Str::slug( __('flexible-study.arrange-study-route')),
                'title' => getOption('flexible-study-widget-title-5'),
                'description' => getOption('flexible-study-widget-desc-5'),
                'background' => getOption('flexible-study-widget-background-5'),
                'link' => getOption('flexible-study-widget-link-5'),
                'link_label' => getOption('flexible-study-widget-button-5'),
            ])

            @include('includes.journey.text-container-right-background-image-section', [
                'id' => Str::slug( __('flexible-study.3-time-subject')),
                'title' => getOption('flexible-study-widget-title-6'),
                'description' => getOption('flexible-study-widget-desc-6'),
                'link' => getOption('flexible-study-widget-link-6'),
                'link_label' => getOption('flexible-study-widget-button-6'),
                'background' => getOption('flexible-study-widget-background-6'),
            ])

            @include('includes.journey.text-left-image-right-section', [
                'id' => Str::slug( __('flexible-study.support-alltime')),
                'title' => getOption('flexible-study-widget-title-7'),
                'description' => getOption('flexible-study-widget-desc-7'),
                'link' => getOption('flexible-study-widget-link-7'),
                'link_label' => getOption('flexible-study-widget-button-7'),
                'background' => getOption('flexible-study-widget-background-7'),
            ])

            @include('includes.journey.text-right-image-left-section', [
                'id' => Str::slug( __('flexible-study.flexible-experience')),
                'title' => getOption('flexible-study-widget-title-8'),
                'description' => getOption('flexible-study-widget-desc-8'),
                'link' => getOption('flexible-study-widget-link-8'),
                'link_label' => getOption('flexible-study-widget-button-8'),
                'background' => getOption('flexible-study-widget-background-8'),
            ])
        </div>
    </div>
</div>

@endsection