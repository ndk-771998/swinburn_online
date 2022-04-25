<footer>
    <div class="container-fluid up-footer ">
        <div class="container link-block">
            <div class="row">
                <div class="label col-xl-2">
                    <p>{{__('index.connect-with-swinburne')}}</p>
                </div>
                <div class="links col-12 col-xs-12 col-md-12 col-xl-10">
                    <a href="{{ getOption("footer-twitter-link") }}"><img src="{{URL('assets/logos/twitter.svg')}}" alt="twitter"></a>
                    <a href="{{ getOption("footer-facebook-link") }}"><img src="{{URL('assets/logos/facebook.svg')}}" alt="facebook"></a>
                    <a href="{{ getOption("footer-youtube-link") }}"><img src="{{URL('assets/logos/youtube.svg')}}" alt="youtube"></a>
                    <a href="{{ getOption("footer-linkedin-link") }}"><img src="{{URL('assets/logos/linkedin.svg')}}" alt="linkedin"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid middle-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 menu">
                    <ul class="navbar-nav ml-auto">
                        @foreach($footer_1->menuItems as $menuItem)
                        <li class="nav-item"><a href="{{$menuItem->link ? $menuItem->link : '#'}}">{{$menuItem->label}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-xl-2 menu">
                    <ul class="navbar-nav ml-auto">
                        @foreach($footer_2->menuItems as $menuItem)
                        <li class="nav-item"><a href="{{$menuItem->link ? $menuItem->link : '#'}}">{{$menuItem->label}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-4 col-xl-3 information">
                    {!! getOption("footer-contact-info") !!}
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                    <div class="logo">
                        <a href="#"><img class="lazyload" data-src="{{ getOption("footer-logo") }}" alt="footer-logo"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 contact">
                    <a href="#"><button class="btn-footer-danger">{{__('index.connect-with-swinburne')}}</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bottom-footer">
        <div class="container bottom_nav">
            <div class="row">
                <div class="col-lg-12">
                    {!! getOption("copy-right") !!}
                </div>
            </div>
        </div>
    </div>
</footer>