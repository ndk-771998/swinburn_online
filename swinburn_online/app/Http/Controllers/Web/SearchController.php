<?php

namespace App\Http\Controllers\Web;

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Traits\PrepareOption;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use VCComponent\Laravel\Config\Services\Facades\Option;

class SearchController extends Controller
{
    use PrepareOption;

    public function __invoke(Request $request)
    {
        $this->prepareOption();
        getOption('search-seo-title');
        SEOMeta::setTitle(getOption('search-seo-title'));
        SEOMeta::setDescription(getOption('search-banner-desc'));
        OpenGraph::setTitle(getOption('search-seo-title'));
        OpenGraph::setDescription(getOption('search-banner-desc'));
        OpenGraph::addImage(getOption('website-logo'));


        $posts = [];
        $posts = Post::where('status', 1)->whereIn('type', ['posts', 'events', 'faqs']);
        $posts = $this->applySearchFromRequest($posts, ['title', 'description'], $request)->orderBy('order', 'asc')->latest()->paginate(8);

        return view('pages.search', [
            'posts' => $posts,
        ]);
    }

    protected function applySearchFromRequest($query, array $fields, Request $request)
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            if (count($fields)) {
                $query = $query->where(function ($q) use ($fields, $search) {
                    foreach ($fields as $key => $field) {
                        $q = $q->orWhere($field, 'like', "%{$search}%");
                    }
                });
            }
        }
        return $query;
    }
}
