<div class="breadcrumb container" id="breadcrumb">
    <p>
        <a href="/">{{__('index.home')}}</a>
        <img src="/assets/logos/arrow.svg" width="14" height="14" alt="arrow">
        @foreach($breadcrumb as $key => $value)
        @if($loop->last)
        <a href="" class="current-page"> {!!$value!!}</a></i>
        @else
        <a href="{{$value}}"> {!!$key!!}</a> <img src="/assets/logos/arrow.svg" width="14" height="14" alt="arrow">
        @endif
        @endforeach
    </p>
</div>