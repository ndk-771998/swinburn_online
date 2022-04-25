<ul class="menu_child">
    @if($menuItem->subMenus->count())
    @foreach($menuItem->subMenus as $subMenu)
    <li>
        @foreach($subMenu->subMenus as $subChild)
        <a href="{{ $subChild->link ? $subChild->link : '#' }}">{{$subChild->label}}</a>
        @endforeach
        @include('includes.menus.menu_mobile_child', ['menuItem' => $subMenu])
    </li>
    @endforeach
    @endif
</ul>