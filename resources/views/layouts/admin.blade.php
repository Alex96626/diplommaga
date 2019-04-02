<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/layouts\bootstrap.min.css')}}"/>
    <!--<link rel="stylesheet" href="layouts\editor.style.css"/>-->
    <link rel="stylesheet" href="{{asset('assets/layouts/font.awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/layouts/magnific.popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/layouts/responsive.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"/>
    




    <script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/layouts/bootstrap-filestyle.min.js')}}"></script>

</head>
<body>

{{-- <header id="first"> --}}
    @yield('header')

@if(count($errors) > 0)
        <div class="validate_error">
            <ul>
                @foreach($errors->all as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('status'))
        <div class="alert alert-success">

            {{session('status')}}

        </div>
    @endif
</header>

@yield('content')
</body>
</html>