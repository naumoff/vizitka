<header class="page-header section">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-aside-outer rd-navbar-content-outer">
                <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                <div class="rd-navbar-aside rd-navbar-content">
                    <div class="rd-navbar-aside__item">
                        <ul class="rd-navbar-items-list">
                            @if (Route::has('login'))
                                <li>
                                    <div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-user144"></span></div>
                                        <div class="unit__body">
                                            @auth
                                                <a href="{{ route('panel') }}">@lang('link_names.dashboard')</a>
                                            @else
                                                <a href="{{ route('login') }}">@lang('link_names.login')</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}">@lang('link_names.register')</a>
                                                @endif
                                            @endauth
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="rd-navbar-aside__item">
                        <ul class="rd-navbar-items-list">
                            <li>
                                <div class="unit unit-spacing-xxs unit-horizontal">
                                    <div class="unit__left"><span class="text-primary fl-bigmug-line-cellular9"></span></div>
                                    <div class="unit__body"><a href="callto:#">+1 (409) 987–5874</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group dropleft">
                        <button class="btn btn-sm dropdown-toggle lang-switch" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{strtoupper(App::getLocale())}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="min-width: 0; padding: 0 0 0 0;">
                            <a href="{{route(\Route::currentRouteName(), ['locale' => 'en'])}}" class="btn btn-sm" {{(App::getLocale() == 'en')? 'disabled': null}}>EN</a>
                            <a href="{{route(\Route::currentRouteName(), ['locale' => 'ru'])}}" class="btn btn-sm" {{(App::getLocale() == 'ru')? 'disabled': null}}>RU</a>
                            <a href="{{route(\Route::currentRouteName(), ['locale' => 'ua'])}}" class="btn btn-sm" {{(App::getLocale() == 'ua')? 'disabled': null}}>UA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel -->
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="/">
                                <div class="brand__name">
                                    <img src="/images/logo-135x47.png" alt="" width="135" height="47"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- RD Navbar Nav -->
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-main-item">
                            <a class="button button-xs button-primary button-quote" href="{{route('contacts', ['locale'=>App::getLocale()])}}">@lang('buttons.get-quote')</a>
                        </div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="{{route('main', ['locale'=>App::getLocale()])}}">@lang('routes.main')</a>
                            </li>
                            <li><a href="{{route('about-us', ['locale'=>App::getLocale()])}}">@lang('routes.about-us')</a>
                            </li>
                            <li><a href="{{route('services', ['locale'=>App::getLocale()])}}">@lang('routes.services')</a>
                            </li>
                            <li><a href="{{route('our-work', ['locale'=>App::getLocale()])}}">@lang('routes.our-work')</a>
                            </li>
                            <li><a href="{{route('contacts', ['locale'=>App::getLocale()])}}">@lang('routes.contacts')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>