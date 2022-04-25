<?php

namespace App\Traits;

use VCComponent\Laravel\Config\Services\Facades\Option;

trait PrepareOption {
    
    public function prepareOption() {
        Option::prepare([
            'header-logo',
            'website-favicon',
            'file-brochure',
            'footer-twitter-link',
            'footer-facebook-link',
            'footer-youtube-link',
            'footer-linkedin-link',
            'footer-logo',
            'footer-contact-info',
            'copy-right',
            'home-seo-title',
            'home-seo-desc',
            'home-seo-image',
            'home-banner',
            'home-title-banner',
            'home-desc-banner',
            'home-course',
            'home-course-desc',
            'home-qualification',
            'home-duration',
            'home-units',
            'home-start-date',
            'home-cours-link-label',
            'home-course-link',
            'home-reason-title',
            'home-reason-desc',
            'home-contact-title',
            'home-contact-desc',
            'home-contact-phone',
            'home-contact-working-time',
            'home-contact-thumbnail',
            'home-numbers',
            'home-found-year-title',
            'home-found-year-value',
            'home-found-year-desc',
            'home-rank-title',
            'home-rank-value',
            'home-rank-desc',
            'home-number-of-students-title',
            'home-number-of-students',
            'home-number-of-students-desc',
            'home-support-title',
            'home-support-content',
            'home-support-thumbnail',
            'home-support-video',
            'home-body-banner',
            'contact-banner-desc',
            'contact-seo-title',
            'contact-banner',
            'contact-banner-title',
            'contact-form-title',
            'contact-form-desc',
            'apply-seo-title',
            'apply-banner-desc',
            'apply-banner',
            'apply-banner-title',
            'apply-form-title',
            'apply-form-desc',
            'onlinecourse-apply-title',
            'onlinecourse-apply-desc',
            'onlinecourse-apply-link',
            'onlinecourse-apply-link-label',
            'event-seo-title',
            'event-banner-desc',
            'event-banner',
            'event-banner-title',
            'event-list-title',
            'event-category-title',
            'event-related-title',
            'posts-seo-title',
            'posts-banner-desc',
            'posts-banner',
            'posts-banner-title',
            'posts-list-title',
            'posts-category-title', 
            'posts-tag-title',
            'posts-related-title',
            'support-seo-title',
            'support-banner-desc',
            'support-banner',
            'support-banner-title',
            'support-list-desc-1',
            'support-list-desc-2',
            'widget-title-support-1',
            'widget-desc-support-1',
            'widget-image-support-1',
            'widget-title-support-2',
            'widget-desc-support-2',
            'widget-image-support-2',
            'widget-title-support-3',
            'widget-desc-support-3',
            'widget-image-support-3',
            'widget-title-support-4',
            'widget-desc-support-4',
            'widget-image-support-4',
            'widget-title-support-5',
            'widget-desc-support-5',
            'widget-image-support-5',
            'widget-title-support-6',
            'widget-desc-support-6',
            'widget-image-support-6',
            'button-link-support-1',
            'widget-title-support-7',
            'widget-desc-support-7',
            'widget-image-support-7',
            'widget-title-support-8',
            'widget-desc-support-8',
            'widget-image-support-8',
            'widget-title-support-9',
            'widget-desc-support-9',
            'widget-image-support-9',
            'widget-title-support-10',
            'widget-desc-support-10',
            'widget-image-support-10',
            'button-link-support-2',
            'service-seo-title',
            'service-banner-1',
            'service-banner-1-title',
            'service-banner-1-desc',
            'service-seo-desc',
            'service-banner-2-title',
            'service-banner-2-desc',
            'service-banner-2',
            'widget-service-title-1',
            'widget-service-desc-1',
            'widget-service-image-1',
            'widget-service-title-2',
            'widget-service-desc-2',
            'widget-service-image-2',
            'widget-service-title-3',
            'widget-service-desc-3',
            'widget-service-image-3',
            'flexible-study-seo-title',
            'flexible-study-widget-title-1',
            'flexible-study-widget-desc-1',
            'flexible-study-widget-background-1',
            'flexible-study-widget-title-2',
            'flexible-study-widget-desc-2',
            'flexible-study-widget-background-2',
            'flexible-study-widget-button-2',
            'flexible-study-widget-link-2',
            'flexible-study-widget-title-3',
            'flexible-study-widget-desc-3',
            'flexible-study-widget-background-3',
            'flexible-study-widget-title-4',
            'flexible-study-widget-desc-4',
            'flexible-study-widget-background-4',
            'flexible-study-widget-button-4',
            'flexible-study-widget-link-4',
            'flexible-study-widget-video-4',
            'flexible-study-widget-title-5',
            'flexible-study-widget-desc-5',
            'flexible-study-widget-background-5',
            'flexible-study-widget-button-5',
            'flexible-study-widget-link-5',
            'flexible-study-widget-title-6',
            'flexible-study-widget-desc-6',
            'flexible-study-widget-background-6',
            'flexible-study-widget-button-6',
            'flexible-study-widget-link-6',
            'flexible-study-widget-title-7',
            'flexible-study-widget-desc-7',
            'flexible-study-widget-background-7',
            'flexible-study-widget-button-7',
            'flexible-study-widget-link-7',
            'flexible-study-widget-title-8',
            'flexible-study-widget-desc-8',
            'flexible-study-widget-background-8',
            'flexible-study-widget-button-8',
            'flexible-study-widget-link-8',
            'study-journey-seo-title',
            'study-journey-widget-title-1',
            'study-journey-widget-desc-1',
            'study-journey-widget-background-1',
            'study-journey-widget-title-2',
            'study-journey-widget-desc-2',
            'study-journey-widget-background-2',
            'study-journey-widget-button-2',
            'study-journey-widget-link-2',
            'study-journey-widget-title-3',
            'study-journey-widget-desc-3',
            'study-journey-widget-background-3',
            'study-journey-widget-title-4',
            'study-journey-widget-desc-4',
            'study-journey-widget-slide-4-1',
            'study-journey-widget-slide-4-2',
            'study-journey-widget-slide-4-3',
            'study-journey-widget-slide-4-4',
            'study-journey-widget-slide-4-5',
            'study-journey-widget-slide-4-6',
            'study-journey-widget-button-4',
            'study-journey-widget-link-4',
            'study-journey-widget-title-5',
            'study-journey-widget-desc-5',
            'study-journey-widget-background-5',
            'study-journey-widget-video-5',
            'study-journey-widget-button-5',
            'study-journey-widget-link-5',
            'study-journey-widget-title-6',
            'study-journey-widget-desc-6',
            'study-journey-widget-background-6',
            'study-journey-widget-video-6',
            'study-journey-widget-button-6',
            'study-journey-widget-link-6',
            'study-journey-widget-title-7',
            'study-journey-widget-desc-7',
            'study-journey-widget-background-7',
            'study-journey-widget-video-7',
            'study-journey-widget-button-7',
            'study-journey-widget-link-7',
            'study-journey-widget-title-8',
            'study-journey-widget-desc-8',
            'study-journey-widget-slide-8-1',
            'study-journey-widget-slide-8-2',
            'study-journey-widget-slide-8-3',
            'study-journey-widget-slide-8-4',
            'study-journey-widget-slide-8-5',
            'study-journey-widget-slide-8-6',
            'study-journey-widget-button-8',
            'study-journey-widget-link-8',
            'study-journey-widget-title-9',
            'study-journey-widget-desc-9',
            'study-journey-widget-background-9',
            'study-journey-widget-video-9',
            'study-journey-widget-button-9',
            'study-journey-widget-link-9',
            'study-journey-widget-title-10',
            'study-journey-widget-desc-10',
            'study-journey-widget-background-10',
            'study-journey-widget-button-10',
            'study-journey-widget-link-10',
            'study-journey-widget-title-11',
            'study-journey-widget-desc-11',
            'study-journey-widget-background-11',
            'study-journey-widget-button-11',
            'study-journey-widget-link-11',
            'study-journey-widget-video-11',
            'study-journey-widget-title-12',
            'study-journey-widget-desc-12',
            'study-journey-widget-background-12',
            'study-journey-widget-button-12',
            'study-journey-widget-link-12',
            'search-seo-title',
            'search-banner-desc',
            'search-banner',
            'search-banner-title',
            'home-course-link-label',
        ]);
    }
}