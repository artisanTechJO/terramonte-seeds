@extends('layouts.User.userLayout')
@section('head')
    <style>
        #events .player .vp-video-wrapper{
            border-radius: 10px !important;
        }
        #events .player vp-controls-wrapper .vp-title{
            display: none !important;
        }
        @media(min-width:365px) and (max-width:700px){
            .entry-header{
                height:265px;
            }
            iframe{
                border-radius: 10px;
            }
            .entry-header iframe{
                height:100%;
                width:100%;
            }
        }
        @media(max-width:364px){
            iframe{
                border-radius: 10px;
            }
            .entry-header iframe{
                height:100%;
            }
        }
        .vp-center #player{
            height:400px !important;
            border-radius: 10px;
        }

    </style>
@endsection
@section('content')
    <!-- about section start -->
    <div class="container">
        <div class="row justify-content-center mt-5" id="events">
            <div class="col-lg-6  main-content">
                <div class="entry-wrapper">
                    <div class="entry-single">
                        <div class="entry-header">
                            <video
                                id="my-video2"
                                class="video-js"
                                controls
                                preload="auto"
                                height="350px"
                                poster="MY_VIDEO_POSTER.jpg"
                                data-setup='{"poster":"https://terramonteseeds.com/User/assets/images/TmLogo2.png"}'
                                style="width: 100%"
                            >
                                <source src="/fieldday.mp4" type="video/mp4" />
                                <source src="/fieldday.mp4" type="video/webm" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  main-content">
                <div class="entry-wrapper">
                    <div class="entry-single">
                        <div class="entry-header">
                            <video
                                id="my-video"
                                class="video-js"
                                controls
                                preload="auto"
                                height="350px"
                                poster="MY_VIDEO_POSTER.jpg"
                                data-setup='{"poster":"https://terramonteseeds.com/User/assets/images/TmLogo2.png"}'
                                style="width: 100%"
                            >
                                <source src="/terramonte project.mp4" type="video/mp4" />
                                <source src="/terramonte project.mp4" type="video/webm" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($events as $event)
            <div class="row justify-content-center mt-5">
                <div class="col-lg-12  main-content">
                    <div class="entry-wrapper">
                        <div class="entry-single">
                            <section class="slider-banner" style="    height: 540px;">
                                <div class="banner-slider-container">
                                    <div class="swiper-wrapper">
                                        @foreach($event->getMedia('event') as $event_image)
                                            <div class="swiper-slide">
                                                <div class="banner-content-area">
                                                    <div class="slider-image slider-image2" style="background-image: url('{{$event_image->getUrl()}}');background-size: cover !important;"></div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </section>
                            <div class="entry-content">
                                <ul class="meta-post list-unstyled pl-0 d-flex">
                                    <li>
                                        <span class="icon"><i class="far fa-clock"></i></span>
                                        <span class="meta-content">{{$event->events_date}}</span>
                                    </li>
                                </ul>
                                <h2 class="title mb-3">{{$event->title}}</h2>
                                <div style="color: #000">
                                    {!! $event->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- about section end -->

@endsection
@section('scripts')
    <script>
        $(documnt).ready(function(){
            $('#player').css('height','100%');
        });
    </script>
@endsection
