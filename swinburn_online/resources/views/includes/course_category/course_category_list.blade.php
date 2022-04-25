<div class="course-category-list">
    <div class="row">
        @foreach ($posts as $item)
        @include('includes.course_category.course_category_item')
        @endforeach
    </div>
</div>