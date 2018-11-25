<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Sans:300,400,500,700%7CRaleway:700">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page Loader-->
@include('inclusions.page_loader')
<!-- Page-->
<div class="page">
    <!-- Page Header-->
    @include('inclusions.header')

    <!-- Content -->
    @yield('content')

    <!-- Page Footer-->
    @include('inclusions.footer')

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="/js/core.min.js"></script>
<script src="/js/script.js"></script>
<script>
    $(document).ready(function(){
        $('.lang-switch').on('click', function () {
            $('.button-quote').css('margin-right', '38px');
        })
    });
</script>
</body>
</html>