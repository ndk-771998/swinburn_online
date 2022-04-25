<nav class="mobile" id="nav">
    <ul>
        @foreach($menu_header_2->menuItems as $menuItem)
        @if($menuItem->subMenus->count())
        <li>
            <a href="{{ $menuItem->link ? $menuItem->link : '#'}}">{{$menuItem->label}}</a>
            <span class="dropdown-arrow drop-down" toggleTarget="#item-{{$loop->index}}">
                <img src="{{URL('assets/logos/next1.svg')}}" alt="next">
            </span>
            <div class="sub-menu" id="item-{{$loop->index}}">
                <ul>
                @foreach($menuItem->subMenus as $menuChild)
                    <li>
                    <a href="{{ $menuChild->link ? $menuChild->link : '#' }}">{{$menuChild->label}}</a>
                        <span class="dropdown drop-down" toggleTarget="#item-{{$loop->index+1}}">
                            <img src="{{URL('assets/logos/next1.svg')}}" alt="next">
                        </span>
                        <div class="sub-menu" id="item-{{$loop->index+1}}">
                            @include('includes.menus.menu_mobile_child', ['menuItem' => $menuChild])
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
        </li>
        @else
        <li>
            <a href="{{ $menuItem->link ? $menuItem->link : '#'}}">{{$menuItem->label}}</a>
        </li>
        @endif
        @endforeach

        <li class="apply-now">
            <a href="/apply">{{__('index.courses-btn')}}</a>
        </li>

        @foreach($menu_header_1->menuItems as $menuItem)
        @if($menuItem->subMenus->count())
        <li class="dark-nav">
            <a href="{{ $menuItem->link ? $menuItem->link : '#'}}">{{$menuItem->label}}</a>
            <span class="dropdown-arrow drop-down" toggleTarget="#menu-{{$loop->index}}">
                <img src="{{URL('assets/logos/next1.svg')}}" alt="next">
            </span>
            <div class="sub-menu" id="menu-{{$loop->index}}">
                @foreach($menuItem->subMenus as $subMenu)
                <a href="{{ $subMenu->link ? $subMenu->link : '#'}}">{{$subMenu->label}}</a>
                @endforeach
            </div>
        </li>
        @else
        <li class="dark-nav">
            <a href="{{ $menuItem->link ? $menuItem->link : '#'}}">{{$menuItem->label}}</a>
        </li>
        @endif
        @endforeach

    </ul>
</nav>