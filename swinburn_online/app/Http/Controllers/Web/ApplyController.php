<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use VCComponent\Laravel\ConfigContact\Entites\ContactForm;

class ApplyController extends Controller
{
    use PrepareOption;

    public function __invoke()
    {
        $this->prepareOption();
        getOption('website-favicon');

        SEOMeta::setTitle(getOption('apply-seo-title'));
        OpenGraph::setTitle(getOption('apply-seo-title'));
        SEOMeta::setDescription(getOption('apply-banner-desc'));
        OpenGraph::setDescription(getOption('apply-banner-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));
        
        return view('pages.apply', [
            'contact_form' => new ContactForm()
        ]);
    }
}
