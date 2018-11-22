@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">Services</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </section>

    <!-- Our production-->
    <section class="section section-md bg-white">
        <div class="shell">
            <div class="tabs-custom tabs-custom-init tabs-inline" id="tabs-production">
                <!-- Section Header-->
                <div class="section__header">
                    <h4>Our production</h4>
                    <div class="section__header-element">
                        <!-- Nav tabs-->
                        <div class="navigation-custom">
                            <button class="button navigation-custom__toggle" data-custom-toggle=".navigation-custom__content" data-custom-toggle-hide-on-blur="true">Filter</button>
                            <div class="navigation-custom__content">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tabs-production-1" data-toggle="tab">Digital Advertising</a></li>
                                    <li><a href="#tabs-production-2" data-toggle="tab">Media Buying</a></li>
                                    <li><a href="#tabs-production-3" data-toggle="tab">Brand Marketing</a></li>
                                    <li><a href="#tabs-production-4" data-toggle="tab">Market Research</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tabs-production-1">
                        <div class="layout-horizontal layout-horizontal_md-reverse">
                            <div class="layout-horizontal__main">
                                <h4>Digital Advertising</h4>
                                <p>Digital advertising services help media & entertainment companies address the profound evolution sweeping across the industry.</p>
                                <p>We bring essential expertise, tools and services to help businesses transition to the new multimedia advertising model, while offering a complete suite of services across the spectrum of digital capabilities, in order to transform media.</p><a class="button button-primary" href="#">Order services of our company</a>
                            </div>
                            <div class="layout-horizontal__aside">
                                <div class="slick-slider-vertical">
                                    <div class="slick-slider carousel-parent" id="parent-carousel-1" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel-1" data-for="#child-carousel-1">
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-1-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-2-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-4-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slider carousel-child" id="child-carousel-1" data-for="#parent-carousel-1" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1" data-vertical="false" data-xs-vertical="false" data-sm-vertical="true" data-md-vertical="true" data-lg-vertical="true" data-center-mode="true">
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-1-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-2-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-4-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-production-2">
                        <div class="layout-horizontal layout-horizontal_md-reverse">
                            <div class="layout-horizontal__main">
                                <h4>Media Buying</h4>
                                <p>Media buying is the procurement of media inventory. The media buying function negotiates price and placement for advertisements.</p>
                                <p>Media buying differs from “earned” or “owned” media. It falls into the “paid” media category and plays an essential role in marketing. Media buying is the acquisition of media real estate for the most advantageous spaces and timeslots.</p><a class="button button-primary" href="#">Order services of our company</a>
                            </div>
                            <div class="layout-horizontal__aside">
                                <div class="slick-slider-vertical">
                                    <div class="slick-slider carousel-parent" id="parent-carousel-2" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel-2" data-for="#child-carousel-2">
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-4-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-6-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-1-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slider carousel-child" id="child-carousel-2" data-for="#parent-carousel-2" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1" data-vertical="false" data-xs-vertical="false" data-sm-vertical="true" data-md-vertical="true" data-lg-vertical="true" data-center-mode="true">
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-4-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-6-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-1-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-production-3">
                        <div class="layout-horizontal layout-horizontal_md-reverse">
                            <div class="layout-horizontal__main">
                                <h4>Brand Marketing</h4>
                                <p>Your brand is your most valuable intellectual property. It represents your business’s identity and enhances your corporate culture.</p>
                                <p>When introducing your company to new prospects, customers or distributors, use quality brand marketing to present a strong, positive impression. It’s important to build and implement a strategy that generates the right image.</p><a class="button button-primary" href="#">Order services of our company</a>
                            </div>
                            <div class="layout-horizontal__aside">
                                <div class="slick-slider-vertical">
                                    <div class="slick-slider carousel-parent" id="parent-carousel-3" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel-3" data-for="#child-carousel-3">
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-6-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-1-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-2-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slider carousel-child" id="child-carousel-3" data-for="#parent-carousel-3" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1" data-vertical="false" data-xs-vertical="false" data-sm-vertical="true" data-md-vertical="true" data-lg-vertical="true" data-center-mode="true">
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-6-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-1-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-2-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-production-4">
                        <div class="layout-horizontal layout-horizontal_md-reverse">
                            <div class="layout-horizontal__main">
                                <h4>Market Research</h4>
                                <p>Market research is the process of assessing the viability of a new good or service through research conducted directly with the consumer.</p>
                                <p>The purpose of this service is to examine the market associated with a particular good or service to determine how the audience will receive it. This can include information for market segmentation and product differentiation.</p><a class="button button-primary" href="#">Order services of our company</a>
                            </div>
                            <div class="layout-horizontal__aside">
                                <div class="slick-slider-vertical">
                                    <div class="slick-slider carousel-parent" id="parent-carousel-4" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel-4" data-for="#child-carousel-4">
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-2-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-4-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-image"><img src="images/services-6-565x401.jpg" alt="" width="565" height="401"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slider carousel-child" id="child-carousel-4" data-for="#parent-carousel-4" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1" data-vertical="false" data-xs-vertical="false" data-sm-vertical="true" data-md-vertical="true" data-lg-vertical="true" data-center-mode="true">
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-2-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-3-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-4-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-5-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slick-slider__inner">
                                                <div class="slick-thumb"><img src="images/services-6-565x401.jpg" alt="" width="565" height="401"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter-->
    <section class="section section-md bg-gray-dark" style="background-color: #3c3c3c;">
        <div class="shell">
            <div class="range range-50">
                <div class="cell-xs-6 cell-md-3">
                    <!-- Box counter-->
                    <article class="box-counter-modern box-counter-bordered">
                        <div class="box-counter-modern__wrap">
                            <div class="counter" data-zero="true">35</div>
                        </div>
                        <p class="box-counter-modern__title">Partners worldwide</p>
                    </article>
                </div>
                <div class="cell-xs-6 cell-md-3">
                    <!-- Box counter-->
                    <article class="box-counter-modern box-counter-bordered">
                        <div class="box-counter-modern__wrap"><span class="small">#</span>
                            <div class="big" data-zero="true">01</div>
                        </div>
                        <p class="box-counter-modern__title">Advertising agency</p>
                    </article>
                </div>
                <div class="cell-xs-6 cell-md-3">
                    <!-- Box counter-->
                    <article class="box-counter-modern box-counter-bordered">
                        <div class="box-counter-modern__wrap">
                            <div class="counter" data-zero="true">264</div>
                        </div>
                        <p class="box-counter-modern__title">Successful projects</p>
                    </article>
                </div>
                <div class="cell-xs-6 cell-md-3">
                    <!-- Box counter-->
                    <article class="box-counter-modern box-counter-bordered">
                        <div class="box-counter-modern__wrap">
                            <div class="counter" data-zero="true">17</div>
                        </div>
                        <p class="box-counter-modern__title">Years in the industry</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
