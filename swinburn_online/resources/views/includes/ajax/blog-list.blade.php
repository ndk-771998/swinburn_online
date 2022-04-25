@foreach($posts as $post)
    @include('includes.blog.blog_item', ['custom_col' => 'col-12 col-lg-6 col-xl-4'])
@endforeach