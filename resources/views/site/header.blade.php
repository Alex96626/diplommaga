
@if(isset($pages))
<div class="header-content">
        <div class="inner">
            <h1 class="cursive"> {!!$pages[0]["title"]!!}</h1>
            <h4>{!!$pages[0]["text"]!!}</h4>
            <hr>
            <a href="#video-background" id="toggleVideo" aria-expanded="true" data-toggle="collapse"
               class="btn btn-primary btn-xl" onclick="ShowVideo()">Toggle Video</a> &nbsp; <a href="#service"
                                                                                               class="btn btn-primary btn-xl page-scroll">Get
                Started</a>
        </div>
    </div>
    <video autoplay="no" loop="" muted="" class="embed-responsive-item fillWidth fadeIn wow collapse in  "
           data-wow-delay="0.5s" id="video-background">
        <source src="{{asset('assets/video/video1.mp4')}}" type="video/mp4" muted="muted">
        Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>

@endif





    {{--@if(session('status'))--}}
        {{--<div class="alert alert-success">--}}

            {{--{{session('status')}}--}}

        {{--</div>--}}
    {{--@endif--}}

    {{--@if( count($errors) > 0)--}}
        {{--<div class="alert alert-danger">--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}

            {{--</ul>--}}


        {{--</div>--}}
    {{--@endif--}}