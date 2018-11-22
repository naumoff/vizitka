@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-9.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">Our Work</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Home</a></li>
                <li class="active">Our Work</li>
            </ul>
        </div>
    </section>

    <!-- Our Projects-->
    <section class="section section-md bg-white">
        <div class="shell-fluid">
            <div class="row range-40">
                <!-- Isotope Filters-->
                <div class="col-lg-12">
                    <div class="shell">
                        <!-- Section Header-->
                        <div class="section__header section__header_wide">
                            <h4>Our Works</h4>
                            <div class="isotope-filters isotope-filters-horizontal">
                                <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                                <ul class="isotope-filters-list" id="isotope-filters">
                                    <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                                    <li><a data-isotope-filter="Commercials" data-isotope-group="gallery" href="#">Commercials</a></li>
                                    <li><a data-isotope-filter="Branding" data-isotope-group="gallery" href="#">Branding</a></li>
                                    <li><a data-isotope-filter="Digital advertising" data-isotope-group="gallery" href="#">Digital advertising</a></li>
                                    <li><a data-isotope-filter="Printed Ads" data-isotope-group="gallery" href="#">Printed Ads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Isotope Content-->
                <div class="col-lg-12">
                    <div class="isotope isotope-1" data-isotope-layout="masonry" data-isotope-group="gallery">
                        <div class="row row-no-gutter">
                            <div class="col-xs-6 col-md-4 isotope-item" data-filter="Commercials">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-1-639x524.jpg" alt="" width="639" height="524"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">New Office Co.</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-2 isotope-item" data-filter="Digital advertising">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-2-320x262.jpg" alt="" width="320" height="262"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">2K Stationery</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-2 isotope-item" data-filter="Commercials">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-4-320x524.jpg" alt="" width="320" height="524"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">iStep</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-4 isotope-item" data-filter="Branding">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-3-640x524.jpg" alt="" width="640" height="524"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">PaperWorks Ltd.</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-2 isotope-item" data-filter="Digital advertising">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-5-320x262.jpg" alt="" width="320" height="262"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">BTS Corp.</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-2 isotope-item" data-filter="Digital advertising">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-7-320x524.jpg" alt="" width="320" height="524"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">Greenery Ltd.</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-4 isotope-item" data-filter="Branding">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-8-639x524.jpg" alt="" width="639" height="524"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">Laserworx</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-2 isotope-item" data-filter="Printed Ads">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-9-320x262.jpg" alt="" width="320" height="262"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">MAX Computing</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-4 isotope-item" data-filter="Commercials">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-10-640x524.jpg" alt="" width="640" height="524"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">Razor Publishing</p>
                                    </div></a>
                            </div>
                            <div class="col-xs-6 col-md-2 isotope-item" data-filter="Printed Ads">
                                <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-11-320x262.jpg" alt="" width="320" height="262"/>
                                    <div class="thumb-zoe__caption">
                                        <p class="thumb-zoe__title">Rolx Accessories</p>
                                    </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
