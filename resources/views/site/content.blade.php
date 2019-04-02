{{-- @foreach($menuses as $k=>$menus) --}}

@if(isset($content_intro))
    <section id="service" class="module icon-service-module img-background parallax clearfix"
             data-stellar-background-ratio="0.5" style="background-position: 50% 32px;">
        <!--<div class="triangle wow fadeInDown" data-wow-delay=".5s" style="border-left: 264px solid transparent; border-right: 264px solid transparent; border-top-color: rgb(24, 26, 28); visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"></div>-->
        <div class="container">
            <div class="row">
                <div class="module-caption col-md-12 text-center wow zoomIn" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                    <h2>{!!$menuses[0]["content_title"]!!}</h2>
                    <p>{!!$menuses[0]["content_title_text"]!!}</p>
                    <div class="separator">
                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </div><!-- .separator -->
                    <div class="spacer"></div>
                </div><!-- .module-caption -->
                @foreach($content_intro as $k=>$intro)
                    @if($k % 3 == 0)
                        <div class="icon-service-box col-md-4 text-center wow fadeInLeft" data-wow-delay=".5s"
                    @endif
                    @if($k % 3 == 2)
                        <div class="icon-service-box col-md-4 text-center wow fadeInRight" data-wow-delay=".5s"
                    @endif
                    @if($k % 3 == 1)
                      @if($k % 2 == 0)
                        <div class="icon-service-box col-md-4 text-center wow fadeInUp`" data-wow-delay=".5s"
                          @else
                           <div class="icon-service-box col-md-4 text-center wow fadeInDown" data-wow-delay=".5s"
                    @endif
                      @endif
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <div class="service-icon">
                            <i class="fa {!! $content_intro[$k]["class_icon"] !!}" aria-hidden="true"></i>
                        </div><!-- .service-icon -->
                        <h3 class="service-title"><span>{!!$content_intro[$k]["title"]!!}</span></h3>
                        <p class="service-content">{!!$content_intro[$k]["text"]!!}</p>
                        <div class="spacer"></div>
                    </div><!-- .icon-service-box -->
                    @endforeach
            </div><!-- .row -->
        </div><!-- .container -->
    </section>
@endif
@if(isset($content_highlights))
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">{!!$menuses[1]["content_title"]!!}</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($content_highlights as $k=>$highlight)

                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="feature">
                            @if($k % 3 ==0 || $k % 3 == 2 )
                            <i class="icon-lg {!! $content_highlights[$k]["class_icon"] !!} wow fadeIn" data-wow-delay=".3s"></i>
                            @endif
                                @if($k % 3 ==1 )
                                    <i class="icon-lg {!! $content_highlights[$k]["class_icon"] !!} wow fadeInUp" data-wow-delay=".2s"></i>
                                @endif
                            <h3>{!!$content_highlights[$k]["title"]!!}</h3>
                            <p class="text-muted">{!!$content_highlights[$k]["text"]!!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if(isset($content_gallery))
    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="margin-top-0 text-primary">{!!$menuses[2]["content_title"]!!}</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="row no-gutter">
                @foreach($content_gallery as $k=>$gallery)
                    <div class="col-lg-4 col-sm-6">
                        <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="{{asset('assets/image/'.$content_gallery[$k]["img"])}}">
                            {{--<img src="{{asset('assets/image\img1.jpg')}}" class="img-responsive" alt="Image_{{$k+1}}">--}}
                            {!! Html::image('assets/image/'.$content_gallery[$k]["img"],'',array('class'=>'img-responsive','alt'=>'Image_1'.$k))!!}
                            <div class="gallery-box-caption">
                                <div class="gallery-box-content">
                                    <div>
                                        <i class="icon-lg ion-ios-search"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if(isset($content_features))
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">{!!$menuses[3]["content_title"]!!}</h2>

                @foreach($content_features as $k=>$feature)
                    @if($k % 2 ==0 )
                        <hr>
                        <div class="media wow fadeInRight">
                            <h3>{!!$content_features[$k]["title"]!!}</h3>
                            <div class="media-body media-middle">
                                <p>{!!$content_features[$k]["text"]!!}</p>
                            </div>
                            <div class="media-right">
                                <i class="icon-lg {!! $content_features[$k]["class_icon"] !!}"></i>
                            </div>
                        </div>
                        @else
                        <hr>
                        <div class="media wow fadeIn">
                            <h3>{!!$content_features[$k]["title"]!!}</h3>
                            <div class="media-left">
                                <i class="icon-lg {!! $content_features[$k]["class_icon"] !!}"></i>
                            </div>
                            <div class="media-body media-middle">
                                <p>{!!$content_features[$k]["text"]!!}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
            </div>
        </div>
    </section>
@endif
@if(isset($content_getstarted))
    <section class="bg-dark" id="getstarted">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 class="text-primary">{!!$menuses[4]["content_title"]!!}</h2>
                {{--<a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext"--}}
                   {{--class="btn btn-default btn-lg wow flipInX">Free Download</a>--}}
                @foreach($content_getstarted as $k=>$getstart)
                <a href="http:\\{!!$content_getstarted [$k]["link"]!!}" target="ext"
                   class="btn btn-default btn-lg wow flipInX">Free Download</a>
                    @endforeach
            </div>
            <br>
            <hr/>
            <br>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        @foreach($content_getstarted as $k=>$getstart)
                        <h6 class="wide-space text-center">{!!$content_getstarted [0]["text"]!!}</h6>
@endforeach

                        {{--@foreach($content_getstarted as $k=>$getstarted)--}}
                        <div class="col-sm-3 col-xs-6 text-center">
                            <i class="icon-lg ion-social-html5-outline" title="html 5"></i>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <i class="icon-lg ion-social-sass" title="sass"></i>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <i class="icon-lg ion-social-javascript-outline" title="javascript"></i>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <i class="icon-lg ion-social-css3-outline" title="css 3"></i>
                        </div>
                            {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
@if(isset($content_contact))
<section id="contact" class="module contact-module img-background parallax clearfix" data-stellar-background-ratio="0.5"
         style="background-position: 50% 80.7656px;">
    <div class="container">
        <div class="row">
            <div class="module-caption col-md-12 text-center wow fadeInDown" data-wow-delay=".2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"><h2>
                    {!!$menuses[5]["content_title"]!!}</h2>
                <p>{!!$menuses[5]["content_title_text"]!!}</p>
                <div class="separator"><span><i class="fa fa-circle" aria-hidden="true"></i></span></div>
                <div class="spacer"></div>
            </div>
            <div class="contact-info col-md-4 clearfix">
                <div class="contact-item wow bounceInLeft" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
                    <div class="ci-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="ci-title">{!!$content_contact [0]["title"]!!}</div>
                    <div class="ci-content">{!!$content_contact [0]["text"]!!}</div>
                </div>
                <div class="contact-item wow bounceInLeft" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
                    <div class="ci-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="ci-title">{!!$content_contact [1]["title"]!!}</div>
                    <div class="ci-content">{!!$content_contact [1]["text"]!!}</div>
                </div>
                <div class="contact-item wow bounceInLeft" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
                    <div class="ci-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="ci-title">{!!$content_contact [2]["title"]!!}</div>
                    <div class="ci-content"><a href="mailto:hi@betheme.me">{!!$content_contact [2]["text"]!!}</a></div>
                </div>
            </div>
            <div class="contact-form col-md-7 col-md-offset-1 clearfix wow swing" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: swing;">
                <form  action="{{ route('home') }}" method="post" id="contact-form" class="contact-form clearfix" novalidate="novalidate">
                    <div class="contact-form-process"><i class="fa fa-spinner fa-pulse" aria-hidden="true"></i></div>
                    <div id="contact-form-result"><span></span></div>
                    <fieldset class="col-sm-4">
                        <input type="text" id="contact-form-name" name="name" placeholder="Name"
                                                      value="" class="cf-form-control required"
                                                      data-msg-required="This field is required." aria-required="true">
                        @if(session('status'))
                            <div class="alert alert-success">

                                {{session('status')}}
                            </div>
                        @endif
                        @if( count($errors) > 0)

                            <div class="validate_error">
                                <ul>
                                @if($errors->has("name"))
                                    @foreach ($errors->get('name') as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                @endif
                                </ul>
                            </div>

                        @endif
                    </fieldset>
                    <fieldset class="col-sm-4">
                        <input type="email" id="contact-form-email" name="email" placeholder="Email" value=""
                               class="required email cf-form-control" data-msg-required="This field is required."
                               data-msg-email="Invalid email address." aria-required="true">
                        @if( count($errors) > 0)
                            <div class="validate_error">
                                <ul>
                                    @if($errors->has("email"))
                                        @foreach ($errors->get('email') as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </fieldset>
                    <fieldset class="col-sm-4">
                        <input type="text" id="contact-form-phone" name="phone" placeholder="Phone" value=""
                               class="cf-form-control">
                        @if( count($errors) > 0)
                            <div class="validate_error">
                                <ul>
                                    @if($errors->has("phone"))
                                        @foreach ($errors->get('phone') as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </fieldset>
                    <fieldset class="col-sm-12">
                        <input type="text" id="contact-form-subject" name="subject" placeholder="Subject" value=""
                               class="required cf-form-control" data-msg-required="This field is required."
                               aria-required="true">
                        @if( count($errors) > 0)
                            <div class="validate_error">
                                <ul>
                                    @if($errors->has("subject"))
                                        @foreach ($errors->get('subject') as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </fieldset>
                    <fieldset class="col-sm-12">
                        <textarea rows="3" id="contact-form-message" name="message" placeholder="Message"
                                  class="required cf-form-control" data-msg-required="This field is required."
                                  aria-required="true" tabindex="1"
                                  style="overflow-y: hidden; outline: none;"></textarea>
                        @if( count($errors) > 0)
                            <div class="validate_error">
                                <ul>
                                    @if($errors->has("message"))
                                        @foreach ($errors->get('message') as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </fieldset>
                    <fieldset class="captcha col-sm-6">
                        <input type="text" id="contact-form-captcha" name="captcha" placeholder="7 + 6 = ?"
                               class="required cf-form-control" data-msg-required="This field is required."
                               data-rule-equalto="#captcha-value" data-msg-equalto="Please check your math."
                               aria-required="true">
                        <input type="hidden" id="captcha-value" value="13">
                        @if( count($errors) > 0)
                            <div class="validate_error">
                                <ul>
                                    @if($errors->has("captcha"))
                                        {{--@foreach ($errors->get('captcha') as $error)--}}
                                            <li>{{$errors->first('captcha')}}</li>
                                        {{--@endforeach--}}
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </fieldset>
                    <fieldset class="submit col-sm-6">
                        <input type="hidden" name="action" value="contact_form">
                        <input type="hidden" id="ajax_contact_form_nonce" name="ajax_contact_form_nonce"
                               value="a3eb34cec1"><input type="hidden" name="_wp_http_referer" value="/">
                        <button class="btn btn-light" type="submit" id="contact-form-submit" name="submit"
                                value="submit">Send
                        </button>
                    </fieldset>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</section>
@endif

    {{-- @endforeach --}}