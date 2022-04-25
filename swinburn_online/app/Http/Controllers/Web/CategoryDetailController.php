<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Tag;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Category\Http\Controllers\Web\CategoryDetailController as WebCategoryDetailController;
use VCComponent\Laravel\Category\Repositories\CategoryRepository;
use VCComponent\Laravel\Post\Repositories\PostRepository;
use VCComponent\Laravel\Tag\Repositories\TagRepository;

class CategoryDetailController extends WebCategoryDetailController
{
    use PrepareOption;
    
    protected $post_repository, $tag_repository;

    public function __construct(CategoryRepository $repository, PostRepository $post_repository, TagRepository $tag_repository )
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
        $this->post_repository = $post_repository; 
        $this->tag_repository = $tag_repository;
    }
    
    protected function view()
    {
        return 'pages.blog-list';
    }

    protected function viewData($category, Request $request)
    {
        $this->prepareOption();
        getOption('title-seo-home');
        SEOMeta::setTitle($category->name);
        SEOMeta::setDescription(getOption('desc-seo-home'));
        OpenGraph::setTitle($category->name);
        OpenGraph::setDescription(getOption('desc-seo-home'));
        OpenGraph::addImage(getOption('website-logo'));

        $posts = $this->post_repository->getEntity()->ofType($category->type)->with('languages')
        ->where(function ($where_query) use ($category) {
            $where_query
            ->whereHas('categories', function ($q) use ($category) {
                $q->where('name', 'like', $category->name);
            });
        })
        ->where(function ($where_query) use ($request) {
            if ($request->has('tag'))
            $where_query
            ->whereHas('tags', function ($q) use ($request) {
                $q->where('name', 'like', $request->tag);
            });
        })
        ->with('postMetas')
        ->with('categories')
        ->with('tags')
        ->where('status', 1)
        ->orderBy('order', 'asc')
        ->latest()->paginate(15);

        $blog_categories = $this->repository->getListTranslatableCategories($category->type, 15);
        $tags = $this->tag_repository->getListTranslatableTags(20);
        return [
            'filtered_posts' => $posts,
            'blog_category' => $blog_categories,
            'tags'  => $tags,
            'type' => $category->type,
        ];
    }

    protected function viewFaqs()
    {
        return 'pages.faqs_category';
    }

    protected function viewDataFaqs($category, Request $request){
        $query = new Post();
        $query = $query->scopeOfCategory($query, $category->id);
        $posts_categories = $query->where('status', 1)->where('type', 'faqs')->get();
        $posts = $this->post_repository->findByWhere(['status' => 1], $type = 'faqs');
        $faqs_categories = $this->repository->getListTranslatableCategories($type = 'faqs', 15);
        $url_canonical = $request->url();
        return [
            'posts' => $posts,
            'url_canonical' => $url_canonical,
            'posts_categories' => $posts_categories,
            'faqs_categories' => $faqs_categories,
        ];
    }

    protected function viewEvents()
    {
        return 'pages.event-list';
    }

    protected function viewDataEvents($category, Request $request){
        $posts = $this->post_repository->getListPaginatedOfSearchingPosts($category->name, 15, 'events', true);
        $categories = $this->repository->getListTranslatableCategories($type = 'events', 15);;
        return [
            'posts' => $posts,
            'event_category' => $categories,
            'type' => $category->type,
        ];
    }
}
