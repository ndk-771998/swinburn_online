<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Tag;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Category\Repositories\CategoryRepository;
use VCComponent\Laravel\Post\Contracts\ViewPostListControllerInterface;
use VCComponent\Laravel\Post\Http\Controllers\Web\PostListController as BasePostListController;
use VCComponent\Laravel\Post\Repositories\PostRepository;
use VCComponent\Laravel\Tag\Repositories\TagRepository;

class PostListController extends BasePostListController implements ViewPostListControllerInterface
{
    use PrepareOption;

    protected $category_repository, $tag_repository;

    public function __construct(CategoryRepository $category_repository, PostRepository $repository, TagRepository $tag_repository)
    {
        $this->category_repository = $category_repository;
        $this->tag_repository = $tag_repository;
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
        if (isset(config('post.viewModels')['postList'])) {
            $this->ViewModel = config('post.viewModels.postList');
        } else {
            $this->ViewModel = PostListViewModel::class;
        }
    }

    public function viewEvents()
    {
        return 'pages.event-list';
    }

    public function viewDataEvents($posts, Request $request)
    {
        $this->prepareOption();
        getOption('website-favicon');

        SEOMeta::setTitle(getOption('event-seo-title'));
        OpenGraph::setTitle(getOption('event-seo-title'));
        SEOMeta::setDescription(getOption('event-banner-desc'));
        OpenGraph::setDescription(getOption('event-banner-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));

        $event_category = $this->category_repository->getListTranslatableCategories($type = 'events', 15);
        return [
            'event_category' => $event_category,
            'type'  => $this->getTypePost($request)
        ];
    }

    public function viewFaqs()
    {
        return 'pages.faqs';
    }

    public function viewDataFaqs($posts, Request $request)
    {
        $this->prepareOption();
        getOption('website-favicon');

        SEOMeta::setTitle(getOption('faqs-seo-title'));
        OpenGraph::setTitle(getOption('faqs-seo-title'));
        SEOMeta::setDescription(getOption('faqs-banner-desc'));
        OpenGraph::setDescription(getOption('faqs-banner-desc'));
        OpenGraph::addImage(getOption('faqs-banner'));

        $url_canonical = $request->url();
        $faqs_categories = $this->category_repository->getCategoriesQuery(['type' => $this->getTypePost($request), 'status' => 1]);
        return [
            'url_canonical' => $url_canonical,
            'faqs_categories' => $faqs_categories
        ];
    }

    public function view()
    {
        return 'pages.blog-list';
    }

    public function viewData($posts, Request $request)
    {
        $this->prepareOption();
        getOption('posts-seo-title');
        SEOMeta::setTitle(getOption('posts-seo-title'));
        OpenGraph::setTitle(getOption('posts-seo-title'));
        SEOMeta::setDescription(getOption('posts-banner-desc'));
        OpenGraph::setDescription(getOption('posts-banner-desc'));
        OpenGraph::addImage(getOption('home-seo-image'));
        $type = $this->getTypePost($request);
        // $blog_category = Category::where('type', $this->getTypePost($request))->get();
        $blog_category = $this->category_repository->getCategoriesQuery(['type' => $this->getTypePost($request), 'status' => 1]);
        $tags = $this->tag_repository->getListTranslatableTags(20);
      
        $posts = $this->repository->getEntity()->ofType($type)->with('languages')
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

        return [
            'blog_category' => $blog_category,
            'tags' => $tags,
            'filtered_posts' => $posts,
            'type' => $type,
        ];
    }

    protected function getTypePost($request)
    {
        if (config('post.models.post') !== null) {
            $model_class = config('post.models.post');
        } else {
            $model_class = \VCComponent\Laravel\Post\Entities\Post::class;
        }
        $model = new $model_class;
        $postTypes = $model->postTypes();
        $path_items = collect(explode('/', $request->path()));
        $type = 'posts';

        foreach ($postTypes as $value) {
            foreach ($path_items as $item) {
                if ($value === $item) {
                    $type = $value;
                } else if ($item === 'pages') {
                    $type = 'pages';
                }
            }
        }

        return $type;
    }
}
