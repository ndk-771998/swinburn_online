<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use VCComponent\Laravel\ConfigContact\Entites\ContactForm;

class ContactUsController extends Controller
{
    use PrepareOption;

    public function __invoke()
    {
        $this->prepareOption();
        getOption('website-favicon');

        SEOMeta::setTitle(getOption('contact-seo-title'));
        OpenGraph::setTitle(getOption('contact-seo-title'));
        SEOMeta::setDescription(getOption('contact-banner-desc'));
        OpenGraph::setDescription(getOption('contact-banner-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));
        
        return view('pages.contact-us', [
            'contact_form' => new ContactForm()
        ]);
    }
}
