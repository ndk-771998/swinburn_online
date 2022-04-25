<div class="col-12 col-lg-6 col-xl-3 course-category-item">
    <div class="course-category-thumbnail" style="background: url('{{ $item->thumbnail }}')">
        <div class="shadow-layer">
            <h3>{!! $item->title !!}</h3>
        </div>
    </div>
    <a href="/{!! $item->type !!}/{!! $item->slug !!}" class="btn btn-see-all w-100">
        {{__('index.all-courses')}}
        <span>
            <img src="/assets/logos/arrow.svg" alt="arrow">
        </span>
    </a>
</div>