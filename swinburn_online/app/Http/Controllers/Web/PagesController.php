<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    use PrepareOption;
    public function pagesFlexible(){
        $this->prepareOption();
        getOption('website-favicon');
        
        SEOMeta::setTitle(getOption('flexible-study-seo-title'));
        OpenGraph::setTitle(getOption('flexible-study-seo-title'));
        OpenGraph::addImage(getOption('home-seo-image'));
        return view('pages.flexible-study');
    }

    public function pagesStudyjourney(){
        $this->prepareOption();
        getOption('website-favicon');
        
        SEOMeta::setTitle(getOption('study-journey-seo-title'));
        OpenGraph::setTitle(getOption('study-journey-seo-title'));
        OpenGraph::addImage(getOption('home-seo-image'));
        return view('pages.study-journey');
    }

    public function services(){
        $this->prepareOption();
        getOption('website-favicon');
        
        SEOMeta::setTitle(getOption('service-seo-title'));
        OpenGraph::setTitle(getOption('service-seo-title'));
        SEOMeta::setDescription(getOption('service-banner-1-desc'));
        OpenGraph::setDescription(getOption('service-banner-1-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));
        return view('pages.services-list');
    }

    public function support(){

        $this->prepareOption();
        getOption('website-favicon');

        SEOMeta::setTitle(getOption('support-seo-title'));
        OpenGraph::setTitle(getOption('support-seo-title'));
        SEOMeta::setDescription(getOption('support-banner-desc'));
        OpenGraph::setDescription(getOption('support-banner-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));

        return view('pages.support-services');
    }
}
