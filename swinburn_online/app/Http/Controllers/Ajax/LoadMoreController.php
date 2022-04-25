<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Post;
use VCComponent\Laravel\Post\Repositories\PostRepository;

class LoadMoreController extends Controller
{
    protected $post_repository;

    public function __construct(PostRepository $post_repository)
    {
        $this->post_repository = $post_repository;
    }

    public function loadMore(Request $request)
    {
        $posts = $this->post_repository->getEntity()->ofType($request->type)->with('languages')
            ->where(function ($where_query) use ($request) {
                if ($request->get('category')) {
                    $where_query
                        ->whereHas('categories', function ($q) use ($request) {
                            $q->where('name', 'like', $request->category);
                        });
                }
            })
            ->where(function ($where_query) use ($request) {
                if ($request->get('tag')) {
                    $where_query
                        ->whereHas('tags', function ($q) use ($request) {
                            $q->where('name', 'like', $request->tag);
                        });
                }
            })
            ->with('postMetas')
            ->with('categories')
            ->with('tags')
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->latest()->paginate(15);

        $view = 'includes.ajax.blog-list';
        switch ($request->type) {
            case 'blogs':
                $view = 'includes.ajax.blog-list';
                break;

            case 'events':
                $view = 'includes.ajax.event-list';
                break;

            default:
                $view = 'includes.ajax.blog-list';
                break;
        }
        return view($view, [
            'posts' => $posts,
        ]);
    }

    public function loadMoreSearch(Request $request)
    {
        $posts = Post::where('status', 1)->whereIn('type', ['posts', 'events', 'faqs']);
        $posts = $this->applySearchFromRequest($posts, ['title', 'description'], $request)->orderBy('order', 'asc')->latest()->paginate(8);

        $view = 'includes.ajax.search-item';
        return view($view, [
            'posts' => $posts
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
