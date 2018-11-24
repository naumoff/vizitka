<header class="page-header section">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-aside-outer rd-navbar-content-outer">
                <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                <div class="rd-navbar-aside rd-navbar-content">
                    <div class="rd-navbar-aside__item">
                        <ul class="rd-navbar-items-list">
                            <li>
                                <div class="unit unit-spacing-xxs unit-horizontal">
                                    <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-trophy55"></span></div>
                                    <div class="unit__body">
                                        <p>Number #1 Supplier in Europe</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-xxs unit-horizontal">
                                    <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-circular220"></span></div>
                                    <div class="unit__body">
                                        <p>Certified ISO 9001:2008</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rd-navbar-aside__item">
                        <ul class="rd-navbar-items-list">
                            <li>
                                <div class="unit unit-spacing-xxs unit-horizontal">
                                    <div class="unit__left"><span class="text-primary">Phone:</span></div>
                                    <div class="unit__body"><a href="callto:#">+1 (409) 987–5874</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group dropleft">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="button button-xs button-primary" href="{{route($_t::ROUTE_CONTACTS, ['locale'=>App::getLocale()])}}">@lang($_t::BUTTON_QUOTE)</a>
                        </div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="{{route($_t::ROUTE_MAIN, ['locale'=>App::getLocale()])}}">@lang($_t::ROUTE_MAIN)</a>
                            </li>
                            <li><a href="{{route($_t::ROUTE_ABOUT_US, ['locale'=>App::getLocale()])}}">@lang($_t::ROUTE_ABOUT_US)</a>
                            </li>
                            <li><a href="{{route($_t::ROUTE_SERVICES, ['locale'=>App::getLocale()])}}">@lang($_t::ROUTE_SERVICES)</a>
                            </li>
                            <li><a href="{{route($_t::ROUTE_OUR_WORK, ['locale'=>App::getLocale()])}}">@lang($_t::ROUTE_OUR_WORK)</a>
                            </li>
                            <li><a href="{{route($_t::ROUTE_CONTACTS, ['locale'=>App::getLocale()])}}">@lang($_t::ROUTE_CONTACTS)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>