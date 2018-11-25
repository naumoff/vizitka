@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(/images/bg-image-6.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">@lang($_t::ROUTE_CONTACTS)</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">@lang($_t::ROUTE_MAIN)</a></li>
                <li class="active">@lang($_t::ROUTE_CONTACTS)</li>
            </ul>
        </div>
    </section>

    <!-- Get in Touch-->
    <section class="section section-lg bg-white">
        <div class="shell">
            <div class="layout-bordered">
                <div class="layout-bordered__main text-center">
                    <div class="layout-bordered__main-inner">
                        <h3>@lang($_t::HEAD_GET_IN_TOUCH)</h3>
                        <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.</p>
                        <!-- RD Mailform-->
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="range range-sm-bottom range-20">
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                                        <label class="form-label" for="contact-first-name">@lang($_t::PLACEHOLDER_NAME)</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                        <label class="form-label" for="contact-phone">@lang($_t::PLACEHOLDER_PHONE)</label>
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">@lang($_t::PLACEHOLDER_MESSAGE)</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email">@lang($_t::PLACEHOLDER_ENTER_EMAIL)</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <button class="button button-block button-primary" type="submit">@lang($_t::BUTTON_SEND_MESSAGE)</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="layout-bordered__aside">
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">@lang($_t::HEAD_GET_SOCIAL)</p>
                        <ul class="list-inline-xs">
                            <li><a class="icon icon-sm icon-default fa fa-facebook" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-google" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-youtube" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">@lang($_t::HEAD_PHONE)</p>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                            <div class="unit__body"><a href="callto:#">1-800-1234-567</a></div>
                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">@lang($_t::HEAD_EMAIL)</p>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                            <div class="unit__body"><a href="mailto:#">info@demolink.org</a></div>
                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">@lang($_t::HEAD_ADDRESS)</p>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                            <div class="unit__body"><a href="#">6036 Richmond hwy., <br> Alexandria, VA, 2230</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.4176226692634!2d30.497112816055733!3d50.4519474794756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6089c0261f%3A0x5c802a3ee8f66bb7!2sProZorro!5e0!3m2!1sru!2sua!4v1543161188163" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
@endsection
