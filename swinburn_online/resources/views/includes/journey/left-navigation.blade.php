<div class="left-navigation d-none d-md-flex">
    <div class="h-100">
        <ul>
            @foreach ($titles as $item)
                <li class="journey-navigation" scrollTarget="#{{ Str::slug($item) }}">{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>