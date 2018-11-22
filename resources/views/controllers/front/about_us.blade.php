@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">About Us</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </section>

    <!-- Experience since 1999-->
    <section class="section section-md bg-white">
        <div class="shell">
            <div class="range range-70 range-sm-center range-lg-justify">
                <div class="cell-sm-10 cell-md-6 cell-lg-5">
                    <h4>Experience since 2006</h4>
                    <p>Our company has been the leading provider of advertising services to American companies since 2006.</p>
                    <p>Median is an integrated branding agency dedicated to creating genuine connections between our clients and their constituents. We were founded in 2006 as a full-service marketing and advertising agency.</p>
                    <h4>Our Mission</h4>
                    <p>We see our mission in providing innovative and effective integrated brand marketing and public relations solutions which help our clients grow their businesses and realize their marketing goals.</p>
                </div>
                <div class="cell-sm-10 cell-md-6">
                    <div class="row grid-2">
                        <div class="col-xs-6"><img src="images/about-1-273x214.jpg" alt="" width="273" height="214"/><img src="images/about-2-273x214.jpg" alt="" width="273" height="214"/>
                        </div>
                        <div class="col-xs-6"><img src="images/about-3-273x451.jpg" alt="" width="273" height="451"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History -->
    <section class="section parallax-container bg-gray-dark" data-parallax-img="images/parallax-2.jpg" alt="">
        <div class="parallax-content">
            <div class="section-md text-center">
                <div class="shell">
                    <h2>Our History</h2>
                    <div class="timeline">
                        <div class="timeline__item-wrap">
                            <!-- Timeline item-->
                            <article class="timeline__item">
                                <div class="timeline__item-header">
                                    <h5>Beginning,2006</h5>
                                </div>
                                <div class="timeline__item-main"><img src="images/about-4-93x86.jpg" alt="" width="93" height="86"/>
                                    <p>We started to offer American companies top-notch marketing services.</p>
                                </div>
                            </article>
                        </div>
                        <div class="timeline__item-wrap">
                            <!-- Timeline item-->
                            <article class="timeline__item timeline__item-reverse">
                                <div class="timeline__item-header">
                                    <h5>Customer service,2008</h5>
                                </div>
                                <div class="timeline__item-main"><img src="images/about-5-93x86.jpg" alt="" width="93" height="86"/>
                                    <p>We improved the level of customer service at all offices of our agency.</p>
                                </div>
                            </article>
                        </div>
                        <div class="timeline__item-wrap">
                            <!-- Timeline item-->
                            <article class="timeline__item">
                                <div class="timeline__item-header">
                                    <h5>Industry Leader,2016</h5>
                                </div>
                                <div class="timeline__item-main"><img src="images/about-6-93x86.jpg" alt="" width="93" height="86"/>
                                    <p>In 2016, we were recognized as the advertising industry leader.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Social Responsibility & Eco Standards-->
    <section class="section section-sm bg-white">
        <div class="shell">
            <div class="range range-50 range-sm-center range-md-left range-lg-justify">
                <div class="cell-sm-10 cell-md-6">
                    <h4>Our Targets</h4>
                    <p>We define oursleves as the company working for the good of our clients. Our main targets are international companies as well as small/medium businesses, and private entrepreneurs.</p>
                    <div class="group-3-columns" data-lightgallery="group">
                        <div class="column-item"><a class="thumb-elegant" href="images/image-1-1200x800_original.jpg" data-lightgallery="item"><img src="images/image-1-166x139.jpg" alt="" width="166" height="139"/>
                                <div class="thumb-elegant__overlay"></div></a></div>
                        <div class="column-item"><a class="thumb-elegant" href="images/image-2-1200x800_original.jpg" data-lightgallery="item"><img src="images/image-2-166x139.jpg" alt="" width="166" height="139"/>
                                <div class="thumb-elegant__overlay"></div></a></div>
                        <div class="column-item"><a class="thumb-elegant" href="images/image-3-1200x800_original.jpg" data-lightgallery="item"><img src="images/image-3-166x139.jpg" alt="" width="166" height="139"/>
                                <div class="thumb-elegant__overlay"></div></a></div>
                    </div>
                </div>
                <div class="cell-sm-10 cell-md-6 cell-lg-5">
                    <h4>Our Certificates</h4>
                    <p>Here are the certificates that acknowledge the high level of our advertising and marketing services.</p>
                    <div class="group-3-columns" style="max-width: 430px;" data-lightgallery="group">
                        <div class="column-item"><a class="thumb-light" href="images/certificate-1-847x1200.jpg" data-lightgallery="item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171"/>
                                <div class="thumb-light__overlay"></div></a></div>
                        <div class="column-item"><a class="thumb-light" href="images/certificate-1-847x1200.jpg" data-lightgallery="item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171"/>
                                <div class="thumb-light__overlay"></div></a></div>
                        <div class="column-item"><a class="thumb-light" href="images/certificate-1-847x1200.jpg" data-lightgallery="item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171"/>
                                <div class="thumb-light__overlay"></div></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Management-->
    <section class="section parallax-container bg-gray-dark" data-parallax-img="images/parallax-4.jpg" alt="">
        <div class="parallax-content">
            <div class="section-md">
                <div class="shell">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h4>Top Management</h4>
                        <div class="section__header-element"><a class="link link-arrow" href="contacts"><span>Contact Us</span></a></div>
                    </div>
                    <div class="range range-30">
                        <div class="cell-sm-6 cell-md-4">
                            <!-- Card creative-->
                            <article class="card-creative">
                                <div class="card-creative__header"><img src="images/team-1-115x119.jpg" alt="" width="115" height="119"/>
                                </div>
                                <div class="card-creative__main" data-fixed-height="">
                                    <p class="card-creative__title">Sam Wilson</p>
                                    <p class="card-creative__subtitle">Founder, CEO</p>
                                    <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4">
                            <!-- Card creative-->
                            <article class="card-creative">
                                <div class="card-creative__header"><img src="images/team-2-115x119.jpg" alt="" width="115" height="119"/>
                                </div>
                                <div class="card-creative__main" data-fixed-height="">
                                    <p class="card-creative__title">Jeffrey Neddery</p>
                                    <p class="card-creative__subtitle">Business Development Manager</p>
                                    <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
