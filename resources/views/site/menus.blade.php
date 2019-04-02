@if(isset($menuses))
{{--{{$menuses or 'Default'}}--}}
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Landing Zero</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="{{$menuses[0]["path"]}}">{{$menuses[0]["title"]}}</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="{{$menuses[1]["path"]}}">{{$menuses[1]["title"]}}</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="{{$menuses[2]["path"]}}">{{$menuses[2]["title"]}}</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="{{$menuses[3]["path"]}}">{{$menuses[3]["title"]}}</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="{{$menuses[4]["path"]}}">{{$menuses[4]["title"]}}</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="{{$menuses[5]["path"]}}">{{$menuses[5]["title"]}}</a>--}}
                    {{--</li>--}}

                    @foreach($menuses as $item)
                            <li >
                                <a class="page-scroll" href="{{$item['path']}}">{{$item['title']}}</a>
                            </li>
                        @endforeach


                </ul>
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme"--}}
                           {{--href="#aboutModal">About</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </nav>
@endif