@extends('layout.master')
@section('content')

<div class="container-fluid journey-container">
    <div class="journey-wrap d-flex">
        @include('includes.journey.left-navigation', ['titles' => [
            __('study-journey.study-journey'),
            __('study-journey.admission-process'),
            __('study-journey.wellcome-call'),
            __('study-journey.study-online'),
            __('study-journey.virtual-class'),
            __('study-journey.study-group'),
            __('study-journey.online-tutor'),
            __('study-journey.discuss-seminor'),
            __('study-journey.support-group'),
            __('study-journey.student-advisor'),
            __('study-journey.student-training'),
            __('study-journey.graduate'),
        ]])
        <div class="right-content">
            @include('includes.journey.text-container-background-image-section', [
                'id' => Str::slug(__('study-journey.study-journey')),
                'title' => getOption('study-journey-widget-title-1'),
                'description' => getOption('study-journey-widget-desc-1'),
                'background' => getOption('study-journey-widget-background-1'),
                'link' =>  getOption('study-journey-widget-link-1'),
                'link_label' =>  getOption('study-journey-widget-button-1'),
                'mb' => 'mb'
            ])

            @include('includes.journey.text-right-image-left-section', [
                'id' => Str::slug(__('study-journey.admission-process')),
                'title' => getOption('study-journey-widget-title-2'),
                'description' => getOption('study-journey-widget-desc-2'),
                'link' => getOption('study-journey-widget-link-2'),
                'link_label' => getOption('study-journey-widget-button-2'),
                'background' => getOption('study-journey-widget-background-2'),
            ])

            @include('includes.journey.text-left-image-right-section', [
                'id' => Str::slug(__('study-journey.wellcome-call')),
                'title' => getOption('study-journey-widget-title-3'),
                'description' => getOption('study-journey-widget-desc-3'),
                'link' => getOption('study-journey-widget-link-3'),
                'link_label' => getOption('study-journey-widget-button-3'),
                'background' => getOption('study-journey-widget-background-3'),
            ])

            @include('includes.journey.slide-section', [
                'id' => Str::slug(__('study-journey.study-online')),
                'title' => getOption('study-journey-widget-title-4'),
                'description' => getOption('study-journey-widget-desc-4'),
                'link'  => getOption('study-journey-widget-link-4'),
                'link_label' => getOption('study-journey-widget-button-4'),
                'image_collection' => [
                    getOption('study-journey-widget-slide-4-1'),
                    getOption('study-journey-widget-slide-4-2'),
                    getOption('study-journey-widget-slide-4-3'),
                    getOption('study-journey-widget-slide-4-4'),
                    getOption('study-journey-widget-slide-4-5'),
                    getOption('study-journey-widget-slide-4-6'),
                ]
            ])

            @include('includes.journey.background-image-with-video', [
                'id' => Str::slug(__('study-journey.virtual-class')),
                'title' =>  getOption('study-journey-widget-title-5'),
                'description' => getOption('study-journey-widget-desc-5'),
                'link' => getOption('study-journey-widget-link-5'),
                'link_label' => getOption('study-journey-widget-button-5'),
                'background' => getOption('study-journey-widget-background-5'),
                'video' => getOption('study-journey-widget-video-5'),
            ])

            @include('includes.journey.background-image-with-video', [
                'id' => Str::slug(__('study-journey.study-group')),
                'title' => getOption('study-journey-widget-title-6'),
                'description' => getOption('study-journey-widget-desc-6'),
                'link' => getOption('study-journey-widget-link-6'),
                'link_label' => getOption('study-journey-widget-button-6'),
                'background' => getOption('study-journey-widget-background-6'),
                'video' => getOption('study-journey-widget-video-6'),
            ])

            @include('includes.journey.background-image-with-video', [
                'id' => Str::slug(__('study-journey.online-tutor')),
                'title' => getOption('study-journey-widget-title-7'),
                'description' => getOption('study-journey-widget-desc-7'),
                'link' => getOption('study-journey-widget-link-7'),
                'link_label' => getOption('study-journey-widget-button-7'),
                'background' => getOption('study-journey-widget-background-7'),
                'video' => getOption('study-journey-widget-video-7'),
            ])

            @include('includes.journey.slide-section', [
                'id' => Str::slug(__('study-journey.discuss-seminor')),
                'title' => getOption('study-journey-widget-title-8'),
                'description' => getOption('study-journey-widget-desc-8'),
                'link'  => getOption('study-journey-widget-link-8'),
                'link_label' => getOption('study-journey-widget-button-8'),
                'image_collection' => [
                    getOption('study-journey-widget-slide-8-1'),
                    getOption('study-journey-widget-slide-8-2'),
                    getOption('study-journey-widget-slide-8-3'),
                    getOption('study-journey-widget-slide-8-4'),
                    getOption('study-journey-widget-slide-8-5'),
                    getOption('study-journey-widget-slide-8-6'),
                ]
            ])

            @include('includes.journey.background-image-with-video', [
                'id' => Str::slug(__('study-journey.support-group')),
                'title' => getOption('study-journey-widget-title-9'),
                'link' => getOption('study-journey-widget-link-9'),
                'link_label' => getOption('study-journey-widget-button-9'),
                'description' => getOption('study-journey-widget-desc-9'),
                'background' => getOption('study-journey-widget-background-9'),
                'video' => getOption('study-journey-widget-video-9'),
            ])

            @include('includes.journey.text-container-right-background-image-section', [
                'id' => Str::slug(__('study-journey.student-advisor')),
                'title' => getOption('study-journey-widget-title-10'),
                'description' => getOption('study-journey-widget-desc-10'),
                'link' => getOption('study-journey-widget-link-10'),
                'link_label' => getOption('study-journey-widget-button-10'),
                'background' => getOption('study-journey-widget-background-10'),
            ])

            @include('includes.journey.background-image-with-video', [
                'id' => Str::slug(__('study-journey.student-training')),
                'title' => getOption('study-journey-widget-title-11'),
                'description' => getOption('study-journey-widget-desc-11'),
                'link' => getOption('study-journey-widget-link-11'),
                'link_label' => getOption('study-journey-widget-button-11'),
                'background' => getOption('study-journey-widget-background-11'),
                'video' => getOption('study-journey-widget-video-11'),
            ])

            @include('includes.journey.text-container-right-background-image-section', [
                'id' => Str::slug(__('study-journey.graduate')),
                'title' => getOption('study-journey-widget-title-12'),
                'description' => getOption('study-journey-widget-desc-12'),
                'link' => getOption('study-journey-widget-link-12'),
                'link_label' => getOption('study-journey-widget-button-12'),
                'background' => getOption('study-journey-widget-background-12'),
                'video' => getOption('study-journey-widget-video-12'),
            ])
        </div>
    </div>
</div>

@endsection