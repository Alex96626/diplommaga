<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Landing Zero Free Bootstrap Theme with Video</title>
    <meta name="description"
          content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
   
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>

    <link rel="stylesheet" href="{{asset('assets/layouts\bootstrap.min.css')}}"/>
    <!--<link rel="stylesheet" href="layouts\editor.style.css"/>-->
    <link rel="stylesheet" href="{{asset('assets/layouts/font.awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/layouts/magnific.popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/layouts/responsive.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"/>
</head>
<body>
@yield('admin_menus')
{{--header section--}}
<header >
    @yield('header')
</header>
{{--header section--}}
<!--<section class="bg-primary" id="one">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">-->
<!--<h2 class="margin-top-0 text-primary">Built On The Bootstrap Grid</h2>-->
<!--<br>-->
<!--<p class="text-faded">-->
<!--Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid sizes enable you create responsive layouts that behave accordingly on different devices.-->
<!--</p>-->
<!--<a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
    @yield('content')
@yield('footer')
<!--scripts loaded here from cdn for performance -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/layouts/bootstrap-filestyle.min.js"')}}"></script>
</body>
</html>