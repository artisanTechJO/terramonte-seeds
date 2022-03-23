@extends('layouts.User.userLayout')
@section('head')
    <style>
        #events .player .vp-video-wrapper{
            border-radius: 10px !important;
        }
        #events .player vp-controls-wrapper .vp-title{
            display: none !important;
        }
        @media(max-width:700px){
            iframe{
                height:100px !important;
            }

        }
    </style>
@endsection
@section('content')
<!-- about section start -->

    <div class="container">
        <div class="row justify-content-center mt-5" id="events">
            <div class="col-lg-9  main-content">
                <div class="entry-wrapper">
                    <div class="entry-single">
                        <div class="entry-header">
                            <iframe width="100%" height="500" src="https://player.vimeo.com/video/691534464" style="border:none;border-radius: 15px">
                            </iframe>
                        </div>
                        <div class="entry-content">
                            <ul class="meta-post list-unstyled pl-0 d-flex">
                                <li>
                                    <span class="icon"><i class="far fa-clock"></i></span>
                                    <span class="meta-content">10/4/2021</span>
                                </li>
                            </ul>
                            <h2 class="title mb-3">Field day</h2>
                            <div style="color: #000">
                               Scenes from the field day of <strong>Terra Monte Seeds Company</strong> in our station in jordan vauy , for protected and open field varieties sush as tomato, cucumbers, sweet peppers, hot peppers, cherry tomato, which are characterized by advanced and developed specifications.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($events as $event)
            <div class="row justify-content-center mt-5">
                <div class="col-lg-9  main-content">
                    <div class="entry-wrapper">
                        <div class="entry-single">
                            <div class="entry-header">
                                <img src="{{$event->getMedia('event')->first()->getUrl()}}" alt="thumb">
                            </div>
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
