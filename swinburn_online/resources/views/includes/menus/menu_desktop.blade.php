<nav class="navbar navbar-expand desktop">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @foreach($menu_header_2->menuItems as $menuItem)
            @if($menuItem->subMenus->count())
            <li class="nav-item">
                <a class="nav-link icon" href="{{ $menuItem->link ? $menuItem->link : '#' }}" id="drop-menu">
                    {{$menuItem->label}} <img src="{{URL('assets/logos/next1.svg')}}" alt="next">
                </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link icon" href="{{ $menuItem->link ? $menuItem->link : '#' }}">
                    {{$menuItem->label}}
                </a>
            </li>
            @endif
            @endforeach
            <li class="nav-item">
                <a href="#" class="search nav-link" id="searchToggle"><img src="{{URL('/assets/logos/search.svg')}}" alt="search"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link languages" href="#" id="dropdownLanguage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="vi" src="/assets/logos/{{Session::get('website_language') ? Session::get('website_language') : 'vn'}}.svg" alt="language">
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                    @foreach($langs as $lang)
                    <a class="english" href="/change-language/{{$lang->code}}">{{$lang->name}} | <span>{{$lang->code}}</span></a>
                    @endforeach
                    <a class="vietnamese" href="/change-language/vn">Tiếng Việt | <span>VN</span></a>
                </div>
            </li>
            <li class="nav-item">
                <a href="/apply" class="join-button">
                    <button class="btn-menu-danger">{{__('index.courses-btn')}}</button>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript">
    $(".english").click(function(){
        $(".vi").hide();
        $(".en").show();
  });

  $(".vietnamese").click(function(){
        $(".en").hide();
        $(".vi").show();
  });
</script>