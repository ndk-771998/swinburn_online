<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use VCComponent\Laravel\Post\Repositories\PostRepository;
use VCComponent\Laravel\Category\Repositories\CategoryRepository;

class HomeController extends Controller
{
    use PrepareOption;

    protected $post_repository;

    public function __construct(CategoryRepository $repository, PostRepository $post_repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
        $this->post_repository = $post_repository;
    }

    public function __invoke()
    {
        $this->prepareOption();
        getOption('website-favicon');

        SEOMeta::setTitle(getOption('home-seo-title'));
        OpenGraph::setTitle(getOption('home-seo-title'));
        SEOMeta::setDescription(getOption('home-seo-desc'));
        OpenGraph::setDescription(getOption('home-seo-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));
        $hot_post_categories = $this->repository->getListTranslatableCategories($type = 'posts', 3);;
        $posts = $this->post_repository->getListHotTranslatablePosts(4);
        $onlinecourses = $this->post_repository->getListHotTranslatablePosts(4, 'onlinecourses');
        return view('index', [
            'posts'                 => $posts,
            'hot_post_categories'   => $hot_post_categories,
            'onlinecourses'         => $onlinecourses
        ]);
    }
}
