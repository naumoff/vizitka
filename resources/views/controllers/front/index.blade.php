@extends('layouts.app')

@section('content')
    <!-- Swiper-->
    <section class="section section-layout-1">
        <div class="section-layout-main">
            <div class="swiper-container swiper-slider swiper-slider_style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="images/slider-slide-1-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h2 data-caption-animate="fadeInUpSmall">@lang('heads.statement-1')
                                        </h2>
                                        <div class="object-decorated">
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                @lang('strings.slider-description-1')
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slider-slide-2-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h2 data-caption-animate="fadeInUpSmall">@lang('heads.statement-2')
                                        </h2>
                                        <div class="object-decorated">
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                @lang('strings.slider-description-2')
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slider-slide-3-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h2 data-caption-animate="fadeInUpSmall">@lang('heads.statement-3')
                                        </h2>
                                        <div class="object-decorated">
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                @lang('strings.slider-description-3')
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slider-slide-3-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h2 data-caption-animate="fadeInUpSmall">@lang('heads.statement-4')
                                        </h2>
                                        <div class="object-decorated">
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                @lang('strings.slider-description-4')
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="section-layout-aside">
            <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img class="thumb-modern__image" src="/images/home-1-538x200.jpg" alt="" width="538" height="200"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title">@lang('heads.development')</p>
                    </div></a></div>
            <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img class="thumb-modern__image" src="/images/home-2-498x195.jpg" alt="" width="498" height="195"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title">@lang('heads.security')</p>
                    </div></a></div>
            <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img class="thumb-modern__image" src="/images/home-3-460x195.jpg" alt="" width="460" height="195"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title">@lang('heads.integration')</p>
                    </div></a></div>
        </div>
    </section>

    <!-- Experience since 1999-->
    <section class="section section-md bg-white">
        <div class="bg-gray-4">
            <div class="shell-fluid shell-condensed">
                <div class="range range-30 range-md-reverse">
                    <div class="cell-sm-12 cell-md-6">
                        <div class="section-md shell-fluid-cell">
                            <div class="box-centered box-width-1 box-custom">
                                <h2><span>Experience</span><span class="object-decorated object-decorated_inline" style="max-width: 125px;"><span class="heading-5">since 2006</span></span></h2>
                                <p>Our company has been the leading provider of advertising services to American companies since 2006. We pay attention to every aspect of our work.</p>
                                <div class="group-md group-middle button-group"><a class="button button-darker" href="{{route('contacts', ['locale'=>App::getLocale()])}}">@lang('buttons.get-quote')</a>
                                    <p>or</p><a class="button button-primary" href="#">get a brochure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-12 cell-md-6 reveal-flex">
                        <div class="thumb-video"><img class="thumb-video__image" src="/images/video-preview-962x465.jpg" alt="" width="962" height="465"/>
                            <div class="thumb-video__caption"><a class="thumb-video__button" href="//vimeo.com/108425305" data-lightgallery="item" data-src="//vimeo.com/108425305"></a>
                                <h4 class="thumb-video__title">Video Presentation</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counters-->
    <section class="section parallax-container bg-gray-dark" data-parallax-img="images/parallax-3.jpg" alt="">
        <div class="parallax-content">
            <div class="section-md text-center">
                <div class="shell shell-wide">
                    <ul class="list-blocks">
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">11</div>
                                    </div>
                                    <p class="box-counter-modern__title">Years in the industry</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">35</div>
                                    </div>
                                    <p class="box-counter-modern__title">Partners worldwide</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap"><span>#</span><span class="big">01</span></div>
                                    <p class="box-counter-modern__title">Advertising agency</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">264</div>
                                    </div>
                                    <p class="box-counter-modern__title">Successful projects</p>
                                </article>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Projects-->
    <section class="section section-md bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Our Projects</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="{{route('our-work', ['locale'=>App::getLocale()])}}"><span>See All Projects</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <div class="isotope" data-isotope-layout="masonry" data-isotope-group="projects">
                <div class="row row-no-gutter">
                    <div class="col-xs-6 col-md-4 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src=/"images/project-1-639x524.jpg" alt="" width="639" height="524"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">New Office Co.</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="/mages/project-2-320x262.jpg" alt="" width="320" height="262"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">2K Stationery</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="/images/project-4-320x524.jpg" alt="" width="320" height="524"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">iStep</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-4 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="/images/project-3-640x524.jpg" alt="" width="640" height="524"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">PaperWorks Ltd.</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="/images/project-5-320x262.jpg" alt="" width="320" height="262"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">BTS Corp.</p>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stocks Rating-->
    <section class="section section-lg bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <div class="range range-sm-center range-md-left range-md-middle range-50">
                        <div class="cell-sm-10 cell-md-5 cell-lg-5">
                            <h2>Why Choose Us</h2>
                            <p>We bring our diverse background of advertising, design, branding, public relations, research and strategic planning to work for your company. Not only will your materials look great – they will get results. We don’t create concepts in a vacuum – they fit into the standards of your industry. And once we have a total picture of your company, its target audience and goals, we’ll create a detailed plan including a commitment to stay on budget.</p><a class="button button-dark-outline" href="statistics.html">View statistics</a>
                        </div>
                        <div class="cell-sm-10 cell-md-7 cell-xl-6">
                            <div class="box-spacer-left box-spacer-left-lg">
                                <div class="d3-chart" id="line-chart" style="width:100%;height: 370px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Professionals-->
    <section class="section parallax-container bg-gray-dark" data-parallax-img="/images/bg-image-3.jpg" alt="">
        <div class="parallax-content">
            <div class="section-sm text-center">
                <div class="shell shell-wide">
                    <div class="range range-md-center">
                        <div class="cell-lg-11">
                            <!-- Section Header-->
                            <div class="section__header section_header-noborder">
                                <h2>Our Professionals</h2>
                                <div class="section__header-element"><a class="link link-arrow" href="team.html"><span>View All Team</span></a></div>
                            </div>
                            <div class="range range-30 range-flex">
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative-->
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="/images/team-1-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Sam Wilson</p>
                                            <p class="card-creative__subtitle">Founder, CEO</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative-->
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="/images/team-2-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Jeffrey Neddery</p>
                                            <p class="card-creative__subtitle">Business Development Manager</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative-->
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="images/team-3-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Peter Wilson</p>
                                            <p class="card-creative__subtitle">Project Manager</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative-->
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="images/team-4-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Mary Johnson</p>
                                            <p class="card-creative__subtitle">Senior Copywriter</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients-->
    <section class="section section-md bg-white text-center">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Clients</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="{{route('contacts', ['locale' => App::getLocale()])}}"><span>@lang('buttons.get-quote')</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <div class="range range-condensed range-md-reverse range-flex">
                <div class="cell-md-6 bg-gray-dark bg-image" style="background-image: url(/images/parallax-5.jpg);">
                    <div class="section-variant-1">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel_style-3" data-items="1" data-autoplay="true" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="/images/testimonials-1-88x88.jpg" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Median was a great strategic partner and provided valuable insights to support our turnaround. Their understanding of our business and the marketplace resulted in recommendations to help fuel our success.</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Samuel Johnson</span></li>
                                            <li><span class="small">CEO “BTC Ltd.”</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="images/testimonials-2-88x88.jpg" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Your company is very knowledgeable. I love the approach you bring to problems. I have always felt that the people here were part of our team. To this day, that is a huge differentiator.</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">John Williams</span></li>
                                            <li><span class="small">CEO “InterInverse”</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="images/testimonials-3-88x88.jpg" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">This advertising agency has been critical in the growth of our marketing capabilities, especially in a part of our business where we were trying to go from one brand to another very quickly.</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Will Peters</span></li>
                                            <li><span class="small">CEO “Betaworks”</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-md-6">
                    <div class="link-block-group"><a class="link-block" href="#"><img src="images/brand-1-216x102.png" alt="" width="216" height="102"/></a><a class="link-block" href="#"><img src="images/brand-2-155x34.png" alt="" width="155" height="34"/></a><a class="link-block" href="#"><img src="images/brand-3-122x33.png" alt="" width="122" height="33"/></a><a class="link-block" href="#"><img src="images/brand-4-100x76.png" alt="" width="100" height="76"/></a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- News-->
    {{--<section class="section section-md bg-white">--}}
        {{--<div class="shell shell-wide">--}}
            {{--<div class="range range-md-center">--}}
                {{--<div class="cell-lg-11">--}}
                    {{--<!-- Section Header-->--}}
                    {{--<div class="section__header">--}}
                        {{--<h2>News</h2>--}}
                        {{--<div class="section__header-element"><a class="link link-arrow" href="news.html"><span>Read Our News</span></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="range range-center range-30 range-flex">--}}
                        {{--<div class="cell-sm-10 cell-lg-6">--}}
                            {{--<article class="post-modern"><a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-4-764x215.jpg" alt="" width="764" height="215"/></a>--}}
                                {{--<div class="post-modern__main">--}}
                                    {{--<p class="post-modern__title"><a href="single-post.html">Email Newsletters Hit a Speed Bump with Inaccurate Open Rates</a></p>--}}
                                    {{--<p class="post-modern__text">As Clover Letter Emails Got Bigger in size, Founders Say, Its Open Rate Collapsed. Email newsletters are just as effective when working with existing customers, as they were from the very start.Also, the part of the problem...</p>--}}
                                    {{--<ul class="post-modern__meta">--}}
                                        {{--<li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">January 6, 2017</a></li>--}}
                                        {{--<li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>--}}
                                        {{--<li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                        {{--</div>--}}
                        {{--<div class="cell-sm-5 cell-lg-3">--}}
                            {{--<article class="post-modern"><a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-1-365x215.jpg" alt="" width="365" height="215"/></a>--}}
                                {{--<div class="post-modern__main">--}}
                                    {{--<p class="post-modern__title"><a href="single-post.html">How We Measure the Increasing Vlogs' Ad Potential</a></p>--}}
                                    {{--<p class="post-modern__text">We have recently finished our research, which is closely connected</p>--}}
                                    {{--<ul class="post-modern__meta">--}}
                                        {{--<li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">January 6, 2017</a></li>--}}
                                        {{--<li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>--}}
                                        {{--<li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                        {{--</div>--}}
                        {{--<div class="cell-sm-5 cell-lg-3">--}}
                            {{--<article class="post-modern"><a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-2-365x215.jpg" alt="" width="365" height="215"/></a>--}}
                                {{--<div class="post-modern__main">--}}
                                    {{--<p class="post-modern__title"><a href="single-post.html">Digital Marketing Metrics That Really Matter Nowadays</a></p>--}}
                                    {{--<p class="post-modern__text">Marketing is currently in a state of evolution where it is dispensing</p>--}}
                                    {{--<ul class="post-modern__meta">--}}
                                        {{--<li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">January 6, 2017</a></li>--}}
                                        {{--<li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>--}}
                                        {{--<li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection
