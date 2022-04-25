<div class="blog-sidebar">
    {{-- @if (count($blog_category)) --}}
    <div class="blog-category-list">
        <div class="blog-category-title">
            {!! getOption('posts-category-title') !!}
        </div>
        <ul>
            @if (isset($category))
                <li><a href="/posts">{{__('blog.all')}}</a></li>
                @foreach($blog_category as $item)
                <li class="{{ ($item->slug == $category->slug && isset($category))  ? 'active' : ''}}"><a href="/categories/{{$item->slug}}">{{$item->name}}</a></li>
                @endforeach
            @else
                <li class="active"><a href="/posts">{{__('blog.all')}}</a></li>
                @foreach($blog_category as $item)
                <li><a href="/categories/{{$item->slug}}">{{$item->name}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
    {{-- @endif --}}
    <div class="blog-tags-list">
        <div class="blog-tags-title">
            {!! getOption('posts-tag-title') !!}
        </div>
        <div class="tag-block">
            @foreach($tags as $tag)
                <a href="?tag={{$tag->name}}"><span {{ app('request')->get('tag') == $tag->name ? 'class=active' : ''}}>{{$tag->name}}</span></a>
            @endforeach
        </div>
    </div>
</div>