<header id="header">
    <div class="up-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @foreach ($menu_header_1->menuItems as $menuItem)
                    @if ($menuItem->subMenus->count())
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ $menuItem->link ? $menuItem->link : '#' }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  {{ substr($menuItem->link, 0, 4) == 'http' ? 'target="blank_"' : '' }}>
                            {{$menuItem->label}}
                            <img src="{{URL('assets/logos/next2.svg')}}" alt="next">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($menuItem->subMenus as $subMenu)
                            <a class="dropdown-item" href="{{ $subMenu->link ? $subMenu->link : '#' }}">{{$subMenu->label}}</a>
                            @endforeach
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $menuItem->link ? $menuItem->link : '#' }}" {{ substr($menuItem->link, 0, 4) == 'http' ? 'target="blank_"' : '' }}>
                            {{$menuItem->label}}
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    <div class="bottom-header col-md-12 col-lg-12">
        <div class="row">
            <div class="left logo col-4 col-md-2">
                <a href="/"><img src="{{ getOption('header-logo') }}" alt="Swinburn Online"></a>
            </div>
            <div class="right menu col-8 col-md-10 p-0">
                <div class="icon-mobile">
                    <div class="mobile-search">
                    <a href="#" class="search" id="searchToggle1"><img src="{{URL('/assets/logos/search.svg')}}" alt="search"></a>
                </div>
                <div class="lang">
                    <a class="languages" href="#" id="dropdownLanguage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="vi" src="/assets/logos/{{Session::get('website_language') ? Session::get('website_language') : 'vn'}}.svg" alt="language">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                        @foreach($langs as $lang)
                        <a class="dropdown-item english" href="/change-language/{{$lang->code}}">{{$lang->name}} | <span>{{$lang->code}}</span></a>
                        @endforeach
                        <a class="dropdown-item vietnamese" href="/change-language/vn">Tiếng Việt | <span>VN</span></a>
                    </div>
                </div>
                <div id="toggle">
                    <img src="{{URL('assets/logos/bars.svg')}}" alt="toggle">
                </div>
                </div>
                <div class="desktop_menu">
                    @include('includes.menus.menu_desktop')
                </div>
            </div>
        </div>
    </div>
    <div id="search-module">
        <div class="container-fluid search-container" id="searchFrom">
            <div class="container">
                <div class="search-wrap">
                    <form action="/search" method="GET">
                        <div class="search-input">
                            <button>
                                <img src="/assets/logos/search.svg" alt="search">
                            </button>
                            <input type="text" autocomplete="off" name="search" placeholder="{{__('index.help-you')}}">
                        </div>
                        <div class="search-submit">
                            <button>{{__('index.search')}}</button>
                        </div>
                    </form>

                    <div class="type-hints container" id="search-type-hints">
                        <ul>
                            @foreach ($searching_hints as $post)
                            <li>{!! $post->title !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown-menu drop-menu-bellow" id="item-drop">
        <div class="row">
            @foreach($menu_header_2->menuItems as $menuItem)
            <div class="left-menu col-md-3 p-0">
                <ul class="navbar-nav ml-auto">
                    @foreach($menuItem->subMenus as $menuChild)
                    <li class="nav-item li-hover" id="link{{$loop->index}}">
                        <a href="{{ $menuChild->link ? $menuChild->link : '#' }}" class=""> {{$menuChild->label}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="right-menu col-md-9">
                @foreach($menuItem->subMenus as $menuChild)
                <div class="first-level boxlink" id="boxlink{{$loop->index}}">
                    <div class="row">
                        @foreach($menuChild->subMenus as $menuChild_lv1)
                        @if($menuChild_lv1->subMenus->count())
                        <div class="sub-menu col-md-4">
                            <h3>{{$menuChild_lv1->label}}</h3>
                            @foreach($menuChild_lv1->subMenus as $menuChild_lv2)
                            <ul class="second-level navbar-nav ml-auto">
                                <li class="nav-item"><a href="{{ $menuChild_lv2->link ? $menuChild_lv2->link : '#' }}"><img src="{{URL('assets/logos/red_arrow.svg')}}" alt="arrow"> {{$menuChild_lv2->label}}</a></li>
                                @foreach($menuChild_lv2->subMenus as $menuChild_lv3)
                                <li class="child nav-item"><a href="{{ $menuChild_lv3->link ? $menuChild_lv3->link : '#' }}"><img src="{{URL('assets/logos/red_arrow.svg')}}" alt="arrow"> {{$menuChild_lv3->label}}</a></li>
                                @endforeach
                            </ul>
                            @endforeach
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <a href="#" id="turnSearchModalOn">
        {{__('index.search-swinburne')}}
        <img src="/assets/logos/close.svg" width="24" height="24" alt="close">
    </a>
    <div class="mobile_menu">
        @include('includes.menus.menu_mobile')
    </div>
</header>