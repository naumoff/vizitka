<footer class="footer-corporate">
    <div class="footer-corporate__main bg-gray-darker">
        <div class="shell shell-fluid shell-condensed">
            <div class="range range-xs-center range_xl-ten range-50 footer-corporate__range">
                <div class="cell-xs-10 cell-sm-6 cell-md-4 cell-lg-4 cell-xl-2 footer-corporate__column">
                    <h4 class="heading-bordered">@lang('heads.main-office')</h4>
                    <ul class="list-md">
                        <li>
                            <p class="address">@lang('strings.address-street')</p>
                            <P class="address" style="margin-top:0px">@lang('strings.address-city')</p>
                            <ul class="list-inline-0">
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>@lang('strings.weekdays')</dt>
                                        <dd>8:00–20:00</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>@lang('strings.weekends')</dt>
                                        <dd>@lang('strings.closed')</dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>@lang('strings.sales-dept')</dt>
                                <dd><a href="mailto:#">iam@consulting.mk</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>@lang('strings.phone')</dt>
                                <dd><a href="callto:#">+38 063 495 49 65</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-3 cell-lg-3 cell-xl-2 footer-corporate__column">
                    <h4 class="heading-bordered">@lang('heads.subscribe')</h4>
                    <p>@lang('strings.get-subscription')</p>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_sm rd-mailform_centered box-width-2" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="subscribe-email">@lang('placeholders.enter-email')</label>
                        </div>
                        <button class="button button-sm button-block button-secondary" type="submit">@lang('buttons.send')</button>
                    </form>
                </div>
                {{--<div class="cell-xs-6 cell-sm-6 cell-md-3 cell-lg-3 footer-corporate__column">--}}
                    {{--<h4 class="heading-bordered">Latest News</h4>--}}
                    {{--<ul class="post-group post-light-group">--}}
                        {{--<li>--}}
                            {{--<article class="post-light">--}}
                                {{--<p class="post-light__title"><a href="single-post.html">Email Newsletters Hit a Speed Bump with Inaccurate Open Rates</a></p>--}}
                                {{--<time datetime="2017">April 13, 2017</time>--}}
                            {{--</article>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<article class="post-light">--}}
                                {{--<p class="post-light__title"><a href="single-post.html">How We Measure the Increasing Vlogs' Ad Potential</a></p>--}}
                                {{--<time datetime="2017">March 25, 2017</time>--}}
                            {{--</article>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="cell-xs-4 cell-sm-6 cell-md-2 cell-lg-2 cell-xl-1 footer-corporate__column">
                    <h4 class="heading-bordered">@lang('heads.menu')</h4>
                    <ul class="list-xxs list_darker">
                        <li><a href="{{route('main', ['locale'=>App::getLocale()])}}">@lang('routes.main')</a></li>
                        <li><a href="{{route('about-us', ['locale'=>App::getLocale()])}}">@lang('routes.about-us')</a></li>
                        <li><a href="{{route('services', ['locale'=>App::getLocale()])}}">@lang('routes.services')</a></li>
                        <li><a href="{{route('our-work', ['locale'=>App::getLocale()])}}">@lang('routes.our-work')</a></li>
                        <li><a href="{{route('contacts', ['locale'=>App::getLocale()])}}">@lang('routes.contacts')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-corporate__aside bg-gray-base text-center">
        <div class="shell shell-fluid shell-condensed">
            <div class="range range-20 range_xl-ten footer-corporate__range">
                <div class="cell-sm-8 cell-xl-6 footer-corporate__aside-column text-sm-left">
                    <!-- Rights-->
                    <p class="rights"><span>Median</span><span>&nbsp;&copy;&nbsp;</span><span id="copyright-year"></span>.&nbsp;<br class="veil-xs"><a class="link-underline" href="privacy-policy.html">Privacy Policy</a>
                    </p>
                </div>
                <div class="cell-sm-4 cell-xl-4 footer-corporate__aside-column text-sm-right">
                    <ul class="list-inline-xxs">
                        <li><a class="icon icon-xs icon-style-modern fa fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xs icon-style-modern fa fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xs icon-style-modern fa fa-instagram" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>