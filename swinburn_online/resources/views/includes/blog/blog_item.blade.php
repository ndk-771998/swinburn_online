<div class="{{ isset($custom_col) ? $custom_col : 'col-12 col-lg-6 col-xl-4'}}">
    <div class="blog-item">
        <a href="/{{$post->type}}/{{$post->slug}}"><div class="blog-thumbnail" style="background: url('{{$post->thumbnail}}')">
        </div></a>
        <div class="blog-info">
            <a href="/{{$post->type}}/{{$post->slug}}"><div class="title">
                    {!! $post->title !!}
                </div>
            </a>
            <a href="/{{$post->type}}/{{$post->slug}}">
                <div class="description">
                {!! $post->description !!}
                </div>
            </a>
        </div>
    </div>
</div>