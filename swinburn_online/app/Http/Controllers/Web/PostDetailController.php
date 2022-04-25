<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS;
use VCComponent\Laravel\Post\Contracts\ViewPostDetailControllerInterface;
use VCComponent\Laravel\Post\Repositories\PostRepository;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostDetailController as BasePostDetailController;

class PostDetailController extends BasePostDetailController implements ViewPostDetailControllerInterface
{
    use PrepareOption;

    
    public function viewEvents()
    {
        return 'pages.event-detail';
    }

    public function viewDataEvents($post, Request $request)
    {
        $this->prepareOption();
        getOption('event-seo-title');
        if ($post->getMetaField('seo_title')) {
            SEOMeta::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
        } else {
            SEOMeta::setTitle($post->title);
            OpenGraph::setTitle($post->title);
        }
        if ($post->getMetaField('seo_desc')) {
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
        } else {
            SEOMeta::setDescription($post->description);
            OpenGraph::setDescription($post->description);
        }
        OpenGraph::addImage($post->thumbnail);
        
        $related_posts = $this->repository->getListRelatedTranslatablePosts($post, 4);
        return [
            'related_posts' => $related_posts
        ];
    }

    public function viewAboutus()
    {
        return 'pages.aboutus';
    }


    public function viewDataAboutus($post, Request $request)
    {
        $related_posts = $this->repository->getListRelatedTranslatablePosts($post, 3);

        return [
            'related_posts' => $related_posts
        ];
    }

    public function viewPages()
    {
        return 'pages.page';
    }

    public function viewDataPages($post, Request $request)
    {
        $this->prepareOption();
        getOption('fee-seo-title');
        if ($post->getMetaField('seo_title')) {
            SEOMeta::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
        } else {
            SEOMeta::setTitle($post->title);
            OpenGraph::setTitle($post->title);
        }
        if ($post->getMetaField('seo_desc')) {
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
        } else {
            SEOMeta::setDescription($post->description);
            OpenGraph::setDescription($post->description);
        }
        OpenGraph::addImage($post->thumbnail);
        return [];
    }

    public function viewFaqs()
    {
        return 'pages.faqs_detail';
    }

    public function viewDataFaqs($post, Request $request)
    {
        $related_posts = $this->repository->getListRelatedTranslatablePosts($post, 3);

        return [
            'related_posts' => $related_posts
        ];
    }

    public function view()
    {
        return 'pages.blog-detail';
    }

    public function viewData($post, Request $request)
    {
        $this->prepareOption();
        getOption('posts-seo-title');
        if ($post->getMetaField('seo_title')) {
            SEOMeta::setTitle($post->getMetaField('seo_title'));
            OpenGraph::setTitle($post->getMetaField('seo_title'));
        } else {
            SEOMeta::setTitle($post->title);
            OpenGraph::setTitle($post->title);
        }
        if ($post->getMetaField('seo_desc')) {
            SEOMeta::setDescription($post->getMetaField('seo_desc'));
            OpenGraph::setDescription($post->getMetaField('seo_desc'));
        } else {
            SEOMeta::setDescription($post->description);
            OpenGraph::setDescription($post->description);
        }
        OpenGraph::addImage($post->thumbnail);
        $related_posts = $this->repository->getListRelatedTranslatablePosts($post, 3);

        return [
            'related_posts' => $related_posts
        ];
    }

    public function viewOnlinecourses()
    {
        return 'pages.course-detail';
    }

    public function viewDataOnlinecourses($post, Request $request)
    {
        $standards = $this->repository->getListOfSearchingTranslatablePosts($post->title, null, 'standards', true);
        $units = $this->repository->getListOfSearchingTranslatablePosts($post->title, null, 'units', true);
        return [
            'units' => $units,
            'standards' => $standards,
        ];
    }
}
